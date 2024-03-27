<?php

namespace App\Filament\Resources\VehicleInfoResource\Pages;

use App\Filament\Resources\VehicleInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVehicleInfos extends ListRecords
{
    protected static string $resource = VehicleInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
