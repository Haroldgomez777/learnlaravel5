@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="dss/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dss/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Wardrobe</a>
            </li>
            <li>
                <a href="/roomtypes" onclick=$("#menu-close").click();>Room Types</a>
            </li>
            <li>
                <a href="/reserve" onclick=$("#menu-close").click();>Reserve</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Online Hotel Management</h1>
            <h3>welcome to Hotel Management</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Hotel Owners Add your Hotel here</h2>
                    <p class="lead">This website let you manage your Hotels<a target="_blank" href="roomtypes/create">create room types</a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div>
                                <a href="roomtypes/create" >CREATE ROOM TYPES</a>
                         
                                <a href="reserve" class="btn btn-light">RESERVE</a>
                            
                     
                                <a href="reserve/list" class="btn btn-light">RESERVATIONS</a>
                           

                                <a href="roomtypes" class="btn btn-light">ROOMTYPES</a>
                                <a href="roomcal" class="btn btn-light">ROOMCALENDER</a>
                                <a href="roomcal/show" class="btn btn-light">View ROOMCALENDER</a>
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