<?php

namespace App\Http\Livewire;

use App\Jobs\SendNewOrderMail;
use App\Models\Airport;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public $user = null;
    public $airports = null;
    public $firstName;
    public $email;
    public $phone;
    public $deliveryAirport;
    public $deliveryDay;
    public $deliveryTime;
    public $company;
    public $handling;
    public $packaging;
    public $allergies;
    public $success;
    public $order;

    function mount(){
        if(Auth::check()){
            $this->user = Auth::user();
            $this->firstName = $this->user->firstName;
            $this->email = $this->user->email;
            $this->company = $this->user->company;
            $this->phone = $this->user->phone;
        }

        $this->airports = Airport::all();
    }

    protected $rules = [
        'firstName' => 'required',
        'email' => 'required|email',
        'phone' => 'required|regex:/^\+?([0-9]{8,12})$/',
        'deliveryAirport' => 'required',
        'deliveryDay' => 'required',
        'deliveryTime' => 'required',
        'company' => 'nullable',
        'handling' => 'nullable',
        'packaging' => 'nullable',
        'allergies' => 'nullable',
        'order' => 'nullable',
    ];

    public function submit()
    {
        $data = $this->validate();
        if(Auth::check()){
            $data['userId'] = $this->user->id;
        }
        $order = \App\Models\Order::create($data);
        SendNewOrderMail::dispatch($order->toArray());
        $this->success = true;
        $this->firstName = "";
        $this->email = "";
        $this->phone = "";
        $this->deliveryAirport = "";
        $this->deliveryDay = "";
        $this->deliveryTime = "";
        $this->company = "";
        $this->handling = "";
        $this->packaging = "";
        $this->allergies = "";
        $this->order = "";
        //file_put_contents(str_replace(":","_",Carbon::now()->toDateTimeLocalString()).".json",json_encode($data,256));
    }
    public function render()
    {
        return view('livewire.order');
    }
}
