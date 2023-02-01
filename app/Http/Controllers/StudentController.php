<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentDetails;

class StudentController extends Controller
{
  public function index()
  {
    $students = Student::all();
    return view('students.list', compact('students'));
  }

  public function create()
  {
    return view('students.create');
  }
  public function store(Request $request)
  {

    $student = Student::create([
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
    ]);

    $student->studentDetails()->create([
      'address' => $request->address,
      'course' => $request->course,
      'roll_no' => $request->rollno,
    ]);

    return redirect('/students')->with('Success', 'Student and Student Details Created Successfully');
  }
  // method for editing the data 
  public function edit(Student $student)
  {

    return view('students.edit', compact('student'));
  }
  // method for updating data in to database
  public function update(Student $student, Request $request)
  {
    $student->update([
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
    ]);

    $student->studentDetails()->update([
      'address' => $request->address,
      'course' => $request->course,
      'roll_no' => $request->rollno,
    ]);
    return redirect('students')->with('update', 'Student and Student Details Updated Successfully');
  }

  // method for deleting our data 
  public function destroy(Student $student){
    $student->delete();
    return redirect('students')->with('Deleted', 'Student and Student Details Deleted Successfully');
  }
}