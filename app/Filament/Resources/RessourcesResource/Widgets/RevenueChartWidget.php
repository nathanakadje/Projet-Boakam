<?php

namespace App\Filament\Resources\RessourcesResource\Widgets;

use App\Models\Reservations;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RevenueChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Chiffre d\'affaires mensuel';
    protected static ?int $sort = 3;
    protected static ?string $maxHeight = '300px';
    protected static ?string $pollingInterval = null;

    protected function getData(): array
    {
        $data = Reservations::select(
        DB::raw("DATE_PART('month', check_in) as month"),
        DB::raw("SUM(montant) as total")
    )
    ->whereYear('check_in', date('Y'))
    ->groupBy('month')
    ->orderBy('month')
    ->get();

$months = [];
$totals = [];

// Remplir avec des zéros pour tous les mois
for ($i = 1; $i <= 12; $i++) {
    $months[] = Carbon::create()->month($i)->format('M');
    $totals[] = 0;
}

// Remplacer par les valeurs réelles
foreach ($data as $item) {
    $totals[$item->month - 1] = round($item->total, 2);
}

return [
    'datasets' => [
        [
            'label' => 'Chiffre d\'affaires (€)',
            'data' => $totals,
            'backgroundColor' => 'rgba(153, 102, 255, 0.2)',
            'borderColor' => 'rgb(153, 102, 255)',
            'fill' => true,
            'tension' => 0.3,
        ]
    ],
    'labels' => $months,
];
    }

    protected function getType(): string
    {
        return 'line';
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
                    'callbacks' => [
                        'label' => "function(context) {
                            return context.dataset.label + ': ' + context.raw + ' €';
                        }",
                    ],
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'callback' => "function(value) {
                            return value + ' €';
                        }",
                    ],
                ],
            ],
        ];
    }
}