<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Exports\DepartmentsExport;
use App\Filament\Resources\DepartmentResource;
use App\Models\Department;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListDepartments extends ListRecords
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        if (Department::count()) {
            return [
                CreateAction::make(),
                Action::make('exportHod')->label('Export Departments')->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records) {
                        return Excel::download(new DepartmentsExport($records, 0), 'Departments.xlsx');
                    })
            ];
        }else{
            return [
                CreateAction::make(),
            ];
        }
    }
}
