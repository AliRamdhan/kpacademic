<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\MBKMCourses;
use App\Models\Recognition;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ApplicationRecognitionController extends Controller
{
    public function studentrecognition(){
        $recognitions = Recognition::where('recognitionUser', Auth::user()->id)->get();
        return view('pages.Students.recognitions.list-recognition', compact('recognitions'));
    }

    public function createrecognition(){
        $courses = Courses::all();
        $mbkmcourses = MBKMCourses::all();
        return view('pages.Students.recognitions.create-recognition', compact('courses','mbkmcourses'));
    }

    public function createrecognitionprocess(Request $request){
        try{
            $validate = $request->validate([
                'recognitionCourse' => 'required',
                'recognitionActivity' => 'required',
                // 'recognitionStatus' => 'required',
                'recognitionReason' => 'required',
                'recognitionProof' => 'required',
                // 'recognitionDate' => 'required',
            ]);
            if ($request->hasFile('recognitionProof')) {
                $image = $request->file('recognitionProof');
                $filename = Str::random(8) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/recognition');

                // Check if the directory exists and is writable
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                if ($image->move($destinationPath, $filename)) {
                    $recognition = new Recognition();
                    $recognition->recognitionUser = Auth::user()->id;
                    $recognition->recognitionProof = $filename;
                    $recognition->recognitionReason= $validate['recognitionReason'];
                    $recognition->recognitionCourse = $validate['recognitionCourse'];
                    $recognition->recognitionActivity = $validate['recognitionActivity'];
                    $recognition->recognitionStatus = "Pending";
                    $recognition->recognitionDate = Carbon::now();
                    $recognition->save();
                    return redirect()->route('student.application.recognition.all')->with('succes','Succes create data');
                    // return response()->json(['message' => 'Data created successfully'], 200);
                }
                return response()->json(['error' => 'Photo upload failed'], 400);
            } else{
                return response()->json(['error' => 'Photo upload failed'], 400);
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error creating membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

}
