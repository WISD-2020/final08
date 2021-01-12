<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.master');

    }
    public function indexlogin()
    {
        return view('layouts.master2');
    }

    public function decide()
    {
        if(auth()->user()->type=="admin"){
            return redirect()->route('admin.rings.index');
        }
        elseif (auth()->user()->type=="customer"){
            return redirect()->route('home.login.ed');
        }
    }


}
