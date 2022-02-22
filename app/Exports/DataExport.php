<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ShouldAutosize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class DataExport implements FromCollection, WithHeadings, WithColumnWidths, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = DB::table('employee')
        ->select(
            'employee.id',
            'employee.nama',
            DB::raw('(CASE
            WHEN atasan_id is null THEN "CEO"
            WHEN atasan_id = 1 THEN "Direktur"
            WHEN atasan_id = 2 THEN "Manager"
            WHEN atasan_id > 2 THEN "Staff"
            END) as Posisi'),
            'company.nama as Perusahaan'
        )
        ->join('company', 'employee.company_id', '=', 'company.id')
        ->get();

        return $data;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Posisi',
            'Perusahaan',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 30,
            'C' => 30,
            'D' => 30,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:D1';
                $highestRow = $event->sheet->getDelegate()->getHighestRow();
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12)->setBold(true);
                $styleArray = [
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER
                    ]
                ];

                $event->sheet->getStyle('A1:D'.$highestRow)->applyFromArray($styleArray);
            },
        ];
    }
}
