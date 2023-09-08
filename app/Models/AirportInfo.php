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
        "Africa",
        "Eurasia",
        "North America",
        "South America",
        "Antarctica",
        "Australia",
    ];

    protected $fillable = [
        "airport_id",
        "oaci",
        "iata",
        "city",
        "country_id",
        "continent",
        "latitude",
        "longitude",
    ];
}
