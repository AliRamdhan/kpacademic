<?php

use App\Http\Controllers\ProfileController;
//general
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LocationKPController;
use App\Http\Controllers\Admin\RecognitionController;
//lecture
use App\Http\Controllers\Admin\StudentAccountController;
use App\Http\Controllers\Admin\LectureAccountController;
use App\Http\Controllers\Admin\AllocationSupervisorController;
//student
use App\Http\Controllers\Student\ApplicationKpController;
use App\Http\Controllers\Student\ApplicationRecognitionController;
use App\Http\Controllers\Student\ReportsController;
use App\Http\Controllers\Student\DashboardController;

// positions
use App\Http\Controllers\Admin\PositionsController;
// lectures
use App\Http\Controllers\Lecture\SuperviseStudentController;
use App\Http\Controllers\Lecture\SuperviseLocationController;
use App\Http\Controllers\Lecture\SuperviseRecognitionController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified','user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::post('/applydospem/{aloc}', [DashboardController::class,'applyDospem'])->name('applyDospem');
    //KP
        //list
    Route::get('application/kp/all', [ApplicationKpController::class,'studentkp'])->name('student.application.kp.all');
        //apply
    Route::get('application/kp/form', [ApplicationKpController::class,'createkp'])->name('student.application.kp.form');
    Route::post('application/kp/form/process', [ApplicationKpController::class,'createKpProcess'])->name('student.application.kp.process');

    //Recognition
        //list
    Route::get('application/recognition/all', [ApplicationRecognitionController::class,'studentrecognition'])->name('student.application.recognition.all');
        //apply
    Route::get('application/recognition/form', [ApplicationRecognitionController::class,'createrecognition'])->name('student.application.recognition.form');
    Route::post('application/recognition/form/process', [ApplicationRecognitionController::class,'createrecognitionprocess'])->name('student.application.recognition.process');

    //Report
        //list
    Route::get('application/reports/all', [ReportsController::class,'studentsReport'])->name('student.application.reports.all');
        //apply
    Route::get('application/reports/form', [ReportsController::class,'createReport'])->name('student.application.reports.form');
    Route::post('application/reports/form/process', [ReportsController::class,'createReportProcess'])->name('student.application.reports.process');

});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class,'dashboard'])->name('admin.dashboard');

    //students
    Route::get('admin/students/all', [AllocationSupervisorController::class,'studentsall'])->name('admin.student.all');
    Route::get('admin/students/allocation-recognition/all', [AllocationSupervisorController::class,'studentsconversionrecognitionall'])->name('admin.student.kp.all');
    Route::get('admin/students/conversion-kp/all', [AllocationSupervisorController::class,'studentskpall'])->name('admin.student.recognition.all');
        //form
    Route::get('admin/students/form', [PositionsController::class,'createdatastudents'])->name('admin.student.form');
    Route::post('admin/students/form/process', [PositionsController::class,'createdatastudentsprocess'])->name('admin.student.form.process');
    Route::get('admin/{studentId}/form/edit', [PositionsController::class,'editdatastudent'])->name('admin.student.form.edit');
    Route::put('admin/{studentId}/form/edit/process', [PositionsController::class,'editdatastudentprocess'])->name('admin.student.form.edit.process');
    Route::delete('admin/{studentId}/form/delete/process', [PositionsController::class,'deletedatastudent'])->name('admin.student.form.delete.process');
        //student account
    Route::get('admin/students-account/all', [StudentAccountController::class,'index'])->name('admin.student.account.all');
    Route::get('admin/students-account/create', [StudentAccountController::class,'create'])->name('admin.student.account.create');
    Route::post('admin/students-account/create/process', [StudentAccountController::class,'registerStudent'])->name('admin.student.account.create.process');
    Route::get('admin/students-account/{account}/edit', [StudentAccountController::class,'edituseraccount'])->name('admin.student.account.edit');
    Route::put('admin/students-account/{account}/edit/process', [StudentAccountController::class,'edituseraccountprocess'])->name('admin.student.account.edit.process');
    Route::delete('admin/students-account/{account}/delete', [StudentAccountController::class,'deleteuseraccount'])->name('admin.student.account.delete.process');

    //lectures
    Route::get('admin/lectures/all', [AllocationSupervisorController::class,'lecturesall'])->name('admin.lectures.all');
        //form
    Route::get('admin/lectures/form', [PositionsController::class,'createdatalectures'])->name('admin.lectures.form');
    Route::post('admin/lectures/form/process', [PositionsController::class,'createdatalecturesprocess'])->name('admin.lectures.form.process');
    Route::get('admin/lectures/{lectureId}/form/edit', [PositionsController::class,'editdatalecture'])->name('admin.lecture.form.edit');
    Route::put('admin/lectures/{lectureId}/form/edit/process', [PositionsController::class,'editdatalectureprocess'])->name('admin.lecture.form.edit.process');
    Route::delete('admin/lectures/{lectureId}/form/delete/process', [PositionsController::class,'deletedatalecture'])->name('admin.lecture.form.delete.process');
        //lecture account
    Route::get('admin/lectures-account/all', [LectureAccountController::class,'index'])->name('admin.lecture.account.all');
    Route::get('admin/lectures-account/create', [LectureAccountController::class,'create'])->name('admin.lecture.account.create');
    Route::post('admin/lectures-account/create/process', [LectureAccountController::class,'registerLecture'])->name('admin.lecture.account.create.process');
    Route::get('admin/lectures-account/{account}/edit', [LectureAccountController::class,'editlectureaccount'])->name('admin.lecture.account.edit');
    Route::put('admin/lectures-account/{account}/edit/process', [LectureAccountController::class,'editlectureaccountprocess'])->name('admin.lecture.account.edit.process');
    Route::delete('admin/lectures-account/{account}/delete', [LectureAccountController::class,'deletelectureaccount'])->name('admin.lecture.account.delete.process');


    //supervisor
    Route::get('admin/supervisor-student/all', [AllocationSupervisorController::class,'supervisorall'])->name('admin.supervisor.all');
    Route::get('admin/supervisor-student/create', [AllocationSupervisorController::class,'supervisorcreate'])->name('admin.supervisor.create');
    Route::post('admin/supervisor-student/create/process', [AllocationSupervisorController::class,'supervisorcreateprocess'])->name('admin.supervisor.create.process');
    Route::get('admin/supervisor-student/{supervisedId}', [AllocationSupervisorController::class,'supervisoredit'])->name('admin.supervisor.edit');
    Route::put('admin/supervisor-student/{supervisedId}/process', [AllocationSupervisorController::class,'supervisoreditprocess'])->name('admin.supervisor.edit.process');
    Route::delete('admin/supervisor-student/{supervisedId}/delete', [AllocationSupervisorController::class,'supervisordeleteprocess'])->name('admin.supervisor.delete.process');


    //courses
    Route::get('admin/courses/all', [CourseController::class,'courses'])->name('admin.course.all');
    Route::get('admin/courses/form', [CourseController::class,'createcourses'])->name('admin.course.form');
    Route::post('admin/courses/form/process', [CourseController::class,'createcoursesprocess'])->name('admin.course.form.process');
    Route::get('admin/courses/{courseId}/form', [CourseController::class,'editdatacourses'])->name('admin.course.edit.form');
    Route::put('admin/courses/{courseId}/form/process', [CourseController::class,'editdatacoursesprocess'])->name('admin.course.edit.form.process');
    Route::delete('admin/courses/{courseId}/form/delete', [CourseController::class,'deletedatacourses'])->name('admin.course.delete.form.process');

    //mbkmcourses
    Route::get('admin/mbkm-courses/all', [CourseController::class,'mbkmcourseall'])->name('admin.course.mbkm.all');
    Route::get('admin/mbkm-courses/form', [CourseController::class,'creatembkm'])->name('admin.course.mbkm.form');
    Route::post('admin/mbkm-courses/form/process', [CourseController::class,'creatembkmprocess'])->name('admin.course.mbkm.form.process');
    Route::get('admin/mbkm-courses/{mbkm}/form', [CourseController::class,'editdatambkm'])->name('admin.course.mbkm.edit.form');
    Route::put('admin/mbkm-courses/{mbkm}/form/process', [CourseController::class,'editdatambkmprocess'])->name('admin.course.mbkm.form.edit.process');
    Route::delete('admin/mbkm-courses/{mbkm}/form/delete', [CourseController::class,'deletedatambkm'])->name('admin.course.mbkm.delete.process');

    //recognitions
        //all
    Route::get('admin/recognition/all', [RecognitionController::class,'recognitionall'])->name('admin.recognition.all');
        //approval
    Route::get('admin/recognition/approval/all', [RecognitionController::class,'recognitionapproveall'])->name('admin.recognition.approval.all');
    Route::put('admin/recognition/approval/{recognition}', [RecognitionController::class, 'recognitionapproveallprocess'])->name('admin.recognition.approval');
        //report
    Route::get('admin/recognition/report/all', [RecognitionController::class,'recognitionreportall'])->name('admin.recognition.reports.all');
    Route::get('admin/recognition/report/{report}', [RecognitionController::class,'recognitionreport'])->name('admin.recognition.reports');

    //locations
        //all
    Route::get('admin/location/all', [LocationKPController::class,'locationsall'])->name('admin.location.all');
        //approval
    Route::get('admin/location/approval/all', [LocationKPController::class,'locationsapproveall'])->name('admin.location.approval.all');
    Route::put('admin/location/approval/{location}', [LocationKPController::class, 'locationsapprovallprocess'])->name('admin.location.approval');
        //report
    Route::get('admin/location/report/all', [LocationKPController::class,'locationsreportall'])->name('admin.location.reports.all');
    Route::get('admin/location/report/{report}', [LocationKPController::class,'locationsreport'])->name('admin.location.reports');

});

