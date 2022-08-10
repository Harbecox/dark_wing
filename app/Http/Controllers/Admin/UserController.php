<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBY('id')->paginate(10);
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
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',
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
        $user->phone = $request->phone;
        $user->company = $request->company;
        $user->isBlocked = $request->boolean('isBlocked');
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
