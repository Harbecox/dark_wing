<?php

namespace App\Http\Livewire;

use App\Jobs\SendMail;
use App\Mail\ContactMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $lname;
    public $email;
    public $phone;
    public $question;
    public $success = false;

    protected $rules = [
        'name' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'phone' => 'required|regex:/^\+?([0-9]{8,12})$/',
        'question' => 'nullable',
    ];

    function __construct($id = null)
    {
        parent::__construct($id);
        $this->isContactPage = Route::is('contact');
    }

    public function submit()
    {
        $data = $this->validate();
        SendMail::dispatch($data);
        $this->success = true;
        $this->name = "";
        $this->lname = "";
        $this->email = "";
        $this->phone = "";
        $this->question = "";
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
