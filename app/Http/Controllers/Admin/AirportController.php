<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAirportStoreRequest;
use App\Models\Airport;
use App\Models\AirportInfo;
use App\Models\Country;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->get("order","id");
        $sort = $request->get("sort","asc");

        $airports = Airport::query()->join("airport_infos", "id", "airport_id")
            ->orderBy($order, $sort)
            ->paginate(10);

        return view('admin.airports.index', compact('airports'));
    }

    public function create()
    {
        $data['countries'] = Country::all();
        $data['action'] = route("admin.airport.store");
        $data['method'] = "POST";
        return view('admin.airports.edit',$data);
    }

    public function store(AdminAirportStoreRequest $request)
    {
        $airport = new Airport();
        $airport->title = $request->title;
        $airport->country_id = $request->get("info")['country_id'];
        $airport->description = "";
        $airport->meta_title = $request->get("meta_title");
        $airport->meta_description = $request->get("meta_description");
        $airport->image = $request->file('image')->store('airports');
        $airport->bg_image = $request->file('bg_image')->store('airports');
        $airport->save();

        $airport->info()->create($request->get("info"));

        $airport->description = view('components.airport-description',['airport' => $airport])->render();
        $airport->save();

        return redirect()->route('admin.airport.edit',$airport->id)
            ->with('success','Airport has been created successfully.');
    }

    public function edit(Airport $airport)
    {
        $countries = Country::all();
        if(!$airport->info){
            $airport->info()->create();
            return redirect(request()->url());
        }
        $data['action'] = route('admin.airport.update',$airport->id);
        $data['method'] = "PUT";
        $data['airport'] = $airport;
        $data['countries'] = $countries;
        return view('admin.airports.edit', $data);
    }

    public function update(Request $request, Airport $airport)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $airport = Airport::find($airport->id);

        $info = $request->get("info");
        $airport->info()->update($info);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $airport->image = $request->file('image')->store('airports');
        }

        if($request->hasFile('bg_image')){
            $request->validate([
                'bg_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $airport->bg_image = $request->file('bg_image')->store('airports');
        }

        $airport->title = $request->title;
        $airport->description = $request->description;
        $airport->meta_title = $request->meta_title;
        $airport->meta_description = $request->meta_description;

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

    public function search(Request $request){
        $s = $request->get("search");
        $data['search'] = $s;
        $data['airports'] = Airport::query()->join("airport_infos", "id", "airport_id")
            ->where(function ($q) use($s) {
                $q->orWhere("title", "LIKE", $s . "%");
                $q->orWhere("icao", "LIKE", $s . "%");
                $q->orWhere("iata", "LIKE", $s . "%");
                $q->orWhere("city", "LIKE", $s . "%");
            })
            ->paginate(10);

        return view('admin.airports.index', $data);
    }
}

