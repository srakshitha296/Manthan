<?php

namespace App\Exports;

use App\Models\HoD;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class HODsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable; 
    public function collection()
    {
        return HoD::all();
    }
}
