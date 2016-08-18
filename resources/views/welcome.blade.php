@extends('app')

@section('content')


    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="img/portfolio-4.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h2>Online Hotel Management</h2>
                <p>Hotel Booking Made Convenient</p> <p> you can book rooms from our list of Hotels </p>
                <p>Add reviews about the hotel you stayed it will help them improve on their services</p>
                <a class="btn btn-primary btn-lg" href="{{url('/register')}}">Sign up Now</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   Listen Hotel Owners! This is also an easy way to help you bussiness grow!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>How</h2>
                <p>You can add your hotels here and let your bussiness  go Online </p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Hotel Management</h2>
                <p>You can use the Managers dash board to manage your Customers</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>User Reviews</h2>
                <p>User's Reviews will make your hotel more famous</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
</div>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    <!-- /.container -->
@stop
    <!-- jQuery -->
   


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