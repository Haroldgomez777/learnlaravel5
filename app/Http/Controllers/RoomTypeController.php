<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateRoomTypeRequest;

use App\Http\Controllers\Controller;
use App\RoomType;
use App\RoomCalendar;
use Auth;

class RoomTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('manag');
    }
    
    public function index()
    {
        $room_type = RoomType::all();
        $roomcal = RoomCalendar::all();
       
        return view('roomtype.index', compact('room_type' , 'roomcal'));
    }

    public function store(CreateRoomTypeRequest $request)
    {
        $hotel = Auth::user()->hotel;
        $hotel->roomtype()->create($request->all());
        session()->flash('flash_message','Room Type created');
        return redirect('roomtypes/create');
    }

    public function create()
    {   

        return view('roomtype.create');
    }
}
