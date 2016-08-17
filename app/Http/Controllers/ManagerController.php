<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Image;
use Auth;
use App\Http\Requests;
use App\Hotels;


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
                $image = Image::make($request->file('img'));
                //$image->resize(120, 120);
                $new->file = '/uploads/' . $fileName;
                $image->save(base_path().'/public/uploads/'. $fileName);
                //$path = public_path('uploads/' . $fileName);
                //Image::make($file->getRealPath())->resize(120, 120)->save($path);
            }
        $new->save();
       
        return redirect('manager/create');
    
    } 
}
