<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Account extends Component
{
    public $user = null;

    function mount(){
        $this->user = Auth::user();
        $this->fill($this->user);
    }

    protected $rules = [
        "user.firstName" => 'required',
        "user.company" => 'required',
        "user.accounting_email" => 'required',
        "user.billing_address" => 'required',
    ];

    public function render()
    {
        return view('livewire.account');
    }

    public function submit()
    {
        $this->validate();

        $this->user->save();
    }
}
