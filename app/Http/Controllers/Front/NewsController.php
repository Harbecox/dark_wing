<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageTexts;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        return view('front.pages.news',$data);
    }

    public function show($id){
        $data['texts'] = $this->texts;
        $data['posts'] = Post::query()->limit(9)->get();
        $data['post'] = Post::findOrFail($id);
        return view('front.pages.post', $data);
    }
}
