<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('createTeacher');
    }
    public function insert(Request $request){
        $teacher = new teacher();
        
        $teacher->document = $request->document;
        $teacher->name = $request->name;
        $teacher->lastname = $request->lastname;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->city = $request->city;
        $teacher->save();

        return redirect('createteacher');

    }
}
