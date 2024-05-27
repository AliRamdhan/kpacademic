<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AllocationSupervisor;
use App\Models\Recognition;
use App\Models\Reports;

class SuperviseStudentController extends Controller
{
    public function studentsupervisedata(){
        $lecture = Auth::user()->lectures->lectureId;
        $students = AllocationSupervisor::where('alocSupervisor',$lecture)->get();
        return view('pages.Lecture.student-supervised',compact('students'));
    }

    public function studentsuperviserecognitiondata()
    {
        // $lecture = Auth::user()->lectures->lectureId;
        // $students = AllocationSupervisor::where('alocSupervisor', $lecture)->get();
        // $recognitions = collect();
        // foreach ($students as $student) {
        //     if ($student->students->user) {
        //         $pendingRecognitions = Recognition::where('recognitionUser',$student->students->user->id)->where('recognitionStatus','Pending')->get();
        //         $recognitions = $recognitions->merge($pendingRecognitions);
        //     }
        // }
        $lecture = Auth::user()->lectures->lectureId;
        $students = AllocationSupervisor::where('alocSupervisor', $lecture)
                                         ->with(['students.user'])
                                         ->get();

        $studentIds = $students->pluck('students.user.id')->filter()->all();

        $recognitions = Recognition::whereIn('recognitionUser', $studentIds)->get();

        return view('pages.Lecture.recognitions.recognition-supervised-all', compact('students', 'recognitions'));
    }


    public function studentsuperviserecognitiondataapproval(){
        $lecture = Auth::user()->lectures->lectureId;
        $students = AllocationSupervisor::where('alocSupervisor', $lecture)
                                         ->with(['students.user'])
                                         ->get();

        $studentIds = $students->pluck('students.user.id')->filter()->all();

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
