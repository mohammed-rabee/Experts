<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YearProgram extends Model
{
    //
    // protected $fillable = [
    //     'year_id','program_id'
    // ];

    public function sections() {
        return $this->hasMany(Section::class);
    }

    public function students() {
        return $this->belongsToMany(Student::class , 'registers');
    }

    public function teachers() {
        return $this->belongsToMany(Teacher::class, 'teaches');
    }

}
