<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
    return view('subjects.list', compact('subjects'));
    }
    // method for creating subjects 
    public function create(){
        $teachers = Teacher::all();
    return view('subjects.create',compact('teachers'));
    }
    // Method for storing data start
    public function store(Request $request){
        $teacher = Teacher::findOrFail($request->teacher_id);
        $teacher->subjects()->create([
              'name'=>$request->name,
              'slug'=>Str::slug($request->name),
        ]);

        return redirect('/subjects')->with('Success', 'Subject added Successfully');
    }
}
