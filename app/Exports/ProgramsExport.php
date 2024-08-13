<?php

namespace App\Exports;

use App\Models\Program;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProgramsExport implements FromCollection, WithMapping, WithHeadings
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
            default => Program::all(),
        };
    }
    public function map($program): array
    {
        return [
            $program->name,
            $program->description,
            $program->type,
            $program->start_date,
            $program->end_date,
            $program->duration,
            $program->fees,
            $program->location,
            $program->organiser,
        ];
    }

    public function headings(): array
    {
        return [
            'Program Name',
            'Program Description',
            'Program Type',
            'Start Date',
            'End Date',
            'Duration',
            'Registeration Fees',
            'Location',
            'Program Organiser',
        ];
    }
}
