<?php

namespace App\Http\Livewire;

use App\Models\Airport;
use App\Models\Country;
use Livewire\Component;

class Map extends Component
{
    public $search = "";
    public $airports = [];
    public $selected_continent = null;
    public $countries = [];
    private $airports_all = [];

    function mount()
    {
        $this->countries = Country::all();
    }

    public function render()
    {
        $q = Airport::query()->join("airport_infos", "id", "airport_id");
        if (strlen($this->search) >= 3) {
            $q->where(function ($q) {
                $q->orWhere("title", "LIKE", $this->search . "%");
                $q->orWhere("icao", "LIKE", $this->search . "%");
                $q->orWhere("iata", "LIKE", $this->search . "%");
                $q->orWhere("city", "LIKE", $this->search . "%");
            });
        }
        if ($this->selected_continent) {
            $q->where("continent", $this->selected_continent);
        }
        if (strlen($this->search) >= 3 || $this->selected_continent) {
            $this->airports = $q->get();
        }
        return view('livewire.map');
    }

    function setContinent($co)
    {
        $this->selected_continent = $co;
    }
}
