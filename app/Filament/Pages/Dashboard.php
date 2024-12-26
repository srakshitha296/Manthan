<?php
namespace App\Filament\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use App\Models\College;
 
class Dashboard extends BaseDashboard
{
    use HasFiltersForm;
 
    public function filtersForm(Form $form): Form
    {
       return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('college')
                            ->label('Select College')
                            ->options(College::pluck('name','id')
                            )
                            ->placeholder('Choose a College')
                            ->required(),
                    ])
                    ->columns(3),
            ]);
    }
}

