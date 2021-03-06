<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');

    }
    
    public function hotel()
    {
        return $this->hasOne('App\Hotel');
    }

    public function restaurant()
    {
        return $this->belongsToMany('App\Restaurant');
    }

    
}
