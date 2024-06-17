<?php

namespace App\Filament\Resources\DataBannerResource\Pages;

use App\Models\dataBanner;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\DataBannerResource;

class EditDataBanner extends EditRecord
{
    protected static string $resource = DataBannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (dataBanner $record) {
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
