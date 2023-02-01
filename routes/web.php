<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('studentsystem.index');
});
// Routes for adding students in table 
Route::get('/students',[StudentController::class, 'index']);
// Route for creating Students in tables
Route::get('/students/create',[StudentController::class, 'create']);
// Routes For storing Data in to table
Route::post('/students/store',[StudentController::class, 'store']);
// Route for editing data in the table 
Route::get('/students/{student}/edit', [StudentController::class,'edit']);
// Route for updating data 
Route::put('/students/{student}/update', [StudentController::class, 'update']);
//Route for Deleting the data 
Route::delete('/students/{student}', [StudentController::class, 'destroy']);
// student Route end 
// Teacher Route start
// Route for listing the teachers
Route::get('/teachers', [TeacherController::class, 'index']);
// Route for creating data 
Route::get('/teachers/create', [TeacherController::class, 'create']);
// Route for storing Teachers Data
Route::post('/teachers/store', [TeacherController::class, 'store']);
// Route for listing data  in subjects table
Route::get('/subjects', [SubjectController::class, 'index']);
// Route for storing data
Route::get('/subjects/create', [SubjectController::class, 'create']);
// Route for storing Data into database
Route::post('/subjects/store', [SubjectController::class, 'store']);

// Teacher Route end 