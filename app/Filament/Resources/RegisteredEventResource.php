<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegisteredEventResource\Pages;
use App\Filament\Resources\RegisteredEventResource\RelationManagers;
use App\Models\RegisteredEvent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegisteredEventResource extends Resource
{
    protected static ?string $model = RegisteredEvent::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Registerations';
    protected static ?string $slug = 'registered-events';
    protected static ?string $modelLabel = 'Registerations';
    protected static ?string $navigationGroup = 'Affliated Institutions';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListRegisteredEvents::route('/'),
            'create' => Pages\CreateRegisteredEvent::route('/create'),
            'edit' => Pages\EditRegisteredEvent::route('/{record}/edit'),
        ];
    }
}
