<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    protected $fillable = [
        'name', 'maxNumberOfStudent', 'major_programs_id'
    ];

    // major Program
    public function majorPrograms() {
        return $this->belongsTo(MajorPrograms::class);
    }

    // teachers
    public function teachers() {
        return $this->BelongsToMany(User::class, 'teaches', 'section_id', 'teacher_id')->withTimestamps();
    }

    // students
    public function students() {
        return $this->BelongsToMany(User::class, 'teaches', 'section_id', 'student_id')->withTimestamps();
    }

    // document to upload
    public function resources() {
        return $this->hasMany(Resource::class);
    }

}
