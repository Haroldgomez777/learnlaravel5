<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name','user_id','file'];

  
  	public function roomtype()
    	{
    		return $this->hasMany('App\RoomType');
    	}
}
