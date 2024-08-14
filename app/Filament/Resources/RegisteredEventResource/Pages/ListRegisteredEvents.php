<?php

namespace App\Filament\Resources\RegisteredEventResource\Pages;

use App\Filament\Resources\RegisteredEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegisteredEvents extends ListRecords
{
    protected static string $resource = RegisteredEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
