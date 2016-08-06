<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ManagerController extends Controller
{
    public function __construct()
	{
		$this->middleware('manag');
	}

    public function index()
    {
    	return view('manager.home');
    }
}
