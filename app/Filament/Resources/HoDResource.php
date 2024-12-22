<?php

namespace App\Filament\Resources;

use App\Exports\HODsExport;
use App\Filament\Resources\HoDResource\Pages;
use App\Filament\Resources\HoDResource\RelationManagers;
use App\Models\HoD;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Maatwebsite\Excel\Facades\Excel;

class HoDResource extends Resource
{
    protected static ?string $model = HoD::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'HoD';
    protected static ?string $slug = 'college-hods';
    protected static ?string $modelLabel = 'H.O.D';
    protected static ?string $navigationGroup = 'Employees and Students';
    protected static ?int $navigationSort = 2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make()->schema([
                        Select::make('user_id')->relationship('user', 'name', fn($query) => $query->where('role', 'HoD'))
                            ->searchable()->preload()->required()->label("Hod Name"),
                        Select::make('email')->relationship('user', 'email', fn($query) => $query->where('role', 'HoD'))
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
                            'Artificial Intelligence' => 'Artificial Intelligence',
                            'Data Science' => 'Data Science',
                            'Cyber Security' => 'Cyber Security',
                            'Robotics' => 'Robotics',
                            'Quantum Computing' => 'Quantum Computing',
                            'Blockchain Technology' => 'Blockchain Technology',
                            'Internet of Things' => 'Internet of Things',
                            'Cloud Computing' => 'Cloud Computing',
                            'Augmented Reality' => 'Augmented Reality',
                            'Virtual Reality' => 'Virtual Reality',
                            'Machine Learning' => 'Machine Learning',
                            'Big Data' => 'Big Data',
                            'Bioinformatics' => 'Bioinformatics',
                            'Computer Vision' => 'Computer Vision',
                            'Natural Language Processing' => 'Natural Language Processing',
                            'Human-Computer Interaction' => 'Human-Computer Interaction',
                            'Software Engineering' => 'Software Engineering',
                            'Network Security' => 'Network Security',
                            'Embedded Systems' => 'Embedded Systems',
                            'Mobile Computing' => 'Mobile Computing',
                        ])->required()->multiple(),
                        TextInput::make('experience')->required()->maxLength(255),
                        DatePicker::make('joining_date')->required(),
                        DatePicker::make('leaving_date')->default(null),
                    ])->columns(2),
                ])->columnSpanFull(),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable(),
                TextColumn::make('college.name')->sortable(),
                TextColumn::make('department.name')->sortable(),
                TextColumn::make('qualification')->searchable(),
                TextColumn::make('experience')->searchable(),
                TextColumn::make('specialization')->searchable(),
                TextColumn::make('joining_date')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('leaving_date')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    BulkAction::make('export')->label('Export')
                    ->icon('heroicon-o-document-arrow-down')
                    ->action(function (Collection $records){
                        return Excel::download(new HODsExport($records, 1), 'HoDs.xlsx');  
                    })
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
            'index' => Pages\ListHoDS::route('/'),
            'create' => Pages\CreateHoD::route('/create'),
            'edit' => Pages\EditHoD::route('/{record}/edit'),
        ];
    }
}
