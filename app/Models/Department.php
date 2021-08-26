<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function college() {
        return $this->belongsTo(College::class);
    }
    
    public function majors() {
        return $this->hasMany(Major::class);
    }
}
