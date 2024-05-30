<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $primaryKey = "coursesId";
    protected $fillable= [
        'coursesName',
        'coursesSKS',
        'coursesLecture',
        'coursesDate',
    ];
    public function recognitions()
    {
        return $this->belongsToMany(Recognition::class, 'courses_recognition', 'course_id', 'recognition_id');
    }
}
