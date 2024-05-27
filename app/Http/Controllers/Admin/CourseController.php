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

    public function editdatacourses($courseId){
        $course = Courses::where('coursesId', $courseId)->first();
        return view('pages.Admin.students.crud.edit-course',compact('course'));
    }

    public function editdatacoursesprocess(Request $request, $courseId){
        $oldCourse = Courses::where('coursesId', $courseId)->first();
        if (!$oldCourse) {
           return response()->json(['error' => 'Courses not found'], 404);
        }
        try{
            $oldCourse->coursesName = $request->coursesName ?? $oldCourse->coursesName;
            $oldCourse->coursesSKS = $request->coursesSKS ?? $oldCourse->coursesSKS;
            $oldCourse->coursesLecture = $request->coursesLecture ?? $oldCourse->coursesLecture;
            $oldCourse->coursesDate = $request->coursesDate ?? $oldCourse->coursesDate;
            $oldCourse->save();

            return redirect()->route('admin.course.all')->with('success','Data edited successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error edit membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

    public function deletedatacourses($courseId){
        $lecture = Courses::where('coursesId', $courseId)->delete();
        return redirect()->route('admin.course.all')->with('success','Data created successfully');
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
            return redirect()->route('admin.course.mbkm.all')->with('success','Data edited successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        }
        return response()->json(['message' => 'Failed to created data'], 400);
    }

    public function editdatambkm($mbkmCoursesId){
        $mbkm = MBKMCourses::where('mbkmCoursesId', $mbkmCoursesId)->first();
        return view('pages.Admin.students.crud.edit-mbkm',compact('mbkm'));
    }

    public function editdatambkmprocess(Request $request, $mbkmCoursesId){
        $oldMbkmCourses = MBKMCourses::where('mbkmCoursesId', $mbkmCoursesId)->first();
        if (!$oldMbkmCourses) {
           return response()->json(['error' => 'Courses not found'], 404);
        }
        try{
            $oldMbkmCourses->mbkmCoursesName = $request->mbkmCoursesName ?? $oldMbkmCourses->mbkmCoursesName;
            $oldMbkmCourses->mbkmCoursesDuration = $request->mbkmCoursesDuration ?? $oldMbkmCourses->mbkmCoursesDuration;
            $oldMbkmCourses->save();

            return redirect()->route('admin.course.mbkm.all')->with('success','Data edited successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error edit membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

    public function deletedatambkm($mbkmCoursesId){
        $mbkm = MBKMCourses::where('mbkmCoursesId', $mbkmCoursesId)->delete();
        return redirect()->route('admin.course.mbkm.all')->with('success','Data created successfully');
    }
}
