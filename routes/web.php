<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('Welcome');
});
*/
Route::get('/',[StudentController::class, "index"]);

//Student routes
Route::get('/students',[StudentController::class, "index"]);
Route::get('/student/edit/{id}',[StudentController::class,"edit"]);
Route::get('/student/show/{id}',[StudentController::class, "show"]);
Route::get('/student/create',[StudentController::class, "create"]);
Route::post('/student/store',[StudentController::class, "store"]);
Route::post('/student/update/{id}',[StudentController::class, "update"]);

Route::get('/student/destroy/{id}',[StudentController::class, "destroy"]);
//Teacher routes
Route::get('/teacher',[TeacherController::class, "index"]);
Route::get('/teacher/edit/{id}',[TeacherController::class,"edit"]);
Route::get('/teacher/show/{id}',[TeacherController::class, "show"]);
Route::get('/teacher/create',[TeacherController::class, "create"]);
Route::post('/teacher/store',[TeacherController::class, "store"]);
Route::post('/teacher/update/{id}',[TeacherController::class, "update"]);

Route::get('/teacher/destroy/{id}',[TeacherController::class, "destroy"]);

   //Teacher routes
   Route::get('/subject',[SubjectController::class, "index"]);
Route::get('/subject/edit/{id}',[SubjectController::class,"edit"]);
Route::get('/subject/show/{id}',[SubjectController::class, "show"]);
Route::get('/subject/create',[SubjectController::class, "create"]);
Route::post('/subject/store',[SubjectController::class, "store"]);
Route::post('/subject/update/{id}',[SubjectController::class, "update"]);
Route::get('/subject/destroy/{id}',[SubjectController::class, "destroy"]);
