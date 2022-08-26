<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Teacher;
use App\Models\Religion;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::get();
        return view('students.index' , compact('students'));
    }
    public function create(){
        $countries = Country::get();
        $teachers = Teacher::get();
        $religions = Religion::get();
        $students = Student::get();
        return view('students.create' , compact('countries','teachers','religions','students'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191|unique:students,name',
            'age' => 'required|max:191|:students,age',
            'email' => 'required|max:191|unique:students,email',
            'phone' => 'required|max:191|unique:students,phone',
            'country' => 'required|max:191|:students,country',
            'teacher' => 'required|max:191|:students,teacher',
            'religion' => 'required|max:191|:students,religion',
        ]);
        if($request->file('student')){
            $student = $request->file('student');
            $studentName = 'student' . '-' . time() . '.' . $student->getClientOriginalExtension();
            $student->move('upload/student/', $studentName);
        }
        $store = Student::create([
            'name' =>$request->name,
            'age' =>$request->age,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'country' =>$request->country,
            'teacher' =>$request->teacher,
            'religion' =>$request->religion,
            'student' =>$studentName,
        ]);
        if(!empty($store->id)){
            return redirect()->route('students.index')->with('Success' , 'Student Added');
        }
        else{
            return redirect()->route('students.index')->with('error' , 'something went wrong');
        }
    }
}
