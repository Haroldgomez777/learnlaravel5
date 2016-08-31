<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RestaurantRequest;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

	public function __construct()
		{
				$this->middleware('manag');
		}
		
    public function index()
    {
    	$foods = Restaurant::all();

    	return view('restaurent.index', compact('foods') );
    } 

    public function create(RestaurantRequest $request)
    {
	
	Restaurant::create($request->all());

    	return redirect('rose/list');
    } 

    

    public function show()
    {

    }

     public function update()
    {
    	
    }
}
