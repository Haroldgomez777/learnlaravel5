<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
            return view('home');
        }
    }
}
