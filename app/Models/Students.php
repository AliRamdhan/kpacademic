<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'studentId';
    protected $fillable = [
        'studentName',
        'studentNim',
        'studentProdi',
        'studentSKS',
        'studentSemester'
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'studentId');
    }

    public function locations()
    {
        return $this->hasManyThrough(LocationKP::class, User::class, 'studentId', 'locationUser', 'studentId', 'id');
    }

    public function recognitions()
    {
        return $this->hasManyThrough(Recognition::class, User::class, 'studentId', 'recognitionUser', 'studentId', 'id');
    }
}
