<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        // $authors = AuthorsBook::all();
        return view('pages.Admin.dashboard');
    }

    public function dashboardLectures(){
        $user = Auth::user();
        return view('pages.Lecture.dashboard',compact('user'));
    }
}
