<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'make',
        'model',
        'year',
        'fob',
        'currency',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'timestamp' => 'timestamp',
    ];

    public function vehicleInfo(): HasOne
    {
        return $this->hasOne(VehicleInfo::class);
    }

    public function vehicleImages(): HasMany
    {
        return $this->hasMany(VehicleImage::class);
    }
}
