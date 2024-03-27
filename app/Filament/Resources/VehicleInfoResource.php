<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleInfoResource\Pages;
use App\Filament\Resources\VehicleInfoResource\RelationManagers;
use App\Models\VehicleInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleInfoResource extends Resource
{
    protected static ?string $model = VehicleInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('vehicle_id')
                    ->relationship('vehicle', 'id')
                    ->required(),
                Forms\Components\TextInput::make('mileage')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('engine')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('doors')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('transmission')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('fuel')
                    ->required()
                    ->maxLength(10),
                Forms\Components\Textarea::make('extras')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('buy_link')
                    ->required()
                    ->maxLength(200),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vehicle.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mileage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('engine')
                    ->searchable(),
                Tables\Columns\TextColumn::make('doors')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transmission')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fuel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('buy_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVehicleInfos::route('/'),
            'create' => Pages\CreateVehicleInfo::route('/create'),
            'edit' => Pages\EditVehicleInfo::route('/{record}/edit'),
        ];
    }
}
