<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\createtag;
use App\User;
use App\Hotel;
use App\Tag;

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
     public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users');

    }

    public function deleteHotel($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

         return redirect('admin/hotels');

    }

    public function addTag()
    {

        $tags = Tag::all();

        return view('admin.tag', compact('tags'));

    }

    public function adTag(createtag $request)
    {

        $tag = Tag::create($request->all());

        session()->flash('flash_message', 'Tag is created');

        return redirect('admin/tag');
    }

    public function deleteTag($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect('admin/tag');
    }

}
