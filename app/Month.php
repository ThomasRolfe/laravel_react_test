<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    public function starSign() {
        return $this->hasOne(StarSign::class);
    }
}
