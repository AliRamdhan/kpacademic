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
}
