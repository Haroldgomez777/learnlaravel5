<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Image;
use Auth;
use App\Http\Requests;
use App\Hotel;


class ManagerController extends Controller
{


    
    public function __construct()
	{
		$this->middleware('manag');
	}

    public function index()
    {
        $hotel =  Auth::user()->hotel;

        if($hotel)
        {
        return view('manager.home',compact('hotel'));
        }
        else
        {
            $hotel = new Hotel;
            $hotel->name = 'Add your Hotel';
            $hotel->file = '/uploads/11.jpg';
            $hotel->user_id=Auth::user()->id; 
            $hotel->save();
            return view('manager.home',compact('hotel'));
        }
    }

    public function create()
    {
    	
    	return view('manager.create');
    }

    public function store(Request $request)
    {
        $new = Auth::user()->hotel()->firstOrNew(['user_id'=>Auth::user()->id ]);
        $new->name = $request->name;
        $file = $request->file('img');

        if($file != ""){
                $ext = $file->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' .$ext;
                $destinationPath = 'uploads';
                $request->file('img')->move($destinationPath, $fileName);
                $new->file = 'uploads/'.$fileName;
                //$image->resize(120, 120);
                //$path = public_path('uploads/' . $fileName);
                //Image::make($file->getRealPath())->resize(120, 120)->save($path);
            }
        $new->save();
       
        return redirect('manager/create');
    
    } 

}
