<?php

namespace App\Filament\Resources\TanyaJawabResource\Pages;

use App\Filament\Resources\TanyaJawabResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTanyaJawabs extends ListRecords
{
    protected static string $resource = TanyaJawabResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
