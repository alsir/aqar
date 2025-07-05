<?php

namespace App\Filament\Resources\AqarResource\Pages;

use App\Filament\Resources\AqarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAqars extends ListRecords
{
    protected static string $resource = AqarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
