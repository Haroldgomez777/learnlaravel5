<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Reservation;
use App\RoomCalendar;
use App\Customer;
use App\ReservationNight;
use App\RoomType;
use Carbon\Carbon;

class ReservationController extends Controller
{
    	public function index()
		{
			
		}
		public function create()
		{
			$roomtype = RoomType::lists('name' , 'id');
			
			return view('reservations.create' , compact('roomtype'));	
		}

		public function store(Request $request)
		{
				$room_info  = $request['room_info'];
				$room = RoomType::find($room_info);

		        $start_dt =$request['start_dt'];
		        $end_dt= $request['end_dt'];

		        $name = $request['customer'];
		        $customer = new Customer;
		        $customer->first_name=$name;
		        $customer->last_name=$request['lastname'];
		        $customer->email=$request['email'];
		        $customer->save();

		        $reservation  = new Reservation;
		        $reservation->room=$room->name;
		        $reservation->total_price=$room->base_price;
        		$reservation->occupancy=$request['occupancy'];
		        $reservation->customer_id=$customer->id;
		        $reservation->checkin=$start_dt;
		        $reservation->checkout=$end_dt;

		        $reservation->save();


		       /**
		        $date=$start_dt;

		        while (strtotime($date) < strtotime($end_dt)) {

		            $room_calendar = RoomCalendar::where('day','=',$date)
		                ->where('room_type_id','=',$room['id'])->first();

		            $night = new ReservationNight;
		            $night->day=$date;

		            $night->rate=$room_calendar->rate;
		            $night->room_type_id=$room_info['id'];
		            $night->reservation_id=$reservation->id;

		            $room_calendar->availability--;
		            $room_calendar->reservations++;

		            $room_calendar->save();
		            $night->save();

		            $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));



		        }

		        $nights = $reservation->nights;
		        $customer = $reservation->customer;

				**/
		        
		        

		        return redirect('reserve');
		}

		public function show()
		{
			$reserved = Reservation::all();
			return view('reservations.show', compact('reserved'));
		}
}
