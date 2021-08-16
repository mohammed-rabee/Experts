<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // user type
    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    // section
    public function sections() {
        return $this->belongsToMany(Section::class, 'teaches', 'teacher_id', 'section_id');
    }
    
}

