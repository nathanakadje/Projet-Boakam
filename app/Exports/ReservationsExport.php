<?php

namespace App\Exports;

use App\Models\Reservations;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReservationsExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    protected $reservations;

    public function __construct($reservations)
    {
        $this->reservations = $reservations;
    }

    public function collection()
    {
        return $this->reservations;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nom',
            'Email',
            'Téléphone',
            'Date d\'arrivée',
            'Date de départ',
            'Montant',
            'Date de création',
        ];
    }

    public function map($reservation): array
    {
        return [
            $reservation->id,
            $reservation->name,
            $reservation->email,
            $reservation->phone,
            $reservation->check_in->format('d/m/Y'),
            $reservation->check_out->format('d/m/Y'),
            number_format($reservation->montant, 2, ',', ' ') . ' €',
            $reservation->created_at->format('d/m/Y H:i'),
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}