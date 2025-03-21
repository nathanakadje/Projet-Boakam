<?php

namespace App\Filament\Resources\ReservationResource\Pages;

use App\Filament\Resources\ReservationResource;
use App\Models\Reservations;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Exports\ReservationsExport;
use Maatwebsite\Excel\Facades\Excel;

class ListReservations extends ListRecords
{
    // protected static string $resource = ReservationResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
    protected static string $resource = ReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('exportAll')
                ->label('Exporter')
                ->icon('heroicon-o-document-arrow-down')
                ->action(function () {
                    return Excel::download(
                        new ReservationsExport(Reservations::all()),
                        'toutes-reservations-' . now()->format('Y-m-d') . '.xlsx'
                    );
                })
                ->color('success')
                ->tooltip('Exporter les réservations'),
        ];
}
}