<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportInfo extends Model
{
    use HasFactory;

    public $incrementing = null;

    public $timestamps = false;

    const CONTINENTS = [
        "Europe",
        "Africa",
        "Asia",
        "North America",
        "South America",
        "Oceania",
    ];

    protected $fillable = [
        "airport_id",
        "icao",
        "iata",
        "city",
        "country_id",
        "continent",
        "latitude",
        "longitude",
    ];

    function country(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Country::class,"id","country_id");
    }
}
