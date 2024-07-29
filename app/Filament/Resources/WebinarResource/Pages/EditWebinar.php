<?php

namespace App\Filament\Resources\WebinarResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\WebinarResource;
use App\Models\Webinar;

class EditWebinar extends EditRecord
{
    protected static string $resource = WebinarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Webinar $record) {
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
