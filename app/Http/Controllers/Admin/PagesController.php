<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageTexts;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $data['pages'] = PageTexts::all()->groupBy("page");
        return view("admin.pages.index",$data);
    }

    function save(Request $request){
        foreach ($request->get("page") as $page => $values){
            foreach ($values as $name => $value){
                PageTexts::query()->where("page",$page)->where("name",$name)
                    ->update(['text' => $value]);
            }
        }
        return back()->with('success','Texts has been updated successfully.');
    }
}
