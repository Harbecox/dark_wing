<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAirportStoreRequest;
use App\Models\Airport;
use App\Models\Country;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->get("order","id");
        $sort = $request->get("sort","asc");

        $airports = Airport::query()->with("country")
            ->orderBy($order, $sort)
            ->paginate(10);

        return view('admin.airports.index', compact('airports'));
    }

    public function create()
    {
        $data['countries'] = Country::all();
        return view('admin.airports.create',$data);
    }

    public function store(AdminAirportStoreRequest $request)
    {
        $airport = new Airport();
        $airport->title = $request->title;

        $airport->country_id = $request->country_id;
        $airport->description = $request->description;
//        $airport->meta_title = $request->meta_description;
//        $airport->meta_description = $request->description;
        $airport->iata = $request->iata;
        $airport->oaci = $request->oaci;
        $airport->image = $request->file('image')->store('public/airports');
        $airport->bg_image = $request->file('bg_image')->store('public/airports');
        $airport->save();

        return redirect()->route('admin.airport.index')
            ->with('success','Airport has been created successfully.');
    }

    public function edit(Airport $airport)
    {
        $countries = Country::all();
        return view('admin.airports.edit', compact('airport','countries'));
    }

    public function update(Request $request, Airport $airport)
    {
        $request->validate([
            'title' => 'required',
            'country_id' => 'required',
            'description' => 'required',
            'iata' => 'required',
            'oaci' => 'required'
        ]);

        $airport = Airport::find($airport->id);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $airport->image = $request->file('image')->store('public/airports');
        }

        if($request->hasFile('bg_image')){
            $request->validate([
                'bg_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $airport->bg_image = $request->file('bg_image')->store('public/airports');
        }

        $airport->title = $request->title;
//        $airport->meta_title = $request->meta_description;
//        $airport->meta_description = $request->description;
        $airport->country_id = $request->country_id;
        $airport->description = $request->description;
        $airport->iata = $request->iata;
        $airport->oaci = $request->oaci;


        $airport->save();
        return redirect()->route('admin.airport.index',$airport)
            ->with('success','Airport updated successfully');
    }

    public function destroy(Airport $airport)
    {
        $airport->delete();
        return redirect()->route('admin.airport.index')
            ->with('success','Airport has been deleted successfully');
    }
}

