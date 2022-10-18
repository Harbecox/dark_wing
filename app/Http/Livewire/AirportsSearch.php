<?php

namespace App\Http\Livewire;

use App\Models\Airport;
use Livewire\Component;

class AirportsSearch extends Component
{
    public $count = 0;
    public $search = "";


    public function render()
    {

        $data['airports'] = [];
        if (strlen($this->search) > 0) {
            $data['airports'] = Airport::query()
                ->where("title", "like", $this->search . "%")
                ->orWhere("IATA", "like", $this->search . "%")
                ->orWhere("OACI", "like", $this->search . "%")
                ->limit(4)->get();
            $this->count = count($data['airports']);
        }
        return view('livewire.airports-search', $data);
    }
}
