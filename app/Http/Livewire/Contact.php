<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $lname;
    public $email;
    public $phone;
    public $question;

    protected $rules = [
        'name' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'question' => 'nullable',
    ];

    public function submit()
    {
        $data = $this->validate();
        file_put_contents(str_replace(":","_",Carbon::now()->toDateTimeLocalString()).".json",json_encode($data,256));
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
