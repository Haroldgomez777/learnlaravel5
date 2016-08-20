<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = ['name', 'short_name','max_occupancy','base_price','base_availability'];

    public function reservation(){

    	return $this->hasMany('App\Reservation');
    }
    public function customer(){

    	return $this->hasMany('App\Customer');
    }

}
