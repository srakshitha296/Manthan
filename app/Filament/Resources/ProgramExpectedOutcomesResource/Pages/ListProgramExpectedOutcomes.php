<?php

namespace App\Filament\Resources\ProgramExpectedOutcomesResource\Pages;

use App\Filament\Resources\ProgramExpectedOutcomesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramExpectedOutcomes extends ListRecords
{
    protected static string $resource = ProgramExpectedOutcomesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
