<?php

namespace App\Filament\Resources\PencapaianResource\Pages;

use App\Filament\Resources\PencapaianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPencapaian extends EditRecord
{
    protected static string $resource = PencapaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
