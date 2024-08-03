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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrincipleRelationManager extends RelationManager
{
    protected static string $relationship = 'principle';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Principle Name')->schema([
                        Select::make('user_id')->relationship('user', 'name', fn($query) => $query->where('role', 'Principle'))
                            ->searchable()->preload()->required(),
                    ])
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('College Details')->schema([
                        Select::make('college_id')->relationship('college', 'name')->preload()->searchable()->required(),
                    ]),
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('College Details')->schema([
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
                    ])->columns(2),
                ])->columnSpan(2),
            ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('user_id')
            ->columns([
                TextColumn::make('user.name')->numeric(),
                TextColumn::make('college.name')->numeric(),
                TextColumn::make('qualification')->searchable(),
                TextColumn::make('experience')->searchable()->suffix(' years'),
                TextColumn::make('specialization')->searchable(),
                TextColumn::make('joining_date')->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
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
