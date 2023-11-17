<?php

namespace App\Exports;

use App\Models\Citizen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Cell\StringValueBinder;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Color;

class CitizenExport extends StringValueBinder implements FromCollection, ShouldAutoSize, WithStyles, WithCustomValueBinder
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $citizens = Citizen::all();
        $newCitizen = [
            'id' => 'ID',
            'name' => 'NAME',
            'nik' => 'NIK',
            'phone' => 'No Telepon',
            'tps' => 'No TPS',
            'tps_address' => 'Alamat TPS'
        ];
        $citizens->prepend($newCitizen);
        return $citizens;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('A')->getFont()->setBold(true);
        $sheet->getStyle('C')->getAlignment()->getHorizontal();
    }


}
