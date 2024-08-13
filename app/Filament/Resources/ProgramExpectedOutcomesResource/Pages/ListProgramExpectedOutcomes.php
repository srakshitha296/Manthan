<?php

namespace App\Filament\Resources\ProgramExpectedOutcomesResource\Pages;

use App\Exports\ProgramExpectedOutcomesExport;
use App\Filament\Resources\ProgramExpectedOutcomesResource;
use App\Models\ProgramExpectedOutcomes;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListProgramExpectedOutcomes extends ListRecords
{
    protected static string $resource = ProgramExpectedOutcomesResource::class;

    protected function getHeaderActions(): array
    {
        if(ProgramExpectedOutcomes::count()){
            return[
                Actions\CreateAction::make(),
                Actions\Action::make('exportPOE')->label('Export PEOs')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new ProgramExpectedOutcomesExport($records, 0), 'PEOs.xlsx');
                    })
            ];
        }else{
            return[
                Actions\CreateAction::make(),
            ];
        }
    }
}
