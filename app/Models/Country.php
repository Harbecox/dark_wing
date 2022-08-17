<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string $value)
 * @method static truncate()
 * @method static get(string $string, string $string1, string $string2)
 */
class Country extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name','code'
    ];
}
