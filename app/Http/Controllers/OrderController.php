<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Notifications\NewOrderNotification;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'remark' => 'max:500'
        ]);

        $order = Order::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'remark'=>$request->remark,
            'customer_id'=>Auth()->user()->id
        ]);

        $admins = User::all();
        foreach ($admins as $admin) {
            $admin->notify(new NewOrderNotification($order));
        }

        return to_route('home')->with('success', 'Order created successfully!');
    }
}
