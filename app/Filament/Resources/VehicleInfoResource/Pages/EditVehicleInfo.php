<?php

namespace App\Filament\Resources\VehicleInfoResource\Pages;

use App\Filament\Resources\VehicleInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVehicleInfo extends EditRecord
{
    protected static string $resource = VehicleInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
