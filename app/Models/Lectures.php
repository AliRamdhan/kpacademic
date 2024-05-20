<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
    use HasFactory;
    protected $table = 'lectures';
    protected $primaryKey = 'lectureId';
    protected $fillable = [ 'lectureName', 'lectureDepartment' ];
}
