<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'phone', 'gander', 'username', 'email', 'password', 'birthDate', 'age'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // user the part where user register a program
    public function register() {
        return $this->belongsToMany(Section::class, 'registers', 'student_id', 'section_id')->withTimestamps();
    }

    // teacher section
    public function teach() {
        return $this->belongsToMany(Section::class, 'teaches', 'teacher_id', 'section_id')->withTimestamps();
    }
    
}