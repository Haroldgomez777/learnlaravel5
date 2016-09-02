<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Staff;
use Illuminate\Http\Request;
use Auth;

class StaffController extends Controller
{
    public function index()
    {
    	$hotel = Auth::user()->hotel->id;
    	$staff = Staff::where('hotel_id','=',$hotel)->get();
    	return view('staff.index',compact('staff'));
    }

    public function create()
    {
    	return view('staff.create');
    }

    public function store(Request $request)
    {

    	$this->validate($request, [
        		'name' => 'required|alpha',
        		'phone' => 'required|numeric',
        		'address' => 'required',
        		'salary' => 'required|numeric',  
        		'position'=> 'required'
        	]);

    	$hotel = Auth::user()->hotel->id;

    	$staff = new Staff;

    	$staff->name = $request->name;
    	$staff->phone = $request->phone;
    	$staff->address = $request->address;
    	$staff->salary = $request->salary;
    	$staff->position =$request->position;
    	$staff->hotel_id = $hotel;

    	$staff->save();

    	return redirect()->back();
    }
}
