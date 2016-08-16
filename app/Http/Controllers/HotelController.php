<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hotel;

class HotelController extends Controller
{
    public function index()
    {
    	$hotels = Hotel::all();

    	return view('hotel.profile',compact('hotels'));
    }
}
