<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use App\Http\Requests\CreateReservationRequest;
use App\Reservation;
use App\ReservationNight;
use App\RoomCalendar;
use App\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    	public function index()
		{
			
		}
		public function create()
		{
			$roomtype = \DB::table('room_types')
					->join('room_calendars','room_types.id','=','room_calendars.room_type_id')
					->select('room_types.*')
					->where('room_calendars.availability','>',0)
					->lists('name','id');
			
			return view('reservations.create' , compact('roomtype'));	
		}

		public function store(CreateReservationRequest $request)
		{
				$room_info  = $request['room_info'];
				$room = RoomType::find($room_info);

		        $start_dt =$request['start_dt'];
		        $end_dt= $request['end_dt'];

		        $checkifexistsfirst = RoomCalendar::where('room_type_id','=',$room->id)->whereBetween('day',[$start_dt,$end_dt])->first();

		        $e = RoomCalendar::where('room_type_id','=',$room->id)->where('day','=',$end_dt)->firstOrFail();
		        


		       
		         if($checkifexistsfirst==null||$e==null)
		         {
		         	 return dd('error11');
		         }
		         else{
		        $count = RoomCalendar::where('day','>=',$start_dt)
		                	->where('day','<=',$end_dt)
			            ->where('room_type_id','=',$room->id)
			            ->where('availability','<=',0)->count();

		        if($count==0)
		        {
			        $customer = new Customer;
			        $customer->first_name=$request['customer'];
			        $customer->last_name=$request['lastname'];
			        $customer->email=$request['email'];
			        $customer->save();

			        $reservation  = new Reservation;
			        $reservation->room=$room->name;
	        		        $reservation->occupancy=$request['occupancy'];
	        		        $reservation->total_price=0;
			        $reservation->customer_id=$customer->id;
			        $reservation->checkin=$start_dt;
			        $reservation->checkout=$end_dt;

			        $reservation->save();

		        
		       
			        	$date=$start_dt;

			        	while ($date <= $end_dt) {

			            $room_calendar = RoomCalendar::where('day','=',$date)
			                ->where('room_type_id','=',$room['id'])->first();

			            $night = new ReservationNight;
			            $night->day=$date;

			            $night->rate=$room_calendar->rate;
			            $night->room_type_id=$room_info;
			            $night->reservation_id=$reservation->id;
			            $room_calendar->availability--;
			            $room_calendar->reservations++;
			            $reservation->total_price=$reservation->total_price+$room->base_price;

			            $room_calendar->save();
			            $night->save();
			            $reservation->save();
			            $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));

		        		}

		        }
		        else
		        {
		        	return dd('error');
		        }
		        
		        return dd($customer);
		    }
		}

		public function show()
		{
			$reserved = Reservation::all();
			return view('reservations.show', compact('reserved'));
		}

		public function lists()
		{
			$roomtypes = \DB::table('room_types')
					->join('room_calendars','room_types.id','=','room_calendars.room_type_id')
					->select('room_types.*')
					->where('room_calendars.availability','>',0)
					->lists('name','id');

			return view('reservations.list', compact('roomtypes'));
		}


		 

	      
}
