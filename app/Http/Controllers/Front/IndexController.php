<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;

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
        return response()->download($file, 'filename.pdf', $headers);
    }
}
