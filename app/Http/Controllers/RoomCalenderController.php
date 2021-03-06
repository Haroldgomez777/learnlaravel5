<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateRoomCalenderRequest;
use App\RoomCalendar;
use App\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;


class RoomCalenderController extends Controller
{
    /**
		* Display a listing of the resource.
		*
		* @return Response
		*/

		 public function __construct()
		{
				$this->middleware('manag');
		}

		public function index()
		{
			$hotel = Auth::user()->hotel;
			if(!$hotel)
			{
				$roomtype = [];
				$roomcal = [];
				return view('roomcalender.index',compact('roomtype'));
			}
			$roomtype = RoomType::where('hotel_id','=',$hotel->id)->lists('name' , 'id');

			//$roomcal = RoomCalendar::where('hotel_id','=',$hotel->id)->get();
			return view('roomcalender.index',compact('roomtype'));
		}
		/**
		* Show the form for creating a new resource.
		*
		* @return Response
		*/
		public function create(CreateRoomCalenderRequest $request)
		{
			
			$this->setPriceInRangeForRoomType($request);
			session()->flash('flash_message','Room calendar created');
			return redirect('roomcal');
			
		}
		/**
		* Store a newly created resource in storage.
		*
		* @return Response
		*/
		public function show()
		{
			$hotel = Auth::user()->hotel;
			if(!$hotel)
			{
				//$roomtype = [];
				$roomcal = [];
				return view('roomcalender.index',compact('roomcal'));
			}
			//$roomcal = RoomCalendar::orderBy('day' , 'asc' )->get();
			//$roomtype = RoomType::where('hotel_id','=',$hotel->id)->lists('name' , 'id');
			$roomcal =RoomCalendar::where('hotel_id','=',$hotel->id)->get();
			return view('roomcalender.show',compact('roomcal'));
		}


public function setPriceInRangeForRoomType(Request $request)
    {
        
        $room_type = $request['room_type'];
        $base_room = RoomType::find($room_type);
        $price =  $base_room->base_price;
        $start_dt =  $request['start_dt'];
        $end_dt =  $request['end_dt'];
        $hotel = Auth::user()->hotel;
        $date = date ("Y-m-d",strtotime($start_dt));

        

        $i=0;

        while (strtotime($date) <= strtotime($end_dt)) {
            $room_day =  RoomCalendar::firstOrNew(['room_type_id' => $room_type, 'day'=>$date]);

            if(!$room_day->id){
                $room_day->availability = $base_room->base_availability;
            }
            $room_day->reservations=0;
            $room_day->rate = $price;
            $room_day->hotel_id = $hotel->id;
            $room_day->save();
            $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        return redirect('roomcal');
    }




    }

