<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\subject;
use App\Models\teacher;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $teachers = teacher::all();

        return view('createSubject', compact('teachers'));
    }
    public function insert(Request $request)
    {
        $subject = new subject();

        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->credits = $request->credits;
        $subject->area = $request->area;
        $subject->type = $request->type;
        $subject->id_teacher = $request->teacher;
        $subject->save();

        return redirect('createsubject');
    }
    public function include($id)
    {
        $subject = subject::all();
        $student = student::find($id);
        $name_student = $student->name . " " . $student->lastname;
        $id_student = $id;
        return view('includeSubject', compact('subject', 'name_student', 'id_student'));
    }
    public function insertInclude(Request $request)
    {
        $id = $request->student;
        $subject = subject::all();
        $student = student::find($id);
        $name_student = $student->name . " " . $student->lastname;
        $include = $request->include;
        $sum = 0;
        $validateCredits = 0;
        foreach ($include as $includes) {
            $subjectCredits = subject::select('credits')->where('id', $includes)->first();
            return $subjectCredits;
            $sum += $subjectCredits['credits'];
        }

        

        foreach ($include as $includes) {
            $validateStudent = student::join('student_subject', 'students.id', '=', 'student_subject.student_id')
                ->where('student_subject.subject_id', '=', $includes)->get();
            if (count($validateStudent) > 0) {
                if ($sum >= 7) {
                    $validateCredits = 1;
                }
                $error = 1;
                $id_student = $id;
                return view('includeSubject', compact('subject', 'validateCredits', 'name_student', 'id_student', 'error'));
            }
        }
        if ($sum >= 7) {
            $validateCredits = 1;
            $id_student = $id;
            return view('includeSubject', compact('subject', 'validateCredits', 'name_student', 'id_student'));
        } else {
            $student->subjects()->attach($include);
            return redirect('/');
        }
    }
    public function show($id)
    {

        $subject = subject::join('student_subject', 'subjects.id', '=', 'student_subject.subject_id')
            ->where('student_subject.student_id', '=', $id)->get();
        $student = student::find($id);
        $name_student = $student->name . " " . $student->lastname;
        $id_student = $id;

        return view('showSubjects', compact('subject', 'name_student', 'id_student'));
    }
    public function deleteSubject($id_subject, $id_student)
    {
        $student = student::find($id_student);
        $student->subjects()->detach($id_subject);

        return redirect('showsubject/' . $id_student);
    }
}
