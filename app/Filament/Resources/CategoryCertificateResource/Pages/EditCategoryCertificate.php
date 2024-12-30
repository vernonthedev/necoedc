<?php

namespace App\Filament\Resources\CategoryCertificateResource\Pages;

use App\Filament\Resources\CategoryCertificateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryCertificate extends EditRecord
{
    protected static string $resource = CategoryCertificateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
