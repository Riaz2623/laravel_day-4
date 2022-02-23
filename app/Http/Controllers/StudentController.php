<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function index()
    {
        return view('add-student');
//        $this->student = new Student();
//        $this->student->newStudent();
//        return 'success';
////        $this->students = Student::getAllStudent();
////        return view('all',['students'=> $this->students]);



    }
    public function create(Request $request)
    {
       $this->student = new student();
       $this->student->name    = $request->name;
       $this->student->email   = $request->email;
       $this->student->mobile  = $request->mobile;
       $this->student->save();

       return redirect()->back()->with('message', 'Student info save successfully.');
    }
}
