<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static select(string $string)
 * @property mixed title
 * @property mixed country
 * @property mixed description
 * @property false|mixed|string flag
 * @property false|mixed|string image
 * @property mixed country_id
 */
class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country_id',
        'description',
        'flag',
        'image',
    ];

    function country(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Country::class,"id","country_id");
    }
}
