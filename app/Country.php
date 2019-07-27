<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre', 'iso3166a1',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'code', 'iso3166a2',
    ];
}
