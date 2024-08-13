<?php

namespace App\Exports;

use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DepartmentsExport implements FromCollection, WithMapping, WithHeadings
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
            default => Department::all(),
        };
    }

    public function map($department): array
    {
        return [
            $department->name,
            $department->dept_code,
        ];
    }

    public function headings(): array
    {
        return [
            'Department Name',
            'Department Code',
        ];
    }
}
