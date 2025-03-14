<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getReservationData()
    {
        // Données pour le graphique d'occupation mensuelle
        $monthlyOccupancy = Reservations::select(
            DB::raw('MONTH(check_in) as month'),
            DB::raw('COUNT(*) as count')
        )
            ->whereYear('check_in', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        
        // Données pour le graphique de chiffre d'affaires
        $monthlyRevenue = Reservations::select(
            DB::raw('MONTH(check_in) as month'),
            DB::raw('SUM(montant) as total')
        )
            ->whereYear('check_in', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        
        // Données pour le graphique de durée des séjours
        $stayDuration = Reservations::select(
            DB::raw('DATEDIFF(check_out, check_in) as duration'),
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('duration')
            ->orderBy('duration')
            ->get();
        
        // Calcul du taux d'occupation pour les 30 prochains jours
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(30);
        
        $dailyOccupancy = [];
        
        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            $count = Reservations::where('check_in', '<=', $date->format('Y-m-d'))
                ->where('check_out', '>', $date->format('Y-m-d'))
                ->count();
            
            $dailyOccupancy[] = [
                'date' => $date->format('Y-m-d'),
                'formatted_date' => $date->format('d M'),
                'count' => $count,
                'rate' => ($count / 10) * 100, // Supposons une capacité de 10 chambres
            ];
        }
        
        return response()->json([
            'monthly_occupancy' => $monthlyOccupancy,
            'monthly_revenue' => $monthlyRevenue,
            'stay_duration' => $stayDuration,
            'daily_occupancy' => $dailyOccupancy,
        ]);
    }
}