<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock_id',
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
