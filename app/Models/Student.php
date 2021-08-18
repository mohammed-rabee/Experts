<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // public function sessions () {
    //     return $this->belongsToMany(Session::class,'Students_Sessions', 'user_id', 'session_id');
    // }

    public function user() {
        return $this->morphOne(User::class,'userable');
    }

    // program
    public function majorProgram() {
        return $this->belongsTo(MajorPrograms::class);
    }

    // the part where user register a program
    public function teachs() {
        return $this->belongsToMany(Teach::class, 'registers', 'teach_id', 'student_id');
    }
}
