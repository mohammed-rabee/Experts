<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    public function program() {
        return $this->belongsTo(MajorPrograms::class);
    }

    public function lectures() {
        return $this->hasMany(Lecture::class);
    }
}
