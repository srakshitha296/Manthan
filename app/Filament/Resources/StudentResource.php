<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Filament\Resources\StudentResource\RelationManagers\ActivitiesRelationManager;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Student Name')->schema([
                        Select::make('user_id')->relationship('user', 'name', fn($query) => $query->where('role', 'student'))
                            ->searchable()->required(),
                    ])
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('College Details')->schema([
                        Select::make('college_id')->relationship('college', 'name')->searchable()->required(),
                    ]),
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('Department Details')->schema([
                        Select::make('department_id')->relationship('department', 'name')->searchable()->required(),
                    ]),
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('Student Details')->schema([
                        TextInput::make('usn')->required()
                            ->rules(['regex:/^[0-9]{1}[A-Za-z]{2}[0-9]{2}[A-Za-z]{2}[0-9]{3}$/'])
                            ->validationAttribute('USN')
                            ->helperText('Ex: 4JK21CS016 or 4jk21cs016'),
                        Select::make('semester')->required()->options([
                            '1' => '1 st',
                            '2' => '2 nd',
                            '3' => '3 rd',
                            '4' => '4 th',
                        ]),
                    ])->columns(2),
                ])->columnSpan(1),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id')->numeric()->sortable(),
                TextColumn::make('college_id')->numeric()->sortable(),
                TextColumn::make('department_id')->numeric()->sortable(),
                TextColumn::make('usn')->searchable(),
                TextColumn::make('semester')->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ActivitiesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
