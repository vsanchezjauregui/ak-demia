<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = "faculties";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'faculty_name', 'faculty_description', 'id_teacher',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
    
    public function careers()
    {
        return $this->hasMany('App\Career');
    }
    
    public function scopeSearch($query, $name)
    {
        return $query->where('faculty_name', 'LIKE', '%'.$name.'%');
    }
}
