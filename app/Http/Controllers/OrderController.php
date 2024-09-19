<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

        return to_route('home');
    }
}
