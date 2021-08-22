<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teach extends Model
{
    // many to many class
    public function teacher() {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function section() {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // the part where user register a program
    public function students() {
        return $this->belongsToMany(Student::class, 'registers', 'teach_id', 'student_id');
    }

    // the part where teacher create sessions for section
    public function sessions() {
        return $this->hasMany(Session::class);
    }
}
