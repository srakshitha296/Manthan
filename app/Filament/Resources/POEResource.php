<?php

namespace App\Filament\Resources;

use App\Filament\Resources\POEResource\Pages;
use App\Filament\Resources\POEResource\RelationManagers;
use App\Models\POE;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class POEResource extends Resource
{
    protected static ?string $model = POE::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Program Expected Outcomes')->schema([
                        TextInput::make('label')->label('PEO Code')->required()->maxLength(5)->minLength(4)
                        ->placeholder("PEO 1")->unique(),
                        TextInput::make('name')->label('Program Name')->required()->maxLength(255),
                        Textarea::make('description')->required()->maxLength(255)->columnSpanFull(),
                    ])->columns(2),
                ])->columnSpan(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label')->searchable(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('description')->searchable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPOES::route('/'),
            'create' => Pages\CreatePOE::route('/create'),
            'edit' => Pages\EditPOE::route('/{record}/edit'),
        ];
    }
}
