<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\EngineManager;
use Laravel\Scout\Engines\Engine;
use Laravel\Scout\Searchable;

class Vehicle extends Model
{
    use Searchable;

    protected $table = 'stocks';
    use HasFactory;

    protected $fillable = [
        'stock_id',
        'make',
        'model',
        'year',
        'fob',
        'currency',
        'mileage',
        'engine',
        'doors',
        'transmission',
        'type',
        'fuel',
        'category',
        'features',
        'buy_link',
    ];
    public function searchableUsing(): Engine
    {
        return app(EngineManager::class)->engine('meilisearch');
    }
}
