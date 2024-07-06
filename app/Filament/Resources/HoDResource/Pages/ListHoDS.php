<?php

namespace App\Filament\Resources\HoDResource\Pages;

use App\Filament\Resources\HoDResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHoDS extends ListRecords
{
    protected static string $resource = HoDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
