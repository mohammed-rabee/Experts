<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guard = 'student';

    //
    // public function sessions () {
    //     return $this->belongsToMany(Session::class,'Students_Sessions', 'user_id', 'session_id');
    // }

    public function user() {
        return $this->morphOne(User::class,'userable');
    }

    // program
    public function major() {
        return $this->belongsTo(Major::class);
    }

    // the part where user register a program
    public function sections() {
        return $this->belongsToMany(Section::class, 'registers', 'student_id', 'section_id');
    }
}
