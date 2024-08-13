<?php

namespace App\Exports;

use App\Models\ProgramExpectedOutcomes;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProgramExpectedOutcomesExport implements FromCollection, WithMapping, WithHeadings
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
            default => ProgramExpectedOutcomes::all(),
        };
    }
    public function map($peo): array
    {
        return [
            $peo->user->name,
            $peo->user->email,
            $peo->user->phone,
            $peo->user->address,
            $peo->college->name,
            $peo->department->name,
            $peo->qualification,
            $peo->experience,
            $peo->specialization,
            $peo->joining_date,
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
