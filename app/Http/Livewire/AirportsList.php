<?php

namespace App\Http\Livewire;

use App\Models\Airport;
use App\Models\PageTexts;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AirportsList extends Component
{
    public $count = 12;

    public $search;

    private $texts = null;

    function __construct($id = null)
    {
        parent::__construct($id);
        $requests = Request::all();
        $this->search = isset($requests['search']) ? $requests['search'] : "";

        $texts = PageTexts::all()->groupBy("page");
        foreach ($texts as $page => $value){
            $this->texts[$page] = [];
            foreach ($value as $v){
                $this->texts[$page][$v['name']] = $v['text'];
            }
        }
    }

    public function increment()
    {
        $this->count+=12;
    }

    public function render()
    {
        $query = Airport::query();
        if(strlen($this->search) > 0){
            $query = $query
                ->where("title", "like", $this->search . "%")
                ->orWhere("IATA", "like", $this->search . "%")
                ->orWhere("OACI", "like", $this->search . "%");
        }
        $data['airports'] = $query->limit($this->count)->get();
        $data['all_count'] = Airport::query()->count();
        $data['count'] = $this->count;
        $data['texts'] = $this->texts;
        return view('livewire.airports-list',$data);
    }
}
