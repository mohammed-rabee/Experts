<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    protected $fillable = [
        'name', 'maxNumberOfStudent', 'major_program_id'
    ];

    // major Program
    public function majorProgram() {
        return $this->belongsTo(MajorPrograms::class);
    }

    // teachers
    public function teachers() {
        return $this->BelongsToMany(Teacher::class, 'teaches', 'section_id', 'teacher_id')->withTimestamps();
    }

    // students
    public function students() {
        return $this->BelongsToMany(Student::class, 'teaches', 'section_id', 'student_id')->withTimestamps();
    }

}