Route::middleware(['auth', 'lecture'])->group(function () {
    Route::get('/lecture/dashboard', [HomeController::class,'dashboardLectures'])->name('lecture.dashboard');
    Route::get('/lecture/supervise', [SuperviseStudentController::class,'studentsupervisedata'])->name('lecture.supervise.student');
    Route::get('/lecture/supervise/approve', [SuperviseStudentController::class,'studentsupervisedataapprove'])->name('lecture.supervise.student.approve');
    Route::post('/lecture/supervise/approve/process/{aloc}', [SuperviseStudentController::class,'studentsupervisedataapproveprocess'])->name('lecture.supervise.student.approve.process');

        //Recognition

    Route::get('/lecture/supervise/recognition', [SuperviseRecognitionController::class,'studentsuperviserecognitiondata'])->name('lecture.supervise.student.recognition');
    Route::get('/lecture/supervise/student/recognition/approval', [SuperviseRecognitionController::class,'studentsuperviserecognitiondataapproval'])->name('lecture.supervise.student.recognition.approval');
    Route::put('/lecture/supervise/student/{recognition}/approval', [SuperviseStudentController::class,'studentsuperviserecognitiondataapprovalprocess'])->name('lecture.supervise.student.recognition.approval.process');
    Route::get('/lecture/supervise/student/recognition/report', [SuperviseStudentController::class,'studentsuperviserecognitiondatareportall'])->name('lecture.supervise.student.recognition.report.all');
    Route::get('/lecture/supervise/student/recognition/report/{report}', [SuperviseStudentController::class,'studentsuperviserecognitiondatareport'])->name('lecture.supervise.student.recognition.report');

        //Location

    Route::get('/lecture/supervise/location', [SuperviseLocationController::class,'studentsuperviselocationdata'])->name('lecture.supervise.student.location');
    Route::get('/lecture/supervise/student/location/approval', [SuperviseLocationController::class,'studentsuperviselocationdataapproval'])->name('lecture.supervise.student.location.approval');
    Route::put('/lecture/supervise/{location}/approval', [SuperviseLocationController::class,'studentsuperviselocationdataapprovalprocess'])->name('lecture.supervise.student.location.approval.process');
    Route::get('/lecture/supervise/student/location/report', [SuperviseLocationController::class,'studentsuperviselocationdatareportall'])->name('lecture.supervise.student.location.report.all');
    Route::get('/lecture/supervise/student/location/report/{report}', [SuperviseLocationController::class,'studentsuperviselocationdatareport'])->name('lecture.supervise.student.location.report');
});
