<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data['airports'] = Airport::query()->limit(10)->get();
        $data['posts'] = Post::query()->limit(10)->get();
        return view('front.pages.index',$data);
    }
}
