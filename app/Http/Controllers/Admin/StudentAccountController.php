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
        return view('pages.Admin.students.account.student-account-all', compact('users'));
    }

    // Create
    public function create(){
        $students = Students::all();
        return view('pages.Admin.students.account.student-account-create',compact('students'));
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

    public function edituseraccount($userId){
        $students = Students::all();
        $user = User::where('id', $userId)->first();
        return view('pages.Admin.students.account.student-account-edit',compact('user','students'));
    }

    public function edituseraccountprocess(Request $request, $userId){
        $oldUser = User::where('id', $userId)->first();
        if (!$oldUser) {
           return response()->json(['error' => 'Student not found'], 404);
        }
        try{
            $oldUser->name = $request->name ?? $oldUser->name;
            $oldUser->email = $request->email ?? $oldUser->email;
            $oldUser->password = $request->password ?? $oldUser->password;
            $oldUser->studentId = $request->studentId ?? $oldUser->studentId;
            $oldUser->save();

            return redirect()->route('admin.student.account.all')->with('success','Data edited successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error edit membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

    public function deleteuseraccount($userId){
        $user = User::where('id', $userId)->delete();
        return redirect()->route('admin.lectures.all')->with('success','Data created successfully');
    }
}
