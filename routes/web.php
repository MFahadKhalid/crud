<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ReligionController;
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
    return view('welcome');
})->name('welcome');

//country
Route::get('countries' , [CountryController::class , 'index'])->name('countries.index');
Route::get('countries/create' , [CountryController::class , 'create'])->name('countries.create');
Route::post('countries/store' , [CountryController::class , 'store'])->name('countries.store');
Route::get('countries/{id}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::post('countries/{id}/update', [CountryController::class, 'update'])->name('countries.update');
Route::get('countries/{id}/delete', [CountryController::class, 'delete'])->name('countries.delete');
//teacher
Route::get('teachers' , [TeacherController::class , 'index'])->name('teachers.index');
Route::get('teachers/create' , [TeacherController::class , 'create'])->name('teachers.create');
Route::post('teachers/store' , [TeacherController::class , 'store'])->name('teachers.store');
Route::get('teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::post('teachers/{id}/update', [TeacherController::class, 'update'])->name('teachers.update');
Route::get('teachers/{id}/delete', [TeacherController::class, 'delete'])->name('teachers.delete');
//religion
Route::get('religions' , [ReligionController::class , 'index'])->name('religions.index');
Route::get('religions/create' , [ReligionController::class , 'create'])->name('religions.create');
Route::post('religions/store' , [ReligionController::class , 'store'])->name('religions.store');
Route::get('religions/{id}/edit', [ReligionController::class, 'edit'])->name('religions.edit');
Route::post('religions/{id}/update', [ReligionController::class, 'update'])->name('religions.update');
Route::get('religions/{id}/delete', [ReligionController::class, 'delete'])->name('religions.delete');
//student
Route::get('students' , [StudentController::class , 'index'])->name('students.index');
Route::get('students/create' , [StudentController::class , 'create'])->name('students.create');
Route::post('students/store' , [StudentController::class , 'store'])->name('students.store');