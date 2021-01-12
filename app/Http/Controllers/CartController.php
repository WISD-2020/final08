<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\RingElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $elements=Cart::orderBy('id')->get();
        $data=['elements'=>$elements];
        return view('cart',$data);
    }

    public function cart($id)
    {
        $es=RingElement::where('id','=',$id)->get();
        $data=['elements'=>$es];
        foreach ($es as $w){
        Cart::create(
            ['id'=>$id,
                'name'=>$w->name,
                'price'=>$w->price,
            ]
        );
        }
        return redirect()->route('customer.buy.index');
    }

    public function cartdel($id)
    {
        Cart::destroy($id);
        return redirect()->route('customer.cart.index');
    }
}
