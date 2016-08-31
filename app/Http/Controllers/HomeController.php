<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests;
use App\Restaurant;
use Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $role=Auth::user()->role;
        
        if($role->id==1){
                
                return redirect('admin/index');
            
                }
        elseif($role->id==3){


            return redirect('manager/index');
        }
        else
        {
            $hotels = Hotel::all();
            return view('home',compact('hotels'));
        }
    }

    public function show()
    {
        $foods = Restaurant::all();
        $user = Auth::user();
        return view('restaurent.show', compact('foods' , 'user' ));

    }

    public function order(Request $request)
    {    

        $this->validate($request, [
        'select' => 'required'       
        ]);

        $food = $request->input('select');

        $user = Auth::user();

        $user->restaurant()->sync($food);

        session()->flash('flash_message', 'your order has been placed successfully');
        
        return redirect('rose/food');
    }

     
}
