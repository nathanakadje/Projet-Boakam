<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\ReservationResource\RelationManagers;
use App\Models\Reservations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservations::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 1;
    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Gestion des Réservations';
    protected static ?string $navigationLabel = 'Réservations';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label('Téléphone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('check_in')
                    ->label('Date d\'arrivée')
                    ->required(),
                Forms\Components\DatePicker::make('check_out')
                    ->label('Date de départ')
                    ->required()
                    ->afterOrEqual('check_in'),
                Forms\Components\TextInput::make('montant')
                    ->label('Montant')
                    ->numeric()
                    ->required()
                    ->prefix('€'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Téléphone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_in')
                    ->label('Arrivée')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_out')
                    ->label('Départ')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('montant')
                    ->money('EUR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('date_range')
                    ->form([
                        Forms\Components\DatePicker::make('check_in_from')
                            ->label('Arrivée à partir de'),
                        Forms\Components\DatePicker::make('check_in_until')
                            ->label('Arrivée jusqu\'à'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['check_in_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('check_in', '>=', $date),
                            )
                            ->when(
                                $data['check_in_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('check_in', '<=', $date),
                            );
                    }),
                Tables\Filters\Filter::make('montant')
                    ->form([
                        Forms\Components\TextInput::make('montant_min')
                            ->label('Montant minimum')
                            ->numeric(),
                        Forms\Components\TextInput::make('montant_max')
                            ->label('Montant maximum')
                            ->numeric(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['montant_min'],
                                fn (Builder $query, $min): Builder => $query->where('montant', '>=', $min),
                            )
                            ->when(
                                $data['montant_max'],
                                fn (Builder $query, $max): Builder => $query->where('montant', '<=', $max),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('print')
                    ->label('Imprimer')
                    ->icon('heroicon-o-printer')
                    ->url(fn (Reservations $record): string => route('reservations.print', $record))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('export')
                        ->label('Exporter')
                        ->icon('heroicon-o-document-arrow-down')
                        ->action(fn (Collection $records) => /* Action d'export */null),
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
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservation::route('/create'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
    // public static function form(Forms\Form $form): Forms\Form
    // {
    //     return $form
    //         ->schema([
    //             TextInput::make('name')->required()->label('Nom'),
    //             TextInput::make('email')->required()->email(),
    //             TextInput::make('phone')->required()->label('Téléphone'),
    //             DatePicker::make('check_in')->required()->label('Date d\'arrivée'),
    //             DatePicker::make('check_out')->required()->label('Date de départ'),
    //             TextInput::make('montant')->required()->numeric()->label('Montant'),
    //         ]);
    // }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             TextColumn::make('id')->sortable(),
    //             TextColumn::make('name')->searchable(),
    //             TextColumn::make('email')->searchable(),
    //             TextColumn::make('phone'),
    //             TextColumn::make('check_in')->date(),
    //             TextColumn::make('check_out')->date(),
    //             TextColumn::make('montant')->label('Montant')->sortable(),
    //             TextColumn::make('created_at')->dateTime()->label('Créé le'),
    //         ])
    //         ->filters([
    //             //
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //             Tables\Actions\DeleteAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\DeleteBulkAction::make(),
    //         ]);
    // }

    // public static function getRelations(): array
    // {
    //     return [
    //         //
    //     ];
    // }

    // public static function getPages(): array
    // {
    //     return [
    //         'index' => Pages\ListReservations::route('/'),
    //         'create' => Pages\CreateReservation::route('/create'),
    //         'edit' => Pages\EditReservation::route('/{record}/edit'),
    //     ];
    // }
}
