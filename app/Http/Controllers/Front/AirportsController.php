<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\PageTexts;
use App\Models\Photo;
use Illuminate\Http\Request;

class AirportsController extends Controller
{
    private $texts = null;

    function __construct()
    {
        $texts = PageTexts::all()->groupBy("page");
        foreach ($texts as $page => $value){
            $this->texts[$page] = [];
            foreach ($value as $v){
                $this->texts[$page][$v['name']] = $v['text'];
            }
        }
    }

    public function index(){
        $data['texts'] = $this->texts;
        return view('front.pages.airports',$data);
    }

    public function show($id){
        $data['texts'] = $this->texts;
        $data['airports'] = Airport::query()->limit(12)->get();
        $data['airport'] = Airport::findOrFail($id);
        $data['menu_images'] = Photo::query()->orderBy("position")->get();
        return view('front.pages.port', $data);
    }
}
