<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\RingElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $elements=Cart::orderBy('id')->get();
        $data=['elements'=>$elements];
        foreach ($elements as $w){
        Order::create(
            [
                'userid'=>auth()->user()->id,
                'ringid'=>$w->id,
                'price'=>$w->price,
            ]
        );
        }
        return view('layouts.master2');
    }
}
