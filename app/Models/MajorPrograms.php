<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorPrograms extends Model
{
    use HasFactory;

    // many to many class
    // public function major() {
    //     return $this->belongsTo(Major::class,'major_id');
    // }

    // public function program() {
    //     return $this->belongsTo(Program::class,'program_id');
    // }

    // students
    public function students() {
        return $this->hasMany(Student::class);
    }

    // section
    public function sections() {
        return $this->hasMany(Section::class);
    }

    
}
