<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Livewire;
use Livewire\WithFileUploads;

class Account extends Component
{
    use WithFileUploads;

    public $user = null;
    public $avatar = null;

    function mount(){
        $this->user = Auth::user();
        $this->fill($this->user);
    }

    protected $rules = [
        "user.firstName" => 'required',
        "user.company" => 'nullable',
        "user.accounting_email" => 'nullable',
        "user.billing_address" => 'nullable',
    ];

    public function render()
    {
        return view('livewire.account');
    }

    public function submit()
    {
        $this->validate();
        if(!is_string($this->avatar) && $this->avatar){
            $avatar = $this->avatar->store('public/images');
            $this->user->avatar = $avatar;
        }
        $this->user->save();
    }
}
