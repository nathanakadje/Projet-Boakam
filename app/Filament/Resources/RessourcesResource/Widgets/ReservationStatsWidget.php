<?php

namespace App\Filament\Resources\RessourcesResource\Widgets;

use App\Models\Reservations;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
class ReservationStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $today = now()->toDateString();
        $currentMonth = now()->startOfMonth()->toDateString();
        $endOfMonth = now()->endOfMonth()->toDateString();

        return [
            Stat::make('Réservations totales', Reservations::count())
                ->description('Nombre total de réservations')
                ->descriptionIcon('heroicon-m-calendar')
                ->chart(
                    Reservations::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
                        ->whereDate('created_at', '>=', now()->subDays(30))
                        ->groupBy('date')
                        ->orderBy('date')
                        ->pluck('count')
                        ->toArray()
                ),
            
            Stat::make('Réservations en cours', Reservations::whereDate('check_in', '<=', $today)
                ->whereDate('check_out', '>=', $today)
                ->count())
                ->description('Clients actuellement présents')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
                
            Stat::make('Montant total du mois', 
                '€' . number_format(Reservations::whereDate('check_in', '>=', $currentMonth)
                    ->whereDate('check_in', '<=', $endOfMonth)
                    ->sum('montant'), 2))
                ->description('Chiffre d\'affaires du mois courant')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('warning'),
                
            Stat::make('Prochaines arrivées', 
                Reservations::whereDate('check_in', '>', $today)
                    ->whereDate('check_in', '<=', now()->addDays(7)->toDateString())
                    ->count())
                ->description('Arrivées dans les 7 prochains jours')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info'),
        ];
    }
}
