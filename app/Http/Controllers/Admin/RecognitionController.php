<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recognition;
use App\Models\Reports;

class RecognitionController extends Controller
{
    public function recognitionall(){
        $recognitions = Recognition::all();
        return view('pages.Admin.academic.recognition.recognition-all', compact('recognitions'));
    }

    public function recognitionapproveall(){
        $recognitions = Recognition::where('recognitionStatus','Pending')->get();
        return view('pages.Admin.academic.recognition.recognition-approval', compact('recognitions'));
    }

    public function recognitionapproveallprocess(Request $request, $recognitionId) {
        $recognition = Recognition::where('recognitionId', $recognitionId)->first();
        if ($recognition) {
            $recognition->recognitionStatus = "Approve"; // Always setting it to "Approve"
            $recognition->save();
            return response()->json(['message' => 'Data updated successfully'], 201);
        }
        return response()->json(['message' => 'Recognition not found'], 404);
    }

    public function recognitionreportall(){
        $recognitions = Recognition::where('recognitionStatus','Approve')->get();
         return view('pages.Admin.academic.recognition.recognition-report', compact('recognitions'));
    }

    public function recognitionreport($recognitionId){
        $recognitions = Recognition::where('recognitionId',$recognitionId)->first();
        $reports = Reports::where('reportRecognition',$recognitionId)->get();
        return view('pages.Admin.academic.recognition.reports', compact('reports','recognitions'));
    }
}
