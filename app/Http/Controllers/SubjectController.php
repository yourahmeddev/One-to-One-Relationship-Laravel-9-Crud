<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
    return view('subjects.list');
    }
    // method for creating subjects 
    public function create(){
    return view('subjects.create');
    }
    // Method for storing data start
    public function store(Request $request){

    }
}
