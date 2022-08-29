<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(){
        $countries = Country::get();
        return view('countries.index' , compact('countries'));
    }
    public function create(){
        return view('countries.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:countries,name',
            'code' => 'required|max:11|unique:countries,code',
            'population' => 'required|max:11|:countries,population',
            'status' => 'required',
        ]);
        
        if($request->file('flag')){
            $flag = $request->file('flag');
            $flagName = 'flag' . '-' . time() . '.' . $flag->getClientOriginalExtension();
            $flag->move('upload/flag/', $flagName);
          }
        $store = Country::create([
            'flag' => $flagName,
            'name' => $request->name,
            'code' => $request->code,
            'population' => $request->population,
            'status' => $request->status,
        ]);

        

        if(!empty($store->id)){
            return redirect()->route('countries.index')->with('success','Country Added');
        }
        else{
            return redirect()->route('countries.create')->with('error','Something Went Wrong');
        }

    }

    public function edit($id){
        $country = Country::where('id',$id)->first();
        return view('countries.edit',compact('country'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|:countries,name'.$id,
        'code' => 'required|max:11|:countries,code'.$id,
        'population' => 'required|max:11|:countries,population'.$id,
        'status' => 'required',
    ]);
    $update = Country::where('id',$id)->update([
        'name' => $request->name,
        'code' => $request->code,
        'population' => $request->population,
        'status' => $request->status,
    ]);
    if($update > 0){
        return redirect()->route('countries.index')->with('success','country update');
    }
    return redirect()->route('countries.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $countries = Country::where('id',$id)->first();
        if(!empty($countries)){
         $countries->delete();
         return redirect()->route('countries.index')->with('success','country delete');
        }
        return redirect()->route('countries.index')->with('error','record not found');
     }
}
