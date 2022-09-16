<?php

namespace App\Http\Livewire;

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
        file_put_contents(str_replace(":","_",Carbon::now()->toDateTimeLocalString()).".json",json_encode($data,256));
    }

    public function render()
    {
        return view('livewire.partnership');
    }
}
