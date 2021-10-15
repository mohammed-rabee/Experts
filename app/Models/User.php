<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasFactory,HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'phone', 'gander', 'username', 'email', 'password', 'birthDate', 'age', 'major_id', 'active'
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

    public function major() {
        return $this->belongsTo(Major::class);
    }

    // user the part where user register a program
    public function register() {
        return $this->belongsToMany(Section::class, 'registers', 'student_id', 'section_id')->withPivot('currentPayment', 'leftPayment', 'overallPayment')->withTimestamps();
    }

    // teacher section
    public function teach() {
        return $this->belongsToMany(Section::class, 'teaches', 'teacher_id', 'section_id')->withTimestamps();
    }
    
}