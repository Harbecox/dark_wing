<?php

namespace App\Http\Livewire;

use App\Models\Airport;
use Livewire\Component;

class AirportsList extends Component
{
    public $count = 12;

    public $search = "";

    public function increment()
    {
        $this->count+=12;
    }

    public function render()
    {
        $query = Airport::query();
        if(strlen($this->search) > 0){
            $query = $query->where("title","like",$this->search."%");
        }
        $data['airports'] = $query->limit($this->count)->get();
        $data['all_count'] = Airport::query()->count();
        $data['count'] = $this->count;
        return view('liveware.airports-list',$data);
    }
}
