<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RestaurantRequest;
use App\Restaurant;
use App\User;
use Auth;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function __construct()
        {
                $this->middleware('manag');
        }
        
    public function index()
    {
            $hotel = Auth::user()->hotel->id;
        $foods = Restaurant::where('hotel_id','=', $hotel)->get();

        return view('restaurent.index', compact('foods') );
    } 

    public function create(RestaurantRequest $request)
    {
            $hotel = Auth::user()->hotel->id;
    
            $food =new Restaurant;

            $food->food_name = $request->food_name;
            $food->price = $request->price;
            $food->hotel_id = $hotel;

            $food->save();

        return redirect('rose/list');
    } 

    
     public function serve()
    {
            $hotel = Auth::user()->hotel->id;
            $user=User::all();

        return view('restaurent.serve',compact('user','hotel'));
    }
}


