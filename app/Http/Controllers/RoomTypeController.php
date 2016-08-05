<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateRoomTypeRequest;

use App\Http\Controllers\Controller;
use App\RoomType;

class RoomTypeController extends Controller
{
    public function index()
    {
        $room_type = RoomType::all();
       
        return view('roomtype.index', compact('room_type'));
    }

    public function store(CreateRoomTypeRequest $request)
    {
        RoomType::create($request->all());

        return redirect('roomtypes/create');
    }

    public function create()
    {   

        return view('roomtype.create');
    }
}
