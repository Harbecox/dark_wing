<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\Photo;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function index(){
        $data['airports'] = Airport::query()->limit(10)->get();
        $data['posts'] = Post::query()->limit(10)->get();
        $data['menu_images'] = Photo::query()->orderBy("position")->get();
        return view('front.pages.index',$data);
    }

    public function download()
    {
        $file = public_path(). "/storage/uploads/menu.pdf";
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        return response()->download($file, 'menu.pdf', $headers);
    }

    public function partnership(){
        return view('front.pages.partnership');
    }

    public function contact(){
        return view('front.pages.contact');
    }
}
