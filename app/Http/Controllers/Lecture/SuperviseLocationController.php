<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AllocationSupervisor;
use App\Models\Recognition;
use App\Models\Reports;
use App\Models\LocationKP;

class SuperviseLocationController extends Controller
{

    public function studentsuperviselocationdata()
    {
        $lecture = Auth::user()->lectures->lectureId;
        $students = AllocationSupervisor::where('alocSupervisor', $lecture)
                                         ->with(['students.user'])
                                         ->get();

        $studentIds = $students->pluck('students.user.id')->filter()->all();
        $locations = LocationKP::whereIn('locationUser', $studentIds)->get();

        return view('pages.Lecture.locationkps.location-supervised-all', compact('students', 'locations'));
    }

    public function studentsuperviselocationdataapproval(){
        $lecture = Auth::user()->lectures->lectureId;
        $students = AllocationSupervisor::where('alocSupervisor', $lecture)
                                         ->with(['students.user'])
                                         ->get();

        $studentIds = $students->pluck('students.user.id')->filter()->all();

        $locations = LocationKP::whereIn('locationUser', $studentIds)
                                    ->where('locationStatus', 'Pending')
                                    ->get();

        return view('pages.Lecture.locationkps.location-supervised-approval', compact('locations'));
    }

    public function studentsuperviselocationdataapprovalprocess(Request $request, $locationId) {
        $location = LocationKP::where('locationId', $locationId)->first();
        if ($location) {
            $location->locationStatus = "Approve";
            $location->save();
            return redirect()->route('lecture.supervise.student.location')->with('success','success approve');
            // return response()->json(['message' => 'Data updated successfully'], 201);
        }
        return response()->json(['message' => 'Location not found'], 404);
    }

    public function studentsuperviselocationdatareportall(){
        $locations = LocationKP::where('locationStatus','Approve')->get();
         return view('pages.Lecture.locationkps.location-supervised-report', compact('locations'));
    }

    public function studentsuperviselocationdatareport($locationId){
        $locations = LocationKP::where('locationId',$locationId)->first();
        $reports = Reports::where('reportKp',$locationId)->get();
        return view('pages.Lecture.locationkps.location-reports', compact('reports','locations'));
    }
}
