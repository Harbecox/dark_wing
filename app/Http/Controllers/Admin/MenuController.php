<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPhotosStoreRequest;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\FlareClient\Http\Response;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->get("order","id");
        $sort = $request->get("sort","asc");

        $photos = Photo::orderBY($order,$sort)->paginate(10);
        return view('admin.menu.index', compact('photos'));
    }

    public function create()
    {
        $data['photos'] = Photo::all();
        return view('admin.menu.create',$data);
    }

    public function store(AdminPhotosStoreRequest $request)
    {
        $menu = new Photo();
        $menu->position = $request->position;
        $menu->image = $request->file('image')->store('public/uploads');
        $menu->save();

        return redirect()->route('menu.index')
            ->with('success','Image has been created successfully.');
    }

    public function edit(Photo $menu)
    {
        $photos = Photo::all();
        return view('admin.menu.edit', compact('menu','photos'));
    }

    public function update(Request $request, Photo $menu)
    {
        $request->validate([
            'position' => 'required',
        ]);

        $menu = Photo::find($menu->id);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000',
            ]);
            $menu->image = $request->file('image')->store('public/uploads');
        }

        $menu->position = $request->position;
        $menu->save();
        return redirect()->route('menu.index',$menu)
            ->with('success','Image updated successfully');
    }

    public function destroy(Photo $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')
            ->with('success','Image has been deleted successfully');
    }

    public function upload(Request $request) {

        $request->validate([
            'pdf' => 'required|mimes:pdf',
        ]);

        $filePath = 'uploads/' . "menu.pdf";

        Storage::disk('public')->put($filePath, file_get_contents($request->pdf));
        return back()
            ->with('success','File has been successfully uploaded.');
    }


}
