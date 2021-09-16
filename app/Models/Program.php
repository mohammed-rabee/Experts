<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable = [
        'name', 'code', 'description','student_number_fake', 'student_number','student_previous_number_enrolled', 'student_previous_number_enrolled_fake', 'rate', 'rate_fake', 'cost', 'discount'
    ];

    public function majors() {
        return $this->belongsToMany(Major::class, 'major_programs', 'program_id', 'major_id');
    }
}