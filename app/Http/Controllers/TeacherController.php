<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::get();
        return view('teachers.index' , compact('teachers'));
    }
    public function create(){
        return view('teachers.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:teachers,name',
            'email' => 'required|max:191|unique:teachers,email',
            'phone' => 'required|max:255|unique:teachers,phone',
            'status' => 'required',
        ]);
        $store = Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        

        if(!empty($store->id)){
            return redirect()->route('teachers.index')->with('success','teacher Added');
        }
        else{
            return redirect()->route('teachers.create')->with('error','Something Went Wrong');
        }

    }

    public function edit($id){
        $teacher = Teacher::where('id',$id)->first();
        return view('teachers.edit',compact('teacher'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
            'name' => 'required|max:191|:teachers,name'.$id,
            'email' => 'required|max:191|:teachers,email'.$id,
            'phone' => 'required|max:255|:teachers,phone'.$id,
            'status' => 'required',
    ]);
    $update = Teacher::where('id',$id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'status' => $request->status,
    ]);
    if($update > 0){
        return redirect()->route('teachers.index')->with('success','teacher update');
    }
    return redirect()->route('teachers.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $teachers = Teacher::where('id',$id)->first();
        if(!empty($teachers)){
         $teachers->delete();
         return redirect()->route('teachers.index')->with('success','teacher delete');
        }
        return redirect()->route('teachers.index')->with('error','record not found');
     }
}
