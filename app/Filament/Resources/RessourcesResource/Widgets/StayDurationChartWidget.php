<?php

namespace App\Filament\Resources\RessourcesResource\Widgets;

use App\Models\Reservations;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class StayDurationChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Durée des séjours';
    protected static ?int $sort = 4;
    protected static ?string $maxHeight = '300px';
    protected static ?string $pollingInterval = null;

    protected function getData(): array
    {
        $data = Reservations::select(
            DB::raw("DATE_PART('day', AGE(check_out, check_in)) as duration"),
            DB::raw('COUNT(*) as count')
        )
        ->groupBy('duration')
        ->orderBy('duration')
        ->get();

    $durations = [];
    $counts = [];

    foreach ($data as $item) {
        $durations[] = $item->duration . ' jour' . ($item->duration > 1 ? 's' : '');
        $counts[] = $item->count;
    }

    return [
        'datasets' => [
            [
                'label' => 'Nombre de réservations',
                'data' => $counts,
                'backgroundColor' => [
                    '#10b981', '#6366f1', '#f59e0b', '#ef4444', '#8b5cf6',
                    '#ec4899', '#14b8a6', '#f97316', '#06b6d4', '#84cc16'
                ],
                'hoverOffset' => 4,
            ]
        ],
        'labels' => $durations,
    ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'right',
                ],
                'tooltip' => [
                    'enabled' => true,
                ],
            ],
            'cutout' => '70%',
        ];
    }
}