<?php

namespace App\Filament\Resources\POEResource\Pages;

use App\Filament\Resources\POEResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPOES extends ListRecords
{
    protected static string $resource = POEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
