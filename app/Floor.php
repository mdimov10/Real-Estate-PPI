<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public function properties() {
        return $this->belongsToMany('App\Property');
    }
}
