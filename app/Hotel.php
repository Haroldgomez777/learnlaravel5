<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name','user_id','file','location','description'];

  
  	public function roomtype()
    	{
    		return $this->hasMany('App\RoomType');
    	}
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
