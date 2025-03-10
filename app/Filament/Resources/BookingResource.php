<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Mail\BookingConfirmation;
use App\Models\Booking;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-m-ticket';
    protected static ?string $navigationGroup = 'Event Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->required(),
                TextInput::make('seats'),
                TextInput::make('booking_date')
                    ->required(),
                Textarea::make('gist')
                    ->maxLength(65535),
                Select::make('user_id')
                    ->relationship('user', 'name') // Assumes a 'user' relationship exists
                    ->required()
                    ->preload()
                    ->label('Organizer')


            ]);
    }
    public static function mutateFormDataBeforeSave(array $data): array
    {
        $booking = Booking::find($data['id']); // Fetch existing booking

        if ($booking) {
            $booking->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'user_id' => $data['user_id'],
            ]); // Update with new data

            try {
                Mail::to($booking->email)->send(new BookingConfirmation($booking));
                Log::info('Booking updated and email resent', [
                    'booking_id' => $booking->id,
                    'email' => $booking->email
                ]);
            } catch (\Exception $e) {
                Log::error('Failed to resend email', ['error' => $e->getMessage()]);
            }
        }

        return $data;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('seats'),
                Tables\Columns\TextColumn::make('booking_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('gist')
                    ->limit(660),
                Tables\Columns\IconColumn::make('new')
                    ->label('New')
                    ->boolean()
                    ->getStateUsing(fn($record) => $record->created_at >= now()->subDay()) // Last 24 hours
                    ->trueIcon('heroicon-o-star') // Star for new bookings
                    ->falseIcon('heroicon-o-check') // Check for old bookings
                    ->tooltip('New booking within the last 24 hours'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Action::make('resendEmail')
                    ->label('Resend Email')
                    ->icon('heroicon-o-envelope')
                    ->color('primary')
                    ->action(function (Booking $record) {
                        try {
                            $record->refresh();
                            Mail::to($record->email)->send(new BookingConfirmation($record));

                            Notification::make()
                                ->title('Email Sent')
                                ->body('The booking confirmation email has been resent successfully.')
                                ->success()
                                ->send();

                            Log::info('Booking email resent', [
                                'booking_id' => $record->id,
                                'email' => $record->email,
                                'user_id' => $record->user_id,
                            ]);
                        } catch (\Exception $e) {
                            Log::error('Failed to resend email', ['error' => $e->getMessage()]);

                            Notification::make()
                                ->title('Email Failed')
                                ->body('Failed to resend the booking confirmation email.')
                                ->danger()
                                ->send();
                        }
                    })
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        // Count new bookings created in the last 24 hours
        $newBookingsCount = Booking::where('created_at', '>=', now()->subDay())->count();

        return $newBookingsCount > 0 ? (string) $newBookingsCount : null;
    }
}
