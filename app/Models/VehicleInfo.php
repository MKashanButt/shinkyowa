<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'mileage',
        'engine',
        'doors',
        'transmission',
        'type',
        'fuel',
        'extras',
        'buy_link',
        'vehicle_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'vehicle_id' => 'integer',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}
