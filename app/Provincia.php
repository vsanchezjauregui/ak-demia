<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = "provincia";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numeroProvincia','nombre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function cantones() 
    {
        return $this->hasMany('App\Canton');
    }
}
