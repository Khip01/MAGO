<?php

namespace App\Filament\Resources\PenggunaDospemResource\Pages;

use App\Filament\Resources\PenggunaDospemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenggunaDospems extends ListRecords
{
    protected static string $resource = PenggunaDospemResource::class;

    public static function canCreate(): bool
    {
        return true;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
