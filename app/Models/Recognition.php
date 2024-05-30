<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recognition extends Model
{
    use HasFactory;
    protected $table = 'recognitions';
    protected $primaryKey = 'recognitionId';
    protected $fillable = [
        'recognitionName',
        'recognitionReason',
        'recognitionProof',
        'recognitionUser',
        'recognitionCourse',
        'recognitionActivity',
        'recognitionStatus',
        'recognitionDate',
    ];

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'courses_recognition', 'recognition_id', 'course_id');
    }

    public function MBKMCourses(){
        return $this->belongsTo(MBKMCourses::class, 'recognitionActivity');
    }

    // Define relationship with User (assuming User model exists)
    public function user()
    {
        return $this->belongsTo(User::class, 'recognitionUser');
    }

    // Define relationship with Reports
    public function reports()
    {
        return $this->hasMany(Reports::class, 'reportRecognition');
    }

}
