<?php

namespace App\Filament\Resources\PrincipleResource\Pages;

use App\Filament\Resources\PrincipleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrinciple extends EditRecord
{
    protected static string $resource = PrincipleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
