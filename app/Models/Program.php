<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    public function majors() {
        return $this->belongsToMany(Major::class, 'major_programs', 'program_id', 'major_id');
    }
}