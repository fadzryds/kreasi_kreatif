<?php

namespace App\Filament\Resources\LiveResource\Pages;

use App\Models\Live;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\LiveResource;
use Filament\Resources\Pages\EditRecord;

class EditLive extends EditRecord
{
    protected static string $resource = LiveResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Live $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
