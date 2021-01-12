<?php

namespace App\Http\Controllers;

use App\Models\RingElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignController extends Controller
{
    public function first()
    {
        $elements=RingElement::where('type','=','材質')->get();
        $data=['elements'=>$elements];
        return view('first',$data);
    }

    public function second($id)
    {
        if($id=='1'){
            $elements=RingElement::where('type','=','白色表面工藝')->get();
            $data=['elements'=>$elements];
            return view('second',$data);
        }else{
            $elements=RingElement::where('type','=','紅色表面工藝')->get();
            $data=['elements'=>$elements];
            return view('second',$data);
        }

    }

    public function third($id)
    {
        if($id=='1'){
            $elements=RingElement::where('type','=','白色戒寬')->get();
            $data=['elements'=>$elements];
            return view('third',$data);
        }else{
            $elements=RingElement::where('type','=','紅色戒寬')->get();
            $data=['elements'=>$elements];
            return view('third',$data);
        }

    }
}
