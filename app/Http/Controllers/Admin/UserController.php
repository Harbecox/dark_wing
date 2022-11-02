<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->get("order","id");
        $sort = $request->get("sort","asc");
        $users = User::orderBY($order,$sort)->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user = User::find($user->id);
        if($request->hasFile('avatar')){
            $request->validate([
                'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $user->avatar = $request->file('avatar')->store('public/images');
        }

        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->accounting_email = $request->accounting_email;
        $user->phone = $request->phone;
        $user->company = $request->company;
        $user->billing_address = $request->address;
        $user->isBlocked = $request->boolean('isBlocked');
        $password = $request->get("password");
        if(strlen(trim($password)) > 0){
            $user->password = Hash::make($password);
        }
        $user->save();
        return redirect()->route('user.index',$user)
            ->with('success','User updated successfully');
    }

    public function block(User $user){
        $user->isBlocked = true;
        $user->save();
        return redirect()->route('user.index')
           ->with('success','User has been blocked successfully');
    }
}
