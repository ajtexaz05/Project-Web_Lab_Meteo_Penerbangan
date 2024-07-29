<?php

namespace App\Filament\Resources\WebinarResource\Pages;

use App\Filament\Resources\WebinarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebinars extends ListRecords
{
    protected static string $resource = WebinarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
