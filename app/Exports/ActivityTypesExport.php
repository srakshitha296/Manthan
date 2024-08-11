<?php

namespace App\Exports;

use App\Models\ActivityType;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ActivityTypesExport implements FromCollection, WithMapping, WithHeadings
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
            default => ActivityType::all(),
        };
    }
    public function map($activityType): array
    {
        return [
            $activityType->title,
            $activityType->description,
            $activityType->credits,
            $activityType->activities->count(),
        ];
    }
    public function headings(): array
    {
        return [
            'Activity Type',
            'Description',
            'Credits',
            'Count of Activities',
        ];
    }
}
