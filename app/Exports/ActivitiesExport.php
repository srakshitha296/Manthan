<?php

namespace App\Exports;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ActivitiesExport implements FromCollection, WithMapping, WithHeadings
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
            default => Activity::all(),
        };
    }
    public function map($activity): array
    {
        return [
            // $activity->student->user->name,
            // $activity->student->user->email,
            // $activity->student->user->phone,
            // $activity->student->user->address,
            // $activity->user->college->name,
            // $activity->user->department->name,
            // $activity->user->department->name,
            $activity->title,
            $activity->description,
            $activity->activityType->title,
            $activity->student->user->name,
            $activity->student->department->name,
            $activity->student->college->name,
            $activity->start_date,
            $activity->end_date,
            $activity->hours,
            $activity->status,
        ];
    }

    public function headings(): array
    {
        return [
            'Activity Title',
            'Activity Description',
            'Activity Type',
            'Student Name',
            'Department',
            'College',
            'Activity Start Date',
            'Activity End Date',
            'Total Hours',
            'Status of the Activity',
        ];
    }
}
