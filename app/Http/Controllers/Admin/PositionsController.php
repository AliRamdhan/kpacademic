<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Lectures;

class PositionsController extends Controller
{
    //Students
    public function  createdatastudents(){
        return view('pages.Admin.students.crud.create');
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
}
