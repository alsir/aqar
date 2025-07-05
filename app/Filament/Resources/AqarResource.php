<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AqarResource\Pages;
use App\Filament\Resources\AqarResource\RelationManagers;
use App\Models\Aqar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AqarResource extends Resource
{
    protected static ?string $model = Aqar::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

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
            'index' => Pages\ListAqars::route('/'),
            'create' => Pages\CreateAqar::route('/create'),
            'edit' => Pages\EditAqar::route('/{record}/edit'),
        ];
    }
}
