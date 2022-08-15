<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string $value)
 * @method static truncate()
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','code'
    ];
}
