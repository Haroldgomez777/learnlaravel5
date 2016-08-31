<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	
	protected $fillable = ['food_name', 'price', ];
    
    public function Hotel()
    {
        return $this->hasOne('App\Hotel');
    }
}
