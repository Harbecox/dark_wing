<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'firstName',
        'email',
        'phone',
        'delivery_airport',
        'company',
        'handling',
        'packaging',
        'allergies'
    ];
}
