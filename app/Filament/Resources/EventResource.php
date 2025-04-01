<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';  // More appropriate icon
    protected static ?string $navigationGroup = 'Event Management';
    protected static ?int $navigationSort = 1;
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                ->label('Organizer')
                ->relationship('user', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Select::make('venue_id')
                ->label('Venue')
                ->relationship('venue', 'name') 
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->required()
                    ->maxLength(1000)
                    ->columnSpanFull(),
                    Select::make('category')
                    ->options([
                        'wedding' => 'Wedding',
                        'funeral' => 'Funeral',
                        'birthday' => 'Birthday',
                        'seminar' => 'Seminar',
                    ])
                    ->required()
                    ->native()
                    ->preload(),

                TextInput::make('capacity')
                    ->required()
                    ->numeric()
                    ->minValue(1),

                Select::make('status')
                    ->options([
                        'scheduled' => 'Scheduled',
                        'ongoing' => 'Ongoing',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required()
                    ->default('scheduled')
                    ->native(false),

                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                    FileUpload::make('banner_image')
                    ->image()
                    ->disk('public')  // Add this line
                    ->directory('event_banners')
                    ->required()
                    ->imageEditor()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('category')
                    ->badge()
                    ->colors([
                        'primary' => 'wedding',
                        'success' => 'birthday',
                        'danger' => 'funeral',
                        'warning' => 'seminar',
                    ]),

                TextColumn::make('user.name')
                    ->label('Organizer')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('venue.name')
                    ->label('Venue')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('capacity')
                    ->sortable()
                    ->alignment('center'),

                TextColumn::make('price')
                    ->sortable()
                    ->money('USD')
                    ->alignment('right'),

                TextColumn::make('status')
                    ->sortable()
                    ->badge()
                    ->colors([
                        'primary' => 'scheduled',
                        'warning' => 'ongoing',
                        'success' => 'completed',
                        'danger' => 'cancelled',
                    ]),

                ImageColumn::make('banner_image')
                    ->circular()
                    ->defaultImageUrl(url('/images/placeholder.png')),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category'),
                Tables\Filters\SelectFilter::make('status'),
                Tables\Filters\SelectFilter::make('venue')
                    ->relationship('venue', 'name'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('markAsCompleted')
                        ->action(function ($records) {
                            foreach ($records as $record) {
                                $record->update(['status' => 'completed']);
                            }
                        })
                        ->icon('heroicon-o-check-circle')
                        ->requiresConfirmation(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
