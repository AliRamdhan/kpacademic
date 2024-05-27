<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reports;
use App\Models\Recognition;
use App\Models\LocationKP;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ReportsController extends Controller
{
    public function studentsReport(){
        $userId = Auth::user()->id;
        $reportsKP = Reports::whereHas('locationKP', function ($query) use ($userId) {
            $query->where('locationUser', $userId);
        })->get();
        $reportsRecognition = Reports::whereHas('recognition', function ($query) use ($userId) {
            $query->where('recognitionUser', $userId);
        })->get();

        $response = [
            'reportsKP' => $reportsKP,
            'reportsRecognition' => $reportsRecognition
        ];

        //return response()->json($response);
        return view('pages.Students.reports.list-reports', compact('reportsRecognition','reportsKP'));
    }

    public function createReport(){
        $recognitions = Recognition::where('recognitionUser', Auth::user()->id)->where('recognitionStatus','Approve')->get();
        $locations = LocationKP::where('locationUser', Auth::user()->id)->where('locationStatus','Approve')->get();
        return view('pages.Students.reports.create-reports', compact('recognitions','locations'));
    }

    public function createReportProcess(Request $request){
        try{
            $validate = $request->validate([
                'reportProof' => 'required',
                'reportTitle' => 'required',
                'reportDuration' => 'required',
            ]);
            if ($request->hasFile('reportProof')) {
                $image = $request->file('reportProof');
                $filename = Str::random(8) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/reportapply');

                // Check if the directory exists and is writable
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                if ($image->move($destinationPath, $filename)) {
                    $reports = new Reports;
                    $reports->reportTitle = $validate['reportTitle'];
                    $reports->reportProof = $filename;
                    $reports->reportDuration = $validate['reportDuration'];
                    $reports->reportDate = Carbon::now();
                    $reports->reportKp = $request->reportKp;
                    $reports->reportUser = Auth::user()->id;
                    $reports->reportRecognition = $request->reportRecognition;
                    $reports->save();
                    return redirect()->route('student.application.reports.all')->with('succes','Success Create data');
                }
                return response()->json(['error' => 'Photo upload failed'], 400);
            }
            // return response()->json(['message' => 'Data created successfully'], 200);
            return response()->json(['error' => 'Photo upload failed'], 400);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error creating reports');

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

}
