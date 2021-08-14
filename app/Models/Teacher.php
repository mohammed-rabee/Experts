<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    // teachers
    public function programs() {
        return $this->belongsToMany(MajorPrograms::class, 'teaches');
    }

    public function sections() {
        return $this->belongsToMany(Section::class, 'teaches');
    }

    // students
}

