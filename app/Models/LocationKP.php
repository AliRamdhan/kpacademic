<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class LocationKP extends Model
{
    use HasFactory;
    protected $table = 'locationKP';
    protected $primaryKey = 'locationId';
    protected $fillable = [
        'locationProof',
        'locationName',
        'locationUser',
        'locationStatus',
        'locationReason'
    ];

    public function user() //students
    {
        return $this->belongsTo(User::class, 'locationUser');
    }

    public function reports()
    {
        return $this->hasMany(Reports::class, 'reportKp');
    }
}
