<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lectures;
use App\Models\User;
use App\Models\Role;
class LectureAccountController extends Controller
{
    // List All
    public function index(){
        $users = User::where('roleUser',4)->get();
        return view('pages.Admin.lectures.account.lectures-account-all', compact('users'));
    }

    // Create
    public function create(){
        $lectures = Lectures::all();
        return view('pages.Admin.lectures.account.lectures-account-create',compact('lectures'));
    }

    public function registerLecture(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'lectureId' => 'required',
            // 'roleuser' => 'required',
        ]);

        if($validate){
            $user = new User;
            $user->name = $validate['name'];
            $user->email = $validate['email'];
            $user->password = $validate['password'];
            $user->lectureId = $validate['lectureId'];
            $user->roleuser = 4;
            $user->save();
            // return response()->json(['message' => 'Data created successfully'], 200);
            return redirect()->route('admin.lecture.account.all')->with('succes','Succes created succesfully');
        }
    }

    public function editlectureaccount($userId){
        $lectures = Lectures::all();
        $user = User::where('id', $userId)->first();
        return view('pages.Admin.lectures.account.lecture-account-edit',compact('user','lectures'));
    }

    public function editlectureaccountprocess(Request $request, $userId){
        $oldLecture = User::where('id', $userId)->first();
        if (!$oldLecture) {
           return response()->json(['error' => 'Student not found'], 404);
        }
        try{
            $oldLecture->name = $request->name ?? $oldLecture->name;
            $oldLecture->email = $request->email ?? $oldLecture->email;
            $oldLecture->password = $request->password ?? $oldLecture->password;
            $oldLecture->studentId = $request->studentId ?? $oldLecture->studentId;
            $oldLecture->save();

            return redirect()->route('admin.lecture.account.all')->with('success','Data edited successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error edit membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

    public function deletelectureaccount($userId){
        $user = User::where('id', $userId)->delete();
        return redirect()->route('admin.lecture.account.all')->with('success','Data created successfully');
    }
}
