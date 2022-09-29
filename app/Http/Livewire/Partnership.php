<?php

namespace App\Http\Livewire;

use App\Jobs\SendMail;
use App\Jobs\SendPartnerMail;
use Carbon\Carbon;
use Livewire\Component;

class Partnership extends Component
{
    public $company;
    public $email;
    public $phone;
    public $location;

    protected $rules = [
        'company' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'location' => 'nullable',
    ];

    public function submit()
    {
        $data = $this->validate();
        SendPartnerMail::dispatch($data);
        $this->success = true;
        $this->company = "";
        $this->email = "";
        $this->phone = "";
        $this->location = "";

    }

    public function render()
    {
        return view('livewire.partnership');
    }
}
