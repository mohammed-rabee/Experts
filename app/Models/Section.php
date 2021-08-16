<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{

    // major Program
    public function majorProgram() {
        return $this->belongsTo(MajorPrograms::class);
    }

    // teachers
    public function teachers() {
        return $this->BelongsToMany(Teacher::class, 'teaches', 'teacher_id', 'section_id');
    }

}
