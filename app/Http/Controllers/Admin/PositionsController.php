<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Lectures;
use Illuminate\Support\Facades\Log;

class PositionsController extends Controller
{
    //Students
    public function  createdatastudents(){
        return view('pages.Admin.students.crud.create-student');
    }
    public function createdatastudentsprocess(Request $request){
        $validate = $request->validate([
            'studentName' => 'required',
            'studentNim' => 'required',
            'studentProdi' => 'required',
            'studentSKS' => 'required',
            'studentSemester' => 'required',
        ]);
        if($validate){
            $students = new Students;;
            $students->studentName = $validate['studentName'];
            $students->studentNim = $validate['studentNim'];
            $students->studentProdi = $validate['studentProdi'];
            $students->studentSKS = $validate['studentSKS'];
            $students->studentSemester = $validate['studentSemester'];
            $students->save();
            // return response()->json(['message' => 'Data created successfully'], 200);
            return redirect()->route('admin.student.all')->with('success', 'Success to create the data');
        }
        return redirect()->route('')->with('faild', 'Failed to create the data');
    }

    public function editdatastudent($studentId){
        $student = Students::where('studentId', $studentId)->first();
        return view('pages.Admin.students.crud.edit-student',compact('student'));
    }

    public function editdatastudentprocess(Request $request, $studentId){
        $oldStudent = Students::where('studentId', $studentId)->first();
        if (!$oldStudent) {
           return response()->json(['error' => 'Student not found'], 404);
        }
        try{
            $oldStudent->studentName = $request->studentName ?? $oldStudent->studentName;
            $oldStudent->studentNim = $request->studentNim ?? $oldStudent->studentNim;
            $oldStudent->studentProdi = $request->studentProdi ?? $oldStudent->studentProdi;
            $oldStudent->studentSKS = $request->studentSKS ?? $oldStudent->studentSKS;
            $oldStudent->studentSemester = $request->studentSemester ?? $oldStudent->studentSemester;
            $oldStudent->save();

            return redirect()->route('admin.student.all')->with('success','Data edited successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error edit membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }
    public function deletedatastudent($studentId){
        $student = Students::where('studentId', $studentId)->delete();
        return redirect()->route('admin.student.all')->with('success','Data created successfully');
    }


    // LECTURES
    public function  createdatalectures(){
        return view('pages.Admin.lectures.crud.create');
    }
    public function createdatalecturesprocess(Request $request){
        $validate = $request->validate([
            'lectureName' => 'required',
            'lectureDepartment' => 'required',
        ]);
        if($validate){
            $students = new Lectures;;
            $students->lectureName = $validate['lectureName'];
            $students->lectureDepartment = $validate['lectureDepartment'];
            $students->save();
            // return response()->json(['message' => 'Data created successfully'], 200);
            return redirect()->route('admin.lectures.all')->with('success','Succes created data');

        }
        return redirect()->route('admin.lectures.form')->with('failed', 'Failed to create the data');
    }

    public function editdatalecture($lectureId){
        $lecture = Lectures::where('lectureId', $lectureId)->first();
        return view('pages.Admin.lectures.crud.edit',compact('lecture'));
    }

    public function editdatalectureprocess(Request $request, $lectureId){
        $oldLecture = Lectures::where('lectureId', $lectureId)->first();
        if (!$oldLecture) {
           return response()->json(['error' => 'Student not found'], 404);
        }
        try{
            $oldLecture->lectureName = $request->lectureName ?? $oldLecture->lectureName;
            $oldLecture->lectureDepartment = $request->lectureDepartment ?? $oldLecture->lectureDepartment;
            $oldLecture->save();

            return redirect()->route('admin.lectures.all')->with('success','Data edited successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error edit membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

    public function deletedatalecture($lectureId){
        $lecture = Lectures::where('lectureId', $lectureId)->delete();
        return redirect()->route('admin.lectures.all')->with('success','Data created successfully');
    }
}
