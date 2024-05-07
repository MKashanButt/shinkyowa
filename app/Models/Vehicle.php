<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
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
        'extras',
        'buy_link',
    ];
}
