<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    // many to many class
    public function teach() {
        return $this->belongsTo(Teach::class,'teach_id');
    }

    public function student() {
        return $this->belongsTo(Student::class,'student_id');
    }
}
