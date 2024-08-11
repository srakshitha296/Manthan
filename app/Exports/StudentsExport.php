<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct(public Collection $records, public int $type){ }

    public function collection()
    {
        return match ($this->type) {
            1 => $this->records,
            default => Student::all(),
        };
        // return Student::all();
        // return $this->records;
    }

    public function map($student): array
    {
        return [
            $student->user->name,
            $student->user->email,
            $student->user->phone,
            $student->user->address,
            $student->college->name,
            $student->department->name,
            $student->semester,
            $student->usn,
            $student->activities->count(),
        ];
    }

    public function headings(): array
    {
        return [
            'Student Name',
            'Student Email',
            'Student Phone',
            'Student Address',
            'College',
            'Department',
            'Semester',
            'USN',
            'Total Activities Done',
        ];
    }
}