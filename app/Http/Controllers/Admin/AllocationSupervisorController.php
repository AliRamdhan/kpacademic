<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Lectures;

class AllocationSupervisorController extends Controller
{
    //list mahasiswa , dosen , dospem mahasiswa
    //students
    public function studentsall(){
        $students = Students::paginate(10);
        return view('pages.Admin.students.student-all',compact('students'));
    }




    //lectures
    public function lecturesall(){
        $lectures = Lectures::paginate(15);
        return view('pages.Admin.lectures.lectures-all',compact('lectures'));
    }
}
