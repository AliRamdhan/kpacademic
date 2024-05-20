<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        // $authors = AuthorsBook::all();
        return view('pages.Admin.dashboard');
    }
}
