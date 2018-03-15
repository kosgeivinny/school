<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create() {
        return view('students.create');
    }
    //creates the students registration page

    public function store(Request $request) {
        $student = $this->validate(request(), [
            'Name' => 'required',
            'Course' => 'required',
            'Year' => 'required|numeric',
            'Faculty' => 'required'
        ]);
        Student::create($student);

        return back('students');
    }

    public function index() {
        $students = Student::all()->toArray();
        return view('students.index', compact('students'));
    }
}
