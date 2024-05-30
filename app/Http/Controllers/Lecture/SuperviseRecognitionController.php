<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AllocationSupervisor;
use App\Models\Recognition;
use App\Models\Reports;

class SuperviseRecognitionController extends Controller
{

    // public function studentsuperviserecognitiondata()
    // {
    //     $lecture = Auth::user()->lectures->lectureId;
    //     $students = AllocationSupervisor::where('alocSupervisor', $lecture)
    //     ->where('isApply', 'Approve')
    //     ->whereNotNull('userId') // Check if userId is not null
    //     ->get();
    //     // $students = AllocationSupervisor::where('alocSupervisor', $lecture)
    //     //                                  ->with(['students.user'])
    //     //                                  ->get();

    //     // $studentIds = $students->pluck('students.user.id')->filter()->all();

    //     $recognitions = Recognition::where('recognitionUser', $$students->userId)->get();

    //     return view('pages.Lecture.recognitions.recognition-supervised-all', compact('students', 'recognitions'));
    // }
    public function studentsuperviserecognitiondata()
    {
        $lecture = Auth::user()->lectures->lectureId;

        // Retrieve AllocationSupervisor records where the supervisor is the authenticated user and isApply is 'Approve'
        $students = AllocationSupervisor::where('alocSupervisor', $lecture)
            ->where('isApply', 'Approve')
            ->whereNotNull('userId') // Check if userId is not null
            ->get();

        // Extract student IDs from AllocationSupervisor records
        $studentIds = $students->pluck('userId')->filter()->all();

        // Fetch Recognition records associated with the extracted student IDs and where the recognition status is 'Pending'
        $recognitions = Recognition::whereIn('recognitionUser', $studentIds)
            ->where('recognitionStatus', 'Approve')
            ->get();

        return view('pages.Lecture.recognitions.recognition-supervised-all', compact('recognitions'));
    }


    // public function studentsuperviserecognitiondataapproval(){
    //     $lecture = Auth::user()->lectures->lectureId;
    //     // $students = AllocationSupervisor::where('alocSupervisor', $lecture)
    //     //                                  ->with(['students.user'])
    //     //                                  ->get();
    //     $students = AllocationSupervisor::where('alocSupervisor', $lecture)
    //     ->where('isApply', 'Approve')
    //     ->whereNotNull('userId') // Check if userId is not null
    //     ->get();

    //     $studentIds = $students->pluck('students')->filter()->all();

    //     $recognitions = Recognition::whereIn('recognitionUser', $studentIds)->get();
    //     // $studentIds = $students->pluck('students.user.id')->filter()->all();

    //     $recognitions = Recognition::where('recognitionUser', $students->userId)->where('recognitionStatus', 'Pending')->get();

    //     return view('pages.Lecture.recognitions.recognition-supervised-approval', compact('recognitions'));
    // }
    public function studentsuperviserecognitiondataapproval()
    {
        $lecture = Auth::user()->lectures->lectureId;

        // Retrieve AllocationSupervisor records where the supervisor is the authenticated user and isApply is 'Approve'
        $students = AllocationSupervisor::where('alocSupervisor', $lecture)
            ->where('isApply', 'Approve')
            ->whereNotNull('userId') // Check if userId is not null
            ->get();

        // Extract student IDs from AllocationSupervisor records
        $studentIds = $students->pluck('userId')->filter()->all();

        // Fetch Recognition records associated with the extracted student IDs and where the recognition status is 'Pending'
        $recognitions = Recognition::whereIn('recognitionUser', $studentIds)
            ->where('recognitionStatus', 'Pending')
            ->get();

        return view('pages.Lecture.recognitions.recognition-supervised-approval', compact('recognitions'));
    }


    public function studentsuperviserecognitiondataapprovalprocess(Request $request, $recognitionId) {
        $recognition = Recognition::where('recognitionId', $recognitionId)->first();
        if ($recognition) {
            $recognition->recognitionStatus = "Approve"; // Always setting it to "Approve"
            $recognition->save();
            return redirect()->route('lecture.supervise.student.recognition')->with('success','success approve');
            // return response()->json(['message' => 'Data updated successfully'], 201);
        }
        return response()->json(['message' => 'Recognition not found'], 404);
    }

    public function studentsuperviserecognitiondatareportall(){
        $recognitions = Recognition::where('recognitionStatus','Approve')->get();
         return view('pages.Lecture.recognitions.recognition-supervised-report', compact('recognitions'));
    }
    public function studentsuperviserecognitiondatareport($recognitionId){
        $recognitions = Recognition::where('recognitionId',$recognitionId)->first();
        $reports = Reports::where('reportRecognition',$recognitionId)->get();
        return view('pages.Lecture.recognitions.recognition-reports', compact('reports','recognitions'));
    }
}
