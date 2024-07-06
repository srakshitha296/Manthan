<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacultyResource\Pages;
use App\Filament\Resources\FacultyResource\RelationManagers;
use App\Models\Faculty;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Goto_;

class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Faculty Name')->schema([
                        Select::make('user_id')->relationship('user', 'name', fn($query) => $query->where('role', 'faculty'))
                            ->searchable()->required(),
                    ])
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('College Details')->schema([
                        Select::make('college_id')->relationship('college', 'name')->required(),
                    ]),
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('Department Details')->schema([
                        Select::make('department_id')->relationship('department', 'name')->required(),
                    ]),
                ])->columnSpan(1),
                Group::make()->schema([
                    Section::make('Permissions and status')->schema([
                        Toggle::make('status')->required()->default(true),
                        Toggle::make('is_cordinator')->required()->default(false),
                    ])->columns(2),
                ])->columnSpan(1),
                Group::make()->schema([   
                    Section::make('Faculty Details')->schema([
                        Select::make('designation')->required()->options([
                            'Proffesor' => 'Proffesor',
                            'Associate Proffesor' => 'Associate Proffesor',
                            'Assistant Proffesor' => 'Assistant Proffesor',
                            'Guest Proffesor' => 'Guest Proffesor',
                        ])->default('Assistant Proffesor'),
                        TextInput::make('qualification')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('experience')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('specialization')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('joining_date')
                            ->required(),
                        DatePicker::make('leaving_date')
                            ->default(null),
                    ])->columns(2),
                ])->columnSpanFull(),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('college_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('department_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('qualification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specialization')
                    ->searchable(),
                Tables\Columns\TextColumn::make('joining_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('leaving_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_cordinator')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFaculties::route('/'),
            'create' => Pages\CreateFaculty::route('/create'),
            'edit' => Pages\EditFaculty::route('/{record}/edit'),
        ];
    }
}
