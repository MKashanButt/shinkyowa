<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'stock_id',
        'destination',
        'full_name',
        'email_address',
        'phone_no',
        'country',
        'comment',
        'ip',
    ];
}
