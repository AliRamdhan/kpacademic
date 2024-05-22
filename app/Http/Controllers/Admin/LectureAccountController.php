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
        $users = User::whereNotNull('lectureId')->get();
        return view('pages.Admin.lectures.lectures-account-all', compact('users'));
    }

    // Create
    public function create(){
        $lectures = Lectures::all();
        return view('pages.Admin.lectures.lectures-account-create',compact('lectures'));
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
            $user->roleuser = 2;
            $user->save();
            // return response()->json(['message' => 'Data created successfully'], 200);
            return redirect()->route('admin.lecture.account.all')->with('succes','Succes created succesfully');
        }
    }
}
