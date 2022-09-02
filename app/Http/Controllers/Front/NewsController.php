<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('front.pages.news');
    }

    public function show($id){
        $data['posts'] = Post::query()->limit(9)->get();
        $data['post'] = Post::findOrFail($id);
        return view('front.pages.post', $data);
    }
}
