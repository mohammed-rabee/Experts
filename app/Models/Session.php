<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //

    public function section() {
        return $this->belongsTo(Section::class);
    }

}
