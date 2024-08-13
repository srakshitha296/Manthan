<?php

namespace App\Filament\Resources\PrincipleResource\Pages;

use App\Exports\PrinciplesExport;
use App\Filament\Resources\PrincipleResource;
use App\Models\Principle;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListPrinciples extends ListRecords
{
    protected static string $resource = PrincipleResource::class;

    protected function getHeaderActions(): array
    {
        if (Principle::count()) {
            return [
                Actions\CreateAction::make(),
                Actions\Action::make('exportPrinciple')->label('Export Principals')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new PrinciplesExport($records, 0), 'principals.xlsx');
                    })
            ];
        }else{
            return [
                Actions\CreateAction::make(),
            ];
        }
    }
}
