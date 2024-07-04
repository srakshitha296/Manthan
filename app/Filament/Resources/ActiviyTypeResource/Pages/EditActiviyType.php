<?php

namespace App\Filament\Resources\ActiviyTypeResource\Pages;

use App\Filament\Resources\ActiviyTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActiviyType extends EditRecord
{
    protected static string $resource = ActiviyTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
