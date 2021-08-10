<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    //

    public function programs() {
        return $this->belongsTo(YearProgram::class);
    }

    public function students() {
        return $this->belongToMany(Student::class, 'registers');
    }

    public function teachers() {
        return $this->BelongsToMany(Teacher::class, 'teaches');
    }

    // ask about teacher assign to section
    // answered that you choose from the teacher assigned to program
    public function sessions(){
        return $this->hasMany(Session::class);
    }
}
