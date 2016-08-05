<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\RoomType;
use App\RoomCalendar;
use Carbon\Carbon;


class RoomCalenderController extends Controller
{
    /**
		* Display a listing of the resource.
		*
		* @return Response
		*/
		public function index()
		{
			
			$roomtype = RoomType::lists('name' , 'id');
			return view('roomcalender.index',compact('roomtype'));
		}
		/**
		* Show the form for creating a new resource.
		*
		* @return Response
		*/
		public function create(Request $request)
		{
			
			$this->setPriceInRangeForRoomType($request);
			
			return redirect('roomcal');
			
		}
		/**
		* Store a newly created resource in storage.
		*
		* @return Response
		*/
		public function store()
		{

		}


public function setPriceInRangeForRoomType(Request $request)
    {
        
        $room_type = $request['room_type'];
        $base_room = RoomType::find($room_type);
        $price =  $base_room->base_price;
        $start_dt =  $request['start_dt'];
        $end_dt =  $request['end_dt'];
        $date = date ("Y-m-d",strtotime($start_dt));

        

        $i=0;

        while (strtotime($date) <= strtotime($end_dt)) {
            $room_day =  RoomCalendar::firstOrNew(array('room_type_id' => $room_type, 'day'=>$date));

            if(!$room_day->id){
                $room_day->availability = $base_room->base_availability;
            }
            $room_day->reservations=1;
            $room_day->rate = $price;
            $room_day->save();
            $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        return response("Success updated ".$i." dates");
    }

}
