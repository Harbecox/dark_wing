<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\PageTexts;
use App\Models\Photo;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
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
        $data['airports'] = Airport::query()->limit(10)->get();
        $data['texts'] = $this->texts;
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
        $data['texts'] = $this->texts;
        return view('front.pages.partnership',$data);
    }

    public function contact(){
        $data['texts'] = $this->texts;
        return view('front.pages.contact',$data);
    }
    public function get_menu()
    {
        $data['menu_images'] = Photo::query()->orderBy("position")->get();
        return view('front.pages.menu',$data)->render();
    }

    public function get_posts()
    {
        $data['posts'] = Post::query()->limit(10)->get();
        return view('front.pages.newsCont',$data)->render();
    }
}
