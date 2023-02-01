<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use illuminate\Support\Str;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Teachers method start
    // Teachers showing method start
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.list',compact('teachers'));
    }
    // Teachers showing method end 
    // Teachers creating  method start
    public function create()
    {
        return view('teachers.create');
    }
    //Teachers creating method end
    //Teachers storing method start
    public function store(Request $request)
    {
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'qualification' => $request->qualification,
            'slug'=>Str::slug($request->name),
        ]);

        return redirect('/teachers')->with('Success', 'Teacher Added Successfully');
    }
// Teacher storing method end

// Teachers method end
}