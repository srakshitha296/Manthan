<?php

namespace App\Exports;

use App\Models\Principle;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PrinciplesExport implements FromCollection, WithMapping, WithHeadings
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
            default => Principle::all(),
        };
    }

    public function map($principle): array
    {
        return [
            $principle->user->name,
            $principle->user->email,
            $principle->user->phone,
            $principle->user->address,
            $principle->college->name,
            // $principle->department->name,
            $principle->qualification,
            $principle->experience,
            $principle->specialization,
            $principle->joining_date,
            // $hod->activities->count(),
        ];
    }

    public function headings(): array
    {
        return [
            'Principle Name',
            'Principle Email',
            'Principle Phone',
            'Principle Address',
            'College',
            // 'Department',
            'Qualification',
            'Experience',
            'Specialization',
            'Joining Date',
        ];
    }
}
