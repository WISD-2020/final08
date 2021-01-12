<?php

namespace App\Http\Controllers;
use App\Models\RingElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminRingElementsController extends Controller
{
    public function index()
    {
        $elements=RingElement::orderBy('id','DESC')->get();
        $data=['elements'=>$elements];

        return view('admin.rings.index',$data);
    }

    public function create()
    {
        return view('admin.rings.create');
    }

    public function store(Request $request)
    {
        $storagePath = Storage::put('public/img/ringelements', $request['figure']);
        $fileName = basename($storagePath);
        RingElement::create(
            [
                 'name'=>$request['name'],
                 'price'=>$request['price'],
                 'type'=>$request['type'],
                 'figure'=>$fileName,
            ]
        );
        return redirect()->route('admin.rings.index');
    }

    public function edit($id)
    {
        $elements=RingElement::find($id);
        $data=['elements'=>$elements];
        return view('admin.rings.edit',$data);
    }

    public function destroy($id)
    {
        $destroy=RingElement::where('id','=',$id)->get();
        foreach ($destroy as $dump)
        {
            Storage::delete('public/img/ringelements/'.$dump->figure);
        }
        RingElement::destroy($id);
        return redirect()->route('admin.rings.index');
    }

    public function update(Request $request,$id)
    {
        $destroy=RingElement::where('id','=',$id)->get();
        if(!empty($_FILES['figure']['tmp_name'])){
            foreach ($destroy as $dump)
            {
                Storage::delete('public/img/ringelements/'.$dump->figure);
            }
            $storagePath = Storage::put('public/img/ringelements', $request['figure']);
            $fileName = basename($storagePath);
            $update=RingElement::find($id);
            $update->update([
                    'name'=>$request['name'],
                    'price'=>$request['price'],
                    'type'=>$request['type'],
                    'figure'=>$fileName
                ]
            );
        }
        else{
            $update=RingElement::find($id);
            foreach ($destroy as $dump)
            {
                $update->update([
                        'name'=>$request['name'],
                        'price'=>$request['price'],
                        'type'=>$request['type'],
                        'figure'=>$dump->figure
                    ]
                );
            }
        }

        return redirect()->route('admin.rings.index');
    }

}
