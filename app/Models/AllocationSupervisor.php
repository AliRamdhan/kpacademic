<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllocationSupervisor extends Model
{
    use HasFactory;
    protected $table = 'alocationSupervisor';
    protected $primaryKey = 'alocId';
    protected $fillable = [ 'alocName','alocStudent','alocSupervisor','userId','isApply' ];

    public function students(){
        return $this->belongsTo(Students::class, 'alocStudent', 'studentId');
    }
    public function lectures(){
        return $this->belongsTo(Lectures::class, 'alocSupervisor', 'lectureId');
    }
}
