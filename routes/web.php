<?php

use App\Http\Controllers\Admin\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExcelImportController;
use App\Http\Controllers\Admin\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::prefix('admin')->group(function () {
   
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('dologin');

   


});

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/password/update/{id}', [ProfileController::class, 'updatePassword'])->name('password.update');
Route::post('/doupdate/{id}', [ProfileController::class, 'update'])->name('password.doupdate');
///////////////////////////////////////////////////////////////////////////////////////


Route::get('/doctors',[DoctorController::class,'index'])->name('doctors.index');
Route::get('/doctors/create',[DoctorController::class,'create'])->name('doctors.create');
Route::post('/doctors',[DoctorController::class,'store'])->name('doctors.store');
Route::post('/import-doctor', [ExcelImportController::class, 'doctorimport'])->name('import.doctor');
Route::get('/doctors/{id}',[DoctorController::class,'show'])->name('doctors.show');
Route::delete('/doctors/{id}',[DoctorController::class,'destroy'])->name('doctors.destroy');
Route::put('/doupdate/{id}', [DoctorController::class, 'update'])->name('password.doupdate');


////////////////////////////////////////////////////////////////////////////////////////

Route::get('/teachers',[TeacherController::class,'index'])->name('teachers.index');
Route::get('/teachers/create',[TeacherController::class,'create'])->name('teachers.create');
Route::post('/teachers',[TeacherController::class,'store'])->name('teachers.store');
Route::post('/import-teacher', [ExcelImportController::class, 'teacherimport'])->name('import.teacher');
Route::get('/teachers/{id}',[TeacherController::class,'show'])->name('teachers.show');
Route::delete('/teachers/{id}',[TeacherController::class,'destroy'])->name('teachers.destroy');
Route::put('/doupdate/{id}', [TeacherController::class, 'update'])->name('password.doupdate');

/////////////////////////////////////////////////////////////////////////////////////////






Route::get('/courses/create',[CourseController::class,'create'])->name('courses.create');
Route::post('/courses',[CourseController::class,'store'])->name('courses.store');
Route::get('/courses',[CourseController::class,'index'])->name('courses.index');






////////////////////////////////////////////////////////////////////



Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students',[StudentController::class,'store'])->name('students.store');
Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/{id}',[StudentController::class,'show'])->name('students.show');
Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');
Route::put('/doupdate/{id}', [StudentController::class, 'update'])->name('password.doupdate');
Route::post('/import-student', [ExcelImportController::class, 'studentimport'])->name('import.student');
