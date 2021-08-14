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
        return $this->belongto(User::class,'user_id');
    }

    // Student
    public function programs() {
        return $this->belongsToMany(YearProgram::class, 'registers');
    }

    public function sections() {
        return $this->belongsToMany(Section::class, 'registers');
    }
}
