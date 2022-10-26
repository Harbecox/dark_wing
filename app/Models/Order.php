<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'status',
        'firstName',
        'email',
        'phone',
        'deliveryAirport',
        'deliveryDay',
        'deliveryTime',
        'company',
        'handling',
        'packaging',
        'allergies',
        'order_pdf',
        'order',
    ];

    function airport(){
        return $this->hasOne(Airport::class,"id","deliveryAirport");
    }

    function statuses(){
        return $this->hasMany(OrderStatus::class,"order_id",'id');
    }

    function lastStatus(){
        return $this->statuses->sortByDesc("created_at")->first()->status;
    }
}
