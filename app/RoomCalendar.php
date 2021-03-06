<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCalendar extends Model
{
    protected $fillable = ['room_type_id', 'rate','day'];

    public function RoomType(){
        return $this->belongsTo('App\RoomType');
    }

}
