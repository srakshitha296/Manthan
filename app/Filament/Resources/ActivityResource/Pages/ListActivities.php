<?php

namespace App\Filament\Resources\ActivityResource\Pages;

use App\Exports\ActivitiesExport;
use App\Filament\Resources\ActivityResource;
use App\Models\Activity;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListActivities extends ListRecords
{
    protected static string $resource = ActivityResource::class;

    protected function getHeaderActions(): array
    {
        if(Activity::count()){
            return[
                Actions\CreateAction::make(),
                Actions\Action::make('exportActivity')->label('Export Student Activities')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new ActivitiesExport($records, 0), 'student-activities.xlsx');
                    })
            ];
        }else{
            return[
                Actions\CreateAction::make(),
            ];
        }
    }
}
