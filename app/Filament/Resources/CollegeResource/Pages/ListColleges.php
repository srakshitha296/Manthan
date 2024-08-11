<?php

namespace App\Filament\Resources\CollegeResource\Pages;

use App\Exports\CollegesExport;
use App\Filament\Resources\CollegeResource;
use App\Models\College;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListColleges extends ListRecords
{
    protected static string $resource = CollegeResource::class;

    protected function getHeaderActions(): array
    {
        if(College::count()){
            return[
                Actions\CreateAction::make(),
                Actions\Action::make('exportCollege')->label('Export College')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new CollegesExport($records, 0), 'colleges.xlsx');
                    })
            ];
        }else{
            return[
                Actions\CreateAction::make(),
            ];
        }
    }

}
