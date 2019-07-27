<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = "distrito";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numeroDistrito','numeroCanton','nombre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function canton() 
    {
        return $this->belongsTo('App\Canton');
    }
    
}
