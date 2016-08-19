<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['total_price','room','occupancy','checkin','checkout','name'];

    public function Customer(){
        return $this->belongsTo('App\Customer');
    }
}
