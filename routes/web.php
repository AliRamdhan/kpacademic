<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\AllocationSupervisorController;
use App\Http\Controllers\Student\ApplicationKpController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth', 'user'])->group(function () {
    //KP
        //list
    Route::get('application/kp/all', [ApplicationKpController::class,'studentkp'])->name('student.application.all');
        //apply
    Route::get('application/kp/form', [ApplicationKpController::class,'createkp'])->name('student.application.kp');
    Route::post('application/kp/form/process', [ApplicationKpController::class,'createKpProcess'])->name('student.application.kp.process');

});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class,'dashboard'])->name('admin.dashboard');
    //students
    Route::get('admin/students/all', [AllocationSupervisorController::class,'studentsall'])->name('admin.student.all');
    //lecturs
    Route::get('admin/lectures/all', [AllocationSupervisorController::class,'lecturesall'])->name('admin.lectures.all');

    //courses
    Route::get('admin/courses/all', [CourseController::class,'courses'])->name('admin.course.all');
    //mbkmcourses
    Route::get('admin/mbkm-courses/all', [CourseController::class,'mbkmcourseall'])->name('admin.course.mbkm.all');
});
