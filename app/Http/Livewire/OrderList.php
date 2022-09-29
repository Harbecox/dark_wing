<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderList extends Component
{
    public $limit = 5;
    public $count = 0;

    function __construct($id = null)
    {
        parent::__construct($id);
        $this->count = Auth::user()->orders->count();
    }

    public function render()
    {
        $data['orders'] = Auth::user()->orders()->orderByDesc("created_at")->limit($this->limit)->get();
        return view('livewire.order-list',$data);
    }

    function see_more(){
        $this->limit += 5;
    }
}
