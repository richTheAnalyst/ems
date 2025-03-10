<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationGroup = 'Contacts';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->maxLength(255),
                TextInput::make('email')
                    ->email(''),
                TextInput::make('phone'),
                TextInput::make('subject'),
                Textarea::make('message'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('subject'),
                TextColumn::make('message'),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
{
    // Count new bookings created in the last 24 hours
    $newContactsCount = Contact::where('created_at', '>=', now()->subDay())->count();

    return $newContactsCount > 0 ? (string) $newContactsCount : null;
}

}
