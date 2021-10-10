<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'section_id', 'url'
    ];

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
