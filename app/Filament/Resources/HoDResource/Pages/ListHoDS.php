<?php

namespace App\Filament\Resources\HoDResource\Pages;

use App\Exports\HODsExport;
use App\Filament\Resources\HoDResource;
use App\Models\HoD;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListHoDS extends ListRecords
{
    protected static string $resource = HoDResource::class;

    protected function getHeaderActions(): array
    {
        if (HoD::count()) {
            return [
                CreateAction::make(),
                Action::make('exportHod')->label('Export HoDs')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new HODsExport($records, 0), 'HODs.xlsx');
                    })
            ];
        }else{
            return [
                CreateAction::make(),
            ];
        }
    }
}
