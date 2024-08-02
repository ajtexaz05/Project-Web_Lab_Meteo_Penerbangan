<?php

namespace App\Filament\Resources\TanyaJawabResource\Pages;

use App\Filament\Resources\TanyaJawabResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTanyaJawab extends EditRecord
{
    protected static string $resource = TanyaJawabResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
