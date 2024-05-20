<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\MBKMCourses;

class CourseController extends Controller
{
    //course
    public function courses(){
        $courses = Courses::all();
        return view('pages.Admin.students.course-all', compact('courses'));
    }
    //mbkm
    public function mbkmcourseall(){
        $mbkmcourses = MBKMCourses::all();
        return view('pages.Admin.students.mbkm-all', compact('mbkmcourses'));

    }
}
