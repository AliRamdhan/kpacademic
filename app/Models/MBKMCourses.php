<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBKMCourses extends Model
{
    use HasFactory;
    protected $table = "mbkmCourses";
    protected $primaryKey = "mbkmCoursesId";
    protected $fillable= [
        'mbkmCoursesName',
        'mbkmCoursesDuration'
    ];
}
