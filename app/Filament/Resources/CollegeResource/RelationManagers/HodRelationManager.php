<?php

namespace App\Filament\Resources\CollegeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HodRelationManager extends RelationManager
{
    protected static string $relationship = 'hod';
    protected static ?string $slug = 'college-hods';
    protected static ?string $modelLabel = 'H.O.D';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make()->schema([
                        Select::make('user_id')->relationship('user', 'name', fn($query) => $query->where('role', 'hod'))
                            ->searchable()->preload()->required()->label("Hod Name"),
                        Select::make('email')->relationship('user', 'email', fn($query) => $query->where('role', 'hod'))
                            ->searchable()->preload()->required(),
                    ])->columns(2),
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('College Details')->schema([
                        Select::make('college_id')->relationship('college', 'name')->preload()->searchable()->required(),
                    ]),
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('Department Details')->schema([
                        Select::make('department_id')->relationship('department', 'name')->preload()->searchable()->required(),
                    ]),
                ])->columnSpan(1),
                Group::make()->schema([   
                    Section::make('HoD Details')->schema([
                        Select::make('qualification')->options([
                            'B.Tech' => 'B.Tech',
                            'M.Tech' => 'M.Tech',
                            'PhD' => 'PhD',
                            'M.Sc' => 'M.Sc',
                            'B.Sc' => 'B.Sc',
                        ])->required()->multiple(),
                        Select::make('specialization')->options([
                            'B.Tech' => 'B.Tech',
                            'M.Tech' => 'M.Tech',
                            'PhD' => 'PhD',
                            'M.Sc' => 'M.Sc',
                            'B.Sc' => 'B.Sc',
                        ])->required()->multiple(),
                        TextInput::make('experience')->required()->maxLength(255),
                        DatePicker::make('joining_date')->required(),
                        DatePicker::make('leaving_date')->default(null),
                    ])->columns(2),
                ])->columnSpanFull(),
            ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('user_id')
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
