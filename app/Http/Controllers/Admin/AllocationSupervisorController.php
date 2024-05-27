<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Lectures;
use App\Models\AllocationSupervisor;
use Illuminate\Support\Facades\DB;
class AllocationSupervisorController extends Controller
{
    //list mahasiswa , dosen , dospem mahasiswa
    //students
    public function studentsall(){
        $students = Students::paginate(10);
        return view('pages.Admin.students.student-all',compact('students'));
    }
    public function studentskpall(){
        // Join students with users and locationKP
        // $students = Students::with(['user' => function($query) {
        //     $query->with('locations');
        // }])->whereHas('user.locations')->paginate(10);

        $students = DB::select("
            SELECT students.*, users.name as userName, users.email as userEmail,
                locationKP.locationProof, locationKP.locationName, locationKP.locationStatus
            FROM students
            JOIN users ON students.studentId = users.studentId
            JOIN locationKP ON locationKP.locationUser = users.id
        ");

        // return response()->json($students);
        return view('pages.Admin.students.student-kp', compact('students'));
    }
    public function studentsconversionrecognitionall(){
        $students = DB::select("
            SELECT students.*, users.name as userName, users.email as userEmail,
                recognitions.recognitionReason, recognitions.recognitionProof, recognitions.recognitionStatus
            FROM students
            JOIN users ON students.studentId = users.studentId
            JOIN recognitions ON recognitions.recognitionUser = users.id
        ");
        // return response()->json($students);

        return view('pages.Admin.students.student-conversion',compact('students'));
    }


    //lectures
    public function lecturesall(){
        $lectures = Lectures::paginate(15);
        return view('pages.Admin.lectures.lectures-all',compact('lectures'));
    }

    //supervisor
    public function supervisorall(){
        $supervisors = AllocationSupervisor::all();
        return view('pages.Admin.supervisor.supervisor-all',compact('supervisors'));
    }

    public function supervisorcreate(){
        //$supervisors = AllocationSupervisor::all();
        $lectures = Lectures::all();
        $students = Students::all();
        return view('pages.Admin.supervisor.supervisor-create',compact('lectures','students'));
    }

    public function supervisorcreateprocess(Request $request){
        try{
            $validate= $request->validate([
                'alocName'=>'required',
                'alocStudent'=>'required',
                'alocSupervisor'=>'required',
            ]);
            $allocation = new AllocationSupervisor;
            $allocation->alocName = $validate['alocName'];
            $allocation->alocStudent = $validate['alocStudent'];
            $allocation->alocSupervisor = $validate['alocSupervisor'];
            $allocation->save();

            return redirect()->route('admin.supervisor.all')->with('success','Data created successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error creating membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }

    public function supervisoredit($alocId){
        $lectures = Lectures::all();
        $students = Students::all();
        $supervisor = AllocationSupervisor::where('alocId', $alocId)->first();
        return view('pages.Admin.supervisor.supervisor-edit',compact('supervisor','lectures','students'));
    }

    public function supervisoreditprocess(Request $request, $alocId){
        $oldsupervisor = AllocationSupervisor::where('alocId', $alocId)->first();
        if (!$oldsupervisor) {
           return response()->json(['error' => 'Supervisor not found'], 404);
        }
        try{
            $oldsupervisor->alocName = $request->alocName ?? $oldsupervisor->alocName;
            $oldsupervisor->alocStudent = $request->alocStudent ?? $oldsupervisor->alocStudent;
            $oldsupervisor->alocSupervisor = $request->alocSupervisor ?? $oldsupervisor->alocSupervisor;
            $oldsupervisor->save();

            return redirect()->route('admin.supervisor.all')->with('success','Data created successfully');
            // return response()->json(['message' => 'Data created successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error edit membership: ' . $e->getMessage());

            // Return error response
            return response()->json(['error' => 'Failed to create data: ' . $e->getMessage()], 400);
        }
    }
    public function supervisordeleteprocess($alocId){
        $oldsupervisor = AllocationSupervisor::where('alocId', $alocId)->delete();
        return redirect()->route('admin.supervisor.all')->with('success','Data created successfully');
    }
}
