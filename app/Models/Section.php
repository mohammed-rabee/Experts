<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    // teachers
    public function programs() {
        return $this->belongsToMany(MajorPrograms::class, 'teachers');
    }

    public function teachers() {
        return $this->BelongsToMany(Teacher::class, 'teaches');
    }

    // students
    public function students() {
        return $this->belongToMany(Student::class, 'registers');
    }

    

    // ask about teacher assign to section
    // answered that you choose from the teacher assigned to program
    public function sessions(){
        return $this->hasMany(Session::class);
    }
}
