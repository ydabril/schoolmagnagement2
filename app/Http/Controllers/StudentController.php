<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('createStudent');
    }
    public function reportStudents(){
        $students=student::all();

        return view('showStudents', compact('students'));
    }
    public function insert(Request $request){
        $student = new student();
        
        $student->document = $request->document;
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->city = $request->city;
        $student->semester = $request->semester;
        $student->save();

        return redirect('createstudent');

    }
    public function delete($id){
        $student = student::findOrFail($id);
        $student->delete();

        return redirect('/');
    }
    public function update($id){
        $student = student::find($id);

        return view('updateStudent', compact('student'));
    }
    public function edit(Request $request){
        $id=$request->id_student;
        $student = student::findOrFail($id);

        $student->document = $request->document;
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->city = $request->city;
        $student->semester = $request->semester;
        $student->save();

        return redirect('/');
    }
}
