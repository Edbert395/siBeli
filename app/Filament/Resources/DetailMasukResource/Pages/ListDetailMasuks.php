<?php

namespace App\Filament\Resources\DetailMasukResource\Pages;

use App\Filament\Resources\DetailMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailMasuks extends ListRecords
{
    protected static string $resource = DetailMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
