<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAirportStoreRequest;
use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index()
    {
        $data['airports'] = Airport::all();
        return view('admin.airports.index',$data);
    }

    public function create()
    {
        return view('admin.airports.create');
    }

    public function store(AdminAirportStoreRequest $request)
    {
        $airport = new Airport();
        $airport->title = $request->title;
        $airport->country = $request->country;
        $airport->description = $request->description;
        $airport->flag = $request->file('flag')->store('public/airports');
        $airport->image = $request->file('image')->store('public/airports');
        $airport->save();

        return redirect()->route('admin.airport.create')
            ->with('success','Airport has been created successfully.');
    }


    public function edit(Airport $airport)
    {
        return view('admin.airports.edit',compact('airport'));
    }

    public function update(Request $request, Airport $airport)
    {
        $request->validate([
            'title' => 'required',
            'country' => 'required',
            'description' => 'required',
        ]);

        $airport = Airport::find($airport->id);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $airport->image = $request->file('image')->store('public/airports');
        }
        if($request->hasFile('flag')){
            $request->validate([
                'flag' => 'required|image|mimes:png,PNG|max:64',
            ]);
            $airport->flag = $request->file('flag')->store('public/airports');
        }

        $airport->title = $request->title;
        $airport->country = $request->country;
        $airport->description = $request->description;
        $airport->save();
        return redirect()->route('admin.airport.edit',$airport)
            ->with('success','Airport updated successfully');
    }

    public function destroy(Airport $airport)
    {
        $airport->delete();
        return redirect()->route('admin.airport.index')
            ->with('success','Airport has been deleted successfully');
    }
}

