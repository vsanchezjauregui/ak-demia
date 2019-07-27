<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Career extends Model
{
    protected $table = "careers";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'career_name', 'career_description', 'id_faculty', 'career_level', 'career_modality', 'career_duration', 'career_cheif', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
    
    public function scopeSearch($query, $name)
    {
        return $query->where('career_name', 'LIKE', '%'.$name.'%');
    }
}
