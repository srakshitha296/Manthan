<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Imports\UsersImport;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use Maatwebsite\Excel\Facades\Excel;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('importUsers')->label('Import Users')->icon('heroicon-o-user-group')
            ->form([
                FileUpload::make('attachment')->directory('xlsx')->preserveFilenames(),
            ])->color('danger')
            ->action(function(array $data){
                $file = public_path('storage/'.$data['attachment']);

                Excel::import(new UsersImport, $file);

                Notification::make()->title('Users Imported')->success()->send();
            }),
        ];
    }

    // public function getTabs() : array {
    //     return [
    //         "All" => Tab::make(),
    //         "Students" => Tab::make(),
    //     ];
    // }
}
