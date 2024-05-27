<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LocationKP;
use App\Models\Reports;

class LocationKPController extends Controller
{
    public function locationsall(){
        $locations = LocationKP::all();
        return view('pages.Admin.academic.locationkp.location-all', compact('locations'));
    }

    public function locationsapproveall(){
        $locations = LocationKP::where('locationStatus','Pending')->get();
        return view('pages.Admin.academic.locationkp.location-approval', compact('locations'));
    }

    public function locationsapprovallprocess(Request $request, $locationId) {
        $location = LocationKP::where('locationId', $locationId)->first();
        if ($location) {
            $location->locationStatus = "Approve"; // Always setting it to "Approve"
            $location->save();
            // return response()->json(['message' => 'Data updated successfully'], 201);
            return redirect()->route('admin.student.kp.all')->with('succes','Succes created succesfully');
        }
        return response()->json(['message' => 'Recognition not found'], 404);
    }

    public function locationsreportall(){
        $locations = LocationKP::where('locationStatus','Approve')->get();
         return view('pages.Admin.academic.locationkp.location-report', compact('locations'));
    }

    public function locationsreport($locationId){
        $locations = LocationKP::where('locationId',$locationId)->first();
        $reports = Reports::where('reportKp',$locationId)->get();
        return view('pages.Admin.academic.locationkp.reports', compact('reports','locations'));
    }

}
