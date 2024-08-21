<?php

namespace App\Filament\Resources\ProgramResource\Pages;

use App\Exports\ProgramsExport;
use App\Filament\Resources\ProgramResource;
use App\Models\Program;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListPrograms extends ListRecords
{
    protected static string $resource = ProgramResource::class;

    protected function getHeaderActions(): array
    {
        if(Program::count()){
            return[
                CreateAction::make(),
                Action::make('exportProgram')->label('Export Program')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new ProgramsExport($records, 0), 'Programs.xlsx');
                    })
            ];
        }else{
            return[
                CreateAction::make(),
            ];
        }
    }
}
