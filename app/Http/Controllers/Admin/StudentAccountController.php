<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Students;

class StudentAccountController extends Controller
{
    // List All
    public function index(){
        $users = User::whereNotNull('studentId')->get();
        return view('pages.Admin.students.student-account-all', compact('users'));
    }

    // Create
    public function create(){
        $students = Students::all();
        return view('pages.Admin.students.student-account-create',compact('students'));
    }

    public function registerStudent(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'studentId' => 'required',
            // 'roleuser' => 'required',
        ]);

        if($validate){
            $user = new User;
            $user->name = $validate['name'];
            $user->email = $validate['email'];
            $user->password = $validate['password'];
            $user->studentId = $validate['studentId'];
            $user->roleuser = 2;
            $user->save();
            // return response()->json(['message' => 'Data created successfully'], 200);
            return redirect()->route('admin.student.account.all')->with('succes','Succes created succesfully');
        }
    }
}
