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
}
