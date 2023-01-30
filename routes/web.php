<?php

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