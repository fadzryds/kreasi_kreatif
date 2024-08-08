<?php

namespace App\Filament\Resources\LiveResource\Pages;

use App\Filament\Resources\LiveResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLives extends ListRecords
{
    protected static string $resource = LiveResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
