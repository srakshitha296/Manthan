<?php

namespace App\Filament\Resources\RegisteredEventResource\Pages;

use App\Exports\Registeration;
use App\Filament\Resources\RegisteredEventResource;
use App\Models\RegisteredEvent;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListRegisteredEvents extends ListRecords
{
    protected static string $resource = RegisteredEventResource::class;

    protected function getHeaderActions(): array
    {
        if(RegisteredEvent::count()){
            return[
                Actions\CreateAction::make(),
                Actions\Action::make('export')->label('Export Registerations')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new Registeration($records, 0), 'Registerations.xlsx');
                    })
            ];
        }else{
            return[
                Actions\CreateAction::make(),
            ];
        }
    }
}
