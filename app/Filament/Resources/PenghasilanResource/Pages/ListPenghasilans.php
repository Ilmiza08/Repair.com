<?php

namespace App\Filament\Resources\PenghasilanResource\Pages;

use App\Filament\Resources\PenghasilanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenghasilans extends ListRecords
{
    protected static string $resource = PenghasilanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
