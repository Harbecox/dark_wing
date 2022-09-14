<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Airport;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserAccountController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $data['user'] = Auth::user();
        $data['orders'] = Auth::user()->orders;
        return view('front.pages.personal',$data);
    }

    public function order(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $data['user'] = Auth::user();
        $data['airports'] = Airport::all();
        return view('front.pages.order',$data);
    }

    public function download_order(Order $order){
        return Storage::download($order->order_pdf);
    }

    public function upload_image(Request $request, User $user)
    {
        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $user->avatar = $request->file('avatar')->store('public/images');
            $user->save();
        }
    }
}
