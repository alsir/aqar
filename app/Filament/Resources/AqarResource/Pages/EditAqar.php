<?php

namespace App\Filament\Resources\AqarResource\Pages;

use App\Filament\Resources\AqarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAqar extends EditRecord
{
    protected static string $resource = AqarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
