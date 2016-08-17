@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <!-- Navigation -->
    
    <!-- Header -->

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Hotel Owners Add your Hotel here</h2>
                    <p class="lead">This website let you manage your Hotels<a target="_blank" href="{{url('/manager/create')}}">add your Hotel</a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div>

                         
                                <a href="reserve" class="btn btn-light"><h3>Book Rooms</h3></a>
                    @if (Auth::guest())
                            <a href="{{ url('/login') }}" class="btn btn-light"><h3>Login</h3></a></li>
                            <a href="{{ url('/register') }}" class="btn btn-light"><h3>Register</h3></a></li>
                    @else
                            <a href="{{url('/logout')}}" class="btn btn-light" > <h3>Logout &nbsp;{{ Auth::user()->name }}</h3> </a>
                            <a href="{{url('/home')}}" class="btn btn-light" ><h3>Profile</h3></a>

                    @endif
</div>
    <!-- Callout -->

@stop
<!--
Route::get('/', function() {
    return view('welcome'); 
});

Route::get('roomtypes','RoomTypeController@index');
Route::get('roomtypes/create','RoomTypeController@create');
Route::post('roomtypes/create','RoomTypeController@store');

Route::get('roomcal','RoomCalenderController@index');
Route::post('roomcal/set','RoomCalenderController@create');


Route::get('reserve','ReservationController@create');
Route::post('reserve/create','ReservationController@store');
Route::get('reserve/list','ReservationController@show');
-->