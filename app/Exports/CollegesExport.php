<?php

namespace App\Exports;

use App\Models\College;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CollegesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function __construct(public Collection $records , public int $type){}
    public function collection()
    {
        return College::all();
    }
    public function map($college): array
    {
        return [
            $college->name,
            $college->email,
            $college->phone,
            $college->address,
            $college->website,
            $college->college_code,
            $college->principle->user->name,
            // $college->hod->user->count(),
            // $college->faculties->user->count(),
            // $college->students->user->count(),
        ];
    }
    public function headings(): array
    {
        return [
            'College Name',
            'College Email',
            'College Phone',
            'College Address',
            'College Website',
            'College Code',
            'Principle',
            // 'Total HODs',
        ];
    }
}
