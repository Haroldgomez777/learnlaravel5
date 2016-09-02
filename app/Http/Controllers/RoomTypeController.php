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
        $hotel = Auth::user()->hotel->id;
            if(!$hotel)
            {
                $room_type = [];
                $roomcal = [];
                return view('roomtype.index',compact('roomtype','roomcal'));
            }
        
        $room_type = RoomType::where('hotel_id','=',$hotel)->get();
        $roomcal = RoomCalendar::where('hotel_id','=',$hotel)->get();
       
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
