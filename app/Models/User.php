<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'studentId',
        'lectureId',
        'roleuser'
    ];

    public function students(){
        return $this->belongsTo(Students::class, 'studentId');
    }
    public function lectures(){
        return $this->belongsTo(Lectures::class, 'lectureId');
    }

    public function locations()
    {
        return $this->hasMany(LocationKP::class, 'locationUser');
    }

    public function recognitions()
    {
        return $this->hasMany(Recognition::class, 'recognitionUser');
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
