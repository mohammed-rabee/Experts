<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $guard = 'teacher';
    
    // user type
    public function user() {
        return $this->morphOne(User::class,'userable');
    }

    // section
    public function sections() {
        return $this->belongsToMany(Section::class, 'teaches', 'teacher_id', 'section_id')->withTimestamps();
    }
    
}

