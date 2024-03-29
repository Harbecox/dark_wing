<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'context',
        'intro',
        'meta_title',
        'meta_description',
        'seo_url',
        'image',
        'enabled',
    ];
}
