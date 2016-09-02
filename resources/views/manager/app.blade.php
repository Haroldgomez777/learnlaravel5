<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> 

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/cdss/bootstrap.min.css" rel="stylesheet">
    <link href="/cdss/simple-sidebar.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        #dark{

            background-color:  #B0B0B0;
        }
        .fa-btn {
            margin-right: 6px;
        }
        #app-layout{
                background-color:  #B0B0B0;
        }
       .panel-body{
            background-color:  #B0B0B0;
        }
        #pac{
            background-color:  #B0B0B0;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container" >
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
            <a class="navbar-brand" href="/">
                    <span class="glyphicon glyphicon-th-large"></span>
                </a>
            </div>


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                @if (Auth::guest())
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>
                 <ul class="nav navbar-nav">
                    <li><a href="{{ url('/articles') }}">Reviews</a></li>
                </ul>
                 <ul class="nav navbar-nav">
                    <li><a href="{{ url('/articles/create') }}">Write Review</a></li>
                </ul>
                @elseif(Auth::user()->role->id=='1')
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/articles/create') }}">Admin Actions</a></li>
                </ul>
                @elseif(Auth::user()->role->id=='2')
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/articles/create') }}">Write Review</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/reserve') }}">Book Room</a></li>
                </ul>
                @elseif(Auth::user()->role->id=='3')

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/manager/index') }}">Profile</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="#menu-toggle" id="menu-toggle">Menu</a></li>
                </ul>
                
                
                @endif
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="{{ url('reserve/list') }}">Reservations</a>
                </li>
                <li>
                    <a href="{{ url('/roomtypes/create') }}">Add Roomtype</a>
                </li>
                <li>
                    <a href="{{ url('/roomcal') }}">Edit Rooms</a>
                </li>
                <li>
                    <a href="{{ url('/roomcal/show') }}">Avilable Rooms</a>
                </li>
                <li>
                    <a href="{{ url('/manager/create') }}">Edit Hotel Details</a>
                </li>
                <li>
                    <a href="{{ url('/rose/list') }}">Restaurent</a>
                </li>
                <li>
                    <a href="{{ url('/rose/serve') }}">Orders</a>
                </li>
                <li>
                    <a href="{{ url('/staff/list') }}">Staff</a>
                </li>
            </ul>
        </div>


<div class="jumbotron" id="dark">
    @include('partials.form-status')
    @yield('content')
</div>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
        <script src="/js/all.js"></script>
        <script src="/js/jquery.js"></script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);

        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
        @yield('footer')
</body>
</html>
