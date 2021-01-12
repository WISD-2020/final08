<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\RingElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function index()
    {
        $elements=RingElement::orderBy('id')->get();
        $data=['elements'=>$elements];
        return view('wishlist',$data);
    }

    public function cart($id)
    {
        $es=RingElement::where('id','=',$id)->get();
        $data=['elements'=>$es];
        foreach ($es as $w){
        Cart::create(
            [   'ringid'=>$id,
                'name'=>$w->name,
                'price'=>$w->price,
                'figure'=>$w->figure
            ]
        );
        }
        return redirect()->route('customer.buy.index');
    }

}
