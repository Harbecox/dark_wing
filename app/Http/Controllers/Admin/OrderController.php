<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminOrderStoreRequest;
use App\Models\Airport;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->get("order","id");
        $sort = $request->get("sort","asc");

        $orders = Order::query()
            ->orderBy($order, $sort)
            ->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        $data['orders'] = Order::all();
        $data['airports'] = Airport::all();
        return view('admin.orders.create',$data);
    }

    public function store(AdminOrderStoreRequest $request)
    {
        $order = new Order();
        $order->firstName = $request->firstName;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->deliveryAirport = $request->deliveryAirport;
        $order->deliveryDay = $request->deliveryDay;
        $order->company = $request->company;
        $order->handling = $request->handling;
        $order->packaging = $request->packaging;
        $order->allergies = $request->allergies;
        $order->save();

        return redirect()->route('order.index')
            ->with('success','Order has been created successfully.');
    }


    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {

        $order = Order::find($order->id);

        $order->firstName = $request->get("firstName",null);
        $order->email = $request->get("email",null);
        $order->phone = $request->get("phone",null);
        $order->deliveryAirport = $request->get("deliveryAirport",null);
        $order->deliveryDay = $request->get("deliveryDay",null);
        $order->company = $request->get("company",null);
        $order->handling = $request->get("handling",null);
        $order->packaging = $request->get("packaging",null);
        $order->allergies = $request->get("allergies",null);

        if($request->hasFile('order_pdf')){
            $request->validate([
                'order_pdf' => 'required|mimes:pdf',
            ]);
            $order->order_pdf = $request->file('order_pdf')->store('public/orders');
        }

        $order->save();
        return redirect()->route('order.index',$order)
            ->with('success','Order updated successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index')
            ->with('success','Order has been deleted successfully');
    }
}
