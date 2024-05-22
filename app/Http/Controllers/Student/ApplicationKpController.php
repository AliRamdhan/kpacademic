<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LocationKP;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ApplicationKpController extends Controller
{
    //data kp user
    public function studentkp(){
        $kps = LocationKp::where('locationUser', Auth::user()->id)->get();
        return view('pages.Students.KP.list-kp', compact('kps'));
    }
    // pengajuan kp
    public function createkp(){
        return view('pages.Students.KP.create-kp');
    }

    public function createKpProcess(Request $request){
        try{
            $validate = $request->validate([
                'locationProof' => 'required',
                'locationName' => 'required',
                'locationReason'=> 'required'
            ]);
            if ($request->hasFile('locationProof')) {
                $image = $request->file('locationProof');
                $filename = Str::random(8) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/kpslocation');

                // Check if the directory exists and is writable
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                if ($image->move($destinationPath, $filename)) {
                    $locationKp = new LocationKP;
                    $locationKp->locationProof = $filename;
                    $locationKp->locationName = $validate['locationName'];
                    $locationKp->locationReason = $validate['locationReason'];
                    $locationKp->locationUser = Auth::user()->id;
                    $locationKp->locationStatus="Pending";
                    $locationKp->save();

                    return redirect()->route('student.application.kp.all')->with('success','Data created successfully');
                    // return response()->json(['message' => 'Data created successfully'], 200);
                } else {
                    return response()->json(['error' => 'Photo upload failed'], 400);
                }

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
