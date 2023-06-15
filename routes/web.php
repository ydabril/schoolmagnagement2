<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\subjectController;
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

Route::get('/', [studentController::class, 'reportStudents']);
Route::get('createstudent', [studentController::class, 'create']);
Route::post('insertstudent', [studentController::class, 'insert']);
Route::post('editstudent', [studentController::class, 'edit']);
Route::get('deletestudent/{id}', [studentController::class, 'delete']);
Route::get('updatestudent/{id}', [studentController::class, 'update']);
Route::get('createteacher', [teacherController::class, 'create']);
Route::post('insertteacher', [teacherController::class, 'insert']);
Route::get('createsubject', [subjectController::class, 'create']);
Route::post('insertsubject', [subjectController::class, 'insert']);
Route::get('includesubject/{id}', [subjectController::class, 'include']);
Route::post('insertincludesubject', [subjectController::class, 'insertInclude']);
Route::get('showsubject/{id}', [subjectController::class, 'show']);
Route::get('deletesubject/{id_subject}/{id_student}', [subjectController::class, 'deleteSubject']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
