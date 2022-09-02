<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\Photo;
use Illuminate\Http\Request;

class AirportsController extends Controller
{
    public function index(){
        return view('front.pages.airports');
    }

    public function show($id){
        $data['airports'] = Airport::query()->limit(12)->get();
        $data['airport'] = Airport::findOrFail($id);
        $data['menu_images'] = Photo::query()->orderBy("position")->get();
        return view('front.pages.port', $data);
    }
}
