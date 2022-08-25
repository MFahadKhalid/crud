<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Religion;

class ReligionController extends Controller
{
    public function index(){
        $religions = Religion::get();
        return view('religions.index' , compact('religions'));
    }
    public function create(){
        return view('religions.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:religions,name',
            'status' => 'required',
        ]);
        $store = Religion::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        

        if(!empty($store->id)){
            return redirect()->route('religions.index')->with('success','religion Added');
        }
        else{
            return redirect()->route('religions.create')->with('error','Something Went Wrong');
        }

    }

    public function edit($id){
        $religion = Religion::where('id',$id)->first();
        return view('religions.edit',compact('religion'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
            'name' => 'required|max:191|:religions,name'.$id,
            'status' => 'required',
    ]);
    $update = Religion::where('id',$id)->update([
        'name' => $request->name,
        'status' => $request->status,
    ]);
    if($update > 0){
        return redirect()->route('religions.index')->with('success','religion update');
    }
    return redirect()->route('religions.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $religions = Religion::where('id',$id)->first();
        if(!empty($religions)){
         $religions->delete();
         return redirect()->route('religions.index')->with('success','religion delete');
        }
        return redirect()->route('religions.index')->with('error','record not found');
     }
}
