<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //

    protected $fillable = [
        'name', 'time', 'url', 'annoncment', 'section_id'
    ];

    public function section() {
        return $this->belongsTo(Section::class);
    }

}
