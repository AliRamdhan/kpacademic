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

    public function createcourses(){
        return view('pages.Admin.students.crud.create-course');
    }

    public function createcoursesprocess(Request $request){
        $validate = $request->validate([
            'coursesName' => 'required',
            'coursesSKS' => 'required',
            'coursesLecture' => 'required',
            'coursesDate' => 'required',
        ]);
        if($validate){
            $courses = new Courses;
            $courses->coursesName=$validate['coursesName'];
            $courses->coursesSKS=$validate['coursesSKS'];
            $courses->coursesLecture=$validate['coursesLecture'];
            $courses->coursesDate=$validate['coursesDate'];
            $courses->save();
            return response()->json(['message' => 'Data created successfully'], 200);
        }
        return response()->json(['message' => 'Failed to created data'], 400);
    }

    //mbkm
    public function mbkmcourseall(){
        $mbkmcourses = MBKMCourses::all();
        return view('pages.Admin.students.mbkm-all', compact('mbkmcourses'));

    }

    public function creatembkm(){
        return view('pages.Admin.students.crud.create-mbkm');
    }

    public function creatembkmprocess(Request $request){
        $validate = $request->validate([
            'mbkmCoursesName' => 'required',
            'mbkmCoursesDuration' => 'required',
        ]);
        if($validate){
            $courses = new MBKMCourses;
            $courses->mbkmCoursesName=$validate['mbkmCoursesName'];
            $courses->mbkmCoursesDuration=$validate['mbkmCoursesDuration'];
            $courses->save();
            return response()->json(['message' => 'Data created successfully'], 200);
        }
        return response()->json(['message' => 'Failed to created data'], 400);
    }
}
