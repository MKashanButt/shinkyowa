<?php

namespace App\Filament\Resources\VehicleImageResource\Pages;

use App\Filament\Resources\VehicleImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVehicleImages extends ListRecords
{
    protected static string $resource = VehicleImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
