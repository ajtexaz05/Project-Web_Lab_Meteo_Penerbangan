<?php

namespace App\Filament\Resources\PetaResource\Pages;

use App\Filament\Resources\PetaResource;
use App\Models\Peta;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditPeta extends EditRecord
{
    protected static string $resource = PetaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Peta $record) {
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
