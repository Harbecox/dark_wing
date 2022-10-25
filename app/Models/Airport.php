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
 * @property false|mixed|string bg_image
 * @property mixed iata
 * @property mixed oaci
 * @property mixed meta_title
 * @property mixed meta_description
 */
class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_title',
        'meta_description',
        'country_id',
        'description',
        'flag',
        'IATA',
        'OACI',
        'image',
        'bg_image',
    ];

    function country(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Country::class,"id","country_id");
    }

    function setImageAttribute($value){
        $this->resizeImage($value,308,361);
        $this->attributes['image'] = $value;
    }

    function setBgImageAttribute($value){
        $this->resizeImage($value,1920,1080);
        $this->attributes['bg_image'] = $value;
    }

    function resizeImage($value,$ow,$oh){
        $k = round($ow / $oh,2);
        $img = Image::make(Storage::get($value));
        $w = $img->width();
        $h = $img->height();
        if($w / $h > $k){
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
        Storage::put($value, $img->encode());
    }
}
