<?php

namespace App\Filament\Resources\RessourcesResource\Widgets;

use App\Models\Reservations;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReservationsChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Réservations mensuelles';
    protected static ?int $sort = 2;
    protected static ?string $maxHeight = '300px';
    protected static ?string $pollingInterval = null;

    protected function getData(): array
    {
    $data = Reservations::select(
            DB::raw('EXTRACT(MONTH FROM created_at) as month'),
            DB::raw('COUNT(*) as count')
        )
        ->whereRaw('EXTRACT(YEAR FROM created_at) = ?', [date('Y')])
        ->groupBy('month')
        ->orderBy('month')
        ->get();

    $months = [];
    $counts = [];

    // Remplir avec des zéros pour tous les mois
    for ($i = 1; $i <= 12; $i++) {
        $months[] = Carbon::create()->month($i)->format('M');
        $counts[] = 0;
    }

    // Remplacer par les valeurs réelles
    foreach ($data as $item) {
        $counts[$item->month - 1] = $item->count;
    }

    return [
        'datasets' => [
            [
                'label' => 'Nombre de réservations',
                'data' => $counts,
                'backgroundColor' => 'rgba(255, 205, 86, 0.2)',
                'borderColor' => 'rgb(255, 205, 86)',
                'tension' => 0.3,
            ]
        ],
        'labels' => $months,
    ];
}
    

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
                'tooltip' => [
                    'enabled' => true,
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'precision' => 0,
                    ],
                ],
            ],
        ];
    }
}