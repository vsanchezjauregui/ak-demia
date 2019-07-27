<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Canton extends Model
{
    protected $table = "canton";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numeroCanton','numeroProvincia','nombre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function provincia() 
    {
        return $this->belongsTo('App\Provincia');
    }
    
    public function distritos() 
    {
        return $this->hasMany('App\Distrito');
    }
    
    public static function cantones($prvincia)
    {
        //return $provincia;
        return Canton::where('numeroProvincia', '=', $prvincia)->get();
    }
}
