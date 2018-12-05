<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Scripts -->
    <script src="{{asset('js/scrollReveal.js')}}" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" rel="stylesheet" type="text/css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="sr-only">Render Auth user: {{ Auth::user() }}</div>
        <nav class="navbar navbar-expand-md navbar-laravel"  role="navigation">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-home color-grey"></i>
                    {{ config('app.name', 'Big_time Photographer') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>

                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Photography<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link bk-color-darkblue color-green"href="{{ route('photography') }}"><i class="far fa-user" style="color:green;"></i>  Studio Short</a></li>
                                <li class="nav-item"><a class="nav-link bk-color-darkblue color-green"href="{{route('photography') }}"><i class="far fa-user" style="color:green;"></i>Event Short</a></li>
                                <li class="nav-item"><a class="nav-link bk-color-darkblue color-green"href="{{route('photography') }}"><i class="far fa-user" style="color:green;"></i>Modelling Short</a></li>
                                <li class="nav-item"><a class="nav-link bk-color-darkblue color-green"href="{{route('photography') }}"><i class="far fa-user" style="color:green;"></i>Photo Editing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('training') }}">Training</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('instrumentation') }}">Instrumentation</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('services') }}">Service</a></li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto navbar-right login">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link link-link"style="font-size:17px; padding-top:15px;" href="{{ route('login') }}"><i class="fa fa-user" style="color:#ede; padding-right:5px;"></i>  {{ __('Training') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-link color-white" style=" font-size:17px;margin-left:30px;padding-top:15px;" href="{{ route('registernysc') }}" ><i class="fa fa-briefcase " style="color:#ede; padding-right:5px;" ></i>{{ __('Our Service') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <ul><li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    <li><a class="dropdown-item"href="{{route('dashboard')}}" ><i class="fa fa-file"></i>Dashboard</a></li>
                                    <li><a class="dropdown-item"href="{{route('dashboard')}}"><i class="fa fa-user"></i>  profile</a></li>
                                    <li><a class="dropdown-item"href="{{route('dashboard')}}"><i class="fa fa-suitcase"></i>  Manage</a></li>
                                    <li><a class="dropdown-item"href="{{route('dashboard')}}"><i class="fa fa-suitcase"></i>Settings</a></li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <div class="foot">

    </div>
<footer  width="500px" height="400px">
<div class="container ">
<div class=" row">
  
  <div class="col-sm-12 col-lg-3 col-md-6 ">
    
    <h3>About</h3>
	
    
	<ul>        <li><a onclick="foota(1)" id="1" class="disabled"  href="javascript:void(0)">About Us</a></li>
                <li><a onclick="foota(2)" id="2" class="disabled"  href="javascript:void(0)">Vision</a></li>
                <li><a onclick="foota(3)" id="3" class="disabled"  href="javascript:void(0)">Mission</a></li>
				<li><a onclick="foota(4)" id="4" class="disabled" href="javascript:void(0)">Policy</a></li>
				<li><a onclick="foota(5)" id="5" class="disabled" href="javascript:void(0)">Contact Us</a></li>
			</ul>
  </div>
  
  <div class="col-sm-12 col-md-6 col-lg-3  ">
    <h3>Help & Support</h3>

			<ul>
				<li><a class="disabled" href="">Get Started</a></li>
				<li><a class="disabled" href="">FAQ</a></li>
				<li><a class="disabled" href="">Notes</a></li>
				<li><a class="disabled" href="">Learn</a></li>
				<li><a class="disabled" href="">Qualities of a Chorister</a></li>
				<li><a class="disabled" href="">Music</a></li>
			</ul>
  </div>

  <div class="col-sm-12  col-md-6 col-lg-3">
    
    <h3>Social</h3>
    <p> <a href="https://www.bootstrapcdn.com/">BootstrapCDN</a>.</p>

    <a class="btn btn-lg btn-Primary" href="">Events</a>
    <i class="glyphicon glyphicon-search" style="color:green;"></i>
    <i class="far fa-google" style="color:green;"></i>
  </div>
  
  
 
  <div class="col-sm-12  col-md-6 col-lg-3 ">
    

  <div id="about">About</div>
 <div id="vision">Vision</div>
 <div  id="mission">Mission</div>
 <div id="policy">Policy</div>
 <div id="contact">Contact</div>
  
  <div id="address">  <h3>Address</h3>
		
	<address><i class="fa fa-map-marker-alt"></i>
		 <strong>Big-Timez Photographifilm, Ltd.</strong><br>
		 Suite 34, Yiware Plaza, Hamaruwa way <br>
		 Jalingo, Taraba State<br>
		 <abbr title="Phone">P:</abbr> (+123) 456-7890
		</address>
		<address>
		 <strong></strong><br>
		<a href="mailto:#">mailto@somedomain.com</a>
    </address>
</div>


    </div>
	
	
	
</div>
</div>

</footer>


</body>

</html>
