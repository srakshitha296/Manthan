<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HoDResource\Pages;
use App\Filament\Resources\HoDResource\RelationManagers;
use App\Models\HoD;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HoDResource extends Resource
{
    protected static ?string $model = HoD::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('college_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('department_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('designation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('qualification')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('experience')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('specialization')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('joining_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('leaving_date')
                    ->maxLength(255)
                    ->default(null),
            ]);
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
            'index' => Pages\ListHoDS::route('/'),
            'create' => Pages\CreateHoD::route('/create'),
            'edit' => Pages\EditHoD::route('/{record}/edit'),
        ];
    }
}
