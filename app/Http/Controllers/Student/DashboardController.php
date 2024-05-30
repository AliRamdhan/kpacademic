<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllocationSupervisor;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        // $supervisors = AllocationSupervisor::all();
        $supervisors = AllocationSupervisor::where('isApply', 'None')
        ->whereNull('userId')->paginate(15);
        // $supervisors = AllocationSupervisor->where(paginate(15);
        return view('dashboard',compact('supervisors'));
    }

    public function applyDospem($alocId){
        $userId = Auth::user()->id;
        AllocationSupervisor::where('alocId',$alocId)->where('isApply', 'None')
        ->whereNull('userId')
        ->update(['userId' => $userId,'isApply'=> 'Pending']);
        return redirect()->back()->with('success', 'Dospem applied successfully!');
        // return response()->json(['message' => 'Data created successfully'], 200);
    }
}
