<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $primaryKey = 'reportId';
    protected $fillable = [
        'reportTitle',
        'reportDate',
        'reportKp',
        'reportRecognition',
    ];

    // Define relationship with Recognition
    public function recognition()
    {
        return $this->belongsTo(Recognition::class, 'reportRecognition');
    }

    // Define relationship with LocationKP
    public function locationKP()
    {
        return $this->belongsTo(LocationKP::class, 'reportKp');
    }

}
