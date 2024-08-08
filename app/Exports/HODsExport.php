<?php

namespace App\Exports;

use App\Models\HoD;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HODsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable; 
    public function __construct(public Collection $records , public int $type){}
    public function collection()
    {
        return match ($this->type) {
            1 => $this->records,
            default => HoD::all(),
        };
    }

    public function map($hod): array
    {
        return [
            $hod->user->name,
            $hod->user->email,
            $hod->user->phone,
            $hod->user->address,
            $hod->college->name,
            $hod->department->name,
            $hod->qualification,
            $hod->experience,
            $hod->specialization,
            $hod->joining_date,
            // $hod->activities->count(),
        ];
    }

    public function headings(): array
    {
        return [
            'Hod Name',
            'Hod Email',
            'Hod Phone',
            'Hod Address',
            'College',
            'Department',
            'Qualification',
            'Experience',
            'Specialization',
            'Joining Date',
        ];
    }
}
