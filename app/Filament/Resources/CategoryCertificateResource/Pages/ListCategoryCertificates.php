<?php

namespace App\Filament\Resources\CategoryCertificateResource\Pages;

use App\Filament\Resources\CategoryCertificateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryCertificates extends ListRecords
{
    protected static string $resource = CategoryCertificateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
