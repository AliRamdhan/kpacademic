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
        'locationStatus'
    ];

    public function studens(){
        return $this->belongsTo(User::class, 'locationUser');
    }

}
