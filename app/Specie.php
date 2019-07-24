<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function breeds()
    {
        return $this->hasMany('App\Breed');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pets()
    {
        return $this->hasMany('App\Pet');
    }
}
