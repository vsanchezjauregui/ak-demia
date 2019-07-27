<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teachers";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'last_name', 'email', 'id_num', 'gender', 'cell_phone', 'home_phone', 'work_phone', 'nationality', 'degree', 'province', 'canton', 'district', 'address', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    
    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE', '%'.$name.'%');
    }
}
