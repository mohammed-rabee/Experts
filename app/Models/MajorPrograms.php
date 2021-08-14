<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorPrograms extends Model
{
    use HasFactory;

    // teachers
    public function teachers() {
        return $this->belongsToMany(Teacher::class, 'teaches');
    }
    public function sections() {
        return $this->belongsToMany(Section::class, 'teaches');
    }

    // students
    public function students() {
        return $this->belongsToMany(Student::class , 'registers');
    }

    
}
