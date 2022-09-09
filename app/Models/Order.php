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
        'deliveryAirport',
        'deliveryDay',
        'deliveryTime',
        'company',
        'handling',
        'packaging',
        'allergies'
    ];

    function airport(){
        return $this->hasOne(Airport::class,"id","deliveryAirport");
    }
}
