<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'salary', 'position', 'hotel_id'];

    public function hotel()
    {
        return $this->hasOne('App\Hotel');
    }
}
