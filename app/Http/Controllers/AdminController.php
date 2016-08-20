<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Hotel;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware('ad');
	}


    public function index()
    {

        return view('admin.home');
    }
    public function users()
    {
    	$users = User::paginate(15);

    	return view('admin.users', compact('users'));
    }

    public function hotels()
    {
           $hotels = Hotel::paginate(10);
           return view('admin.hotels', compact('hotels'));

    }
    public function makemanager($id)
    {
        $user = User::find($id);
        $user->role_id = 3;
        $user->save();

        return redirect('admin/users');

    }
     public function makeuser($id)
    {
        $user = User::find($id);
        $user->role_id = 2;
        $user->save();

        return redirect('admin/users');

    }

    public function deleteHotel($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

         return redirect('admin/hotels');

    }

    public function deleteuser()
    {
        
    }
}
