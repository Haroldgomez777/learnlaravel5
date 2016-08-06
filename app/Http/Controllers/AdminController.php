<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware('ad');
	}


    public function index()
    {
    	$users = User::paginate(15);

    	return view('admin.home', compact('users'));
    }

    public function create()
    {
    	
    }
}
