<?php

namespace App\Exports;

use App\Models\RegisteredEvent;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Registeration implements FromCollection, WithMapping, WithHeadings
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
            default => RegisteredEvent::all(),
        };
    }
    public function map($registeration): array
    {
        return [
            $registeration->user->name,
            $registeration->user->email,
            $registeration->user->phone,
            $registeration->user->address,
            $registeration->program->name,
            $registeration->program->type,
            $registeration->program->fees,
            $registeration->program->duration,
            $registeration->program->organiser,
            // if($registeration->is_paid){
            //     $value = "yes";
            //     $registeration->$value;
            // },
            // $registeration->$paid
        ];
    }

    public function headings(): array
    {
        return [
            'User Name',
            'User Email',
            'User Phone',
            'User Address',
            'Program Name',
            'Program Type',
            'Program Fees',
            'Program Duration',
            'Program Organiser',
        ];
    }
}
