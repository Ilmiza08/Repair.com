<?php

namespace App\Filament\Resources\PenghasilanResource\Pages;

use App\Filament\Resources\PenghasilanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenghasilan extends EditRecord
{
    protected static string $resource = PenghasilanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
