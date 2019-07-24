<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function pets()
    {
        return $this->belongsToMany('App\Pet');
    }
}
