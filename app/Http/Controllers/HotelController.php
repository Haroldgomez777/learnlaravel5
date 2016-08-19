<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hotel;

class HotelController extends Controller
{
    public function index()
    {
    	$hotel =  Auth::user()->hotel;

    	return view('manager.home',compact('hotel'));
    }
}
