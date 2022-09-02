<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

/**
 * @method static select(string $string)
 * @property mixed title
 * @property mixed country
 * @property mixed description
 * @property false|mixed|string flag
 * @property false|mixed|string image
 * @property mixed country_id
 * @property mixed id
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

    function setImageAttribute($value){
        $ow = 308;
        $oh = 361;
        $img = Image::make(Storage::get($value));
        $w = $img->width();
        $h = $img->height();
        if($w / $h > 0.85){
            $nh = $oh;
            $nw = $w * $nh / $h;
            $img->resize($nw,$nh);
        }else{
            $nw = $ow;
            $nh = $h * $nw / $w;
            $img->resize($nw,$nh);
        }
        $x = intval(($img->width() - $ow) / 2);
        $y = intval(($img->height() - $oh) / 2);
        $img->crop($ow,$oh,$x,$y);
        $img->save("public".Storage::url($value));
        $this->attributes['image'] = $value;
    }
}
