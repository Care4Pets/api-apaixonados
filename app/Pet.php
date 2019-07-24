<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'specie_id', 'breed_id', 'name', 'birthdate', 'metadata', 'shortbio'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'birthdate' => 'datetime',
        'metadata' => 'array',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var \App\PetOwner
     * @return Collection
     *
     */
    public function owners()
    {
        return $this->belongsToMany('App\Owner');
    }

    public function specie()
    {
        return $this->belongsTo('App\Specie');
    }
}
