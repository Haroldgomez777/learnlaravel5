<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	
	protected $fillable = ['food_name', 'price', ];
    
    public function hotel()
    {
        return $this->hasOne('App\Hotel');
    }

    public function user()
    {
    	return $this->belongsToMany('App\User');
    }
}
