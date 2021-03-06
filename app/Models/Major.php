<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        'department_id', 'name', 'discount', 'numberOfYears'
    ];
    //

    public function students() {
        return $this->hasMany(User::class);
    }
    
    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function programs() {
        return $this->belongsToMany(Program::class , 'major_programs', 'major_id', 'program_id')->withTimestamps();
    } 

}
