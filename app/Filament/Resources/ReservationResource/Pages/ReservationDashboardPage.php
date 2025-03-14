<?php

namespace App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\RessourcesResource\Widgets\ReservationsChartWidget;
use App\Filament\Resources\RessourcesResource\Widgets\ReservationStatsWidget;
use App\Filament\Resources\RessourcesResource\Widgets\StayDurationChartWidget;
use App\Filament\Resources\RessourcesResource\Widgets\RevenueChartWidget;
use Filament\Pages\Page;

class ReservationDashboardPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Tableau de bord';
    protected static ?string $navigationGroup = 'Analytiques';
    protected static ?int $navigationSort = 1;
    protected static string $view = 'filament.pages.reservation-dashboard-page';
    protected static ?string $title = 'Tableau de bord des réservations';

    // public function getHeaderWidgets(): array
    // {
    //     return [
    //         ReservationStatsWidget::class,
    //     ];
    // }

    public function getWidgets(): array
    {
        return [
            ReservationsChartWidget::class,
            StayDurationChartWidget::class,
            RevenueChartWidget::class,
            // OccupancyChartWidget::class,
        ];
    }
}