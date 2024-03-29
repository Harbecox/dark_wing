<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Jobs\SendNewOrderMail;
use App\Models\Airport;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class UserAccountController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $data['user'] = Auth::user();
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

    public function upload_pdf(Request $request){
        if($request->hasFile('order_pdf')){
            $request->validate([
                'order_pdf' => 'required|mimes:pdf',
            ]);
            $order = new Order();
            $order->userId = Auth::user()->id;
            $order->email = Auth::user()->email;
            $order->firstName = Auth::user()->firstName;
            $order->phone = Auth::user()->phone;
            $order->order_pdf = $request->file('order_pdf')->store('public/orders');
            $order->save();
            $order_arr = $order->toArray();
            $order_arr['order_pdf'] = \url(str_replace("public","storage",$order_arr['order_pdf']));
            SendNewOrderMail::dispatch($order_arr);
        }
        return response()->redirectToRoute('account');
    }
}
