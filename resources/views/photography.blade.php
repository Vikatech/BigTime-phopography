@extends('layouts.app')
@section('content')

<link href="{{ asset('css/navigation.css') }}" rel="stylesheet">

<div class="container-">
    
    <nav class="navbar navbar-expand-md">
            <div class="container">
            <h1 class="color-darkblue"><b>PHOTOGRAPHY |</b></h1>
                
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">SAED</a></li>

                        
                        <li class="nav-item"><a class="nav-link"href="{{ route('video') }}">STUDIO WORK</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('training') }}"></i>EVENT SHOTS</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('training') }}">MODELLING </a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('training') }}">PHOTO EDITING </a></li>
                        
                    </ul>
            </div>
    </nav>

</div>
<div class="container-fluid">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header teamdetail">Photography
                <a align="center" href="javascript:void(0)" onclick="toggle_visibility('team1'); toggle_plus('team1Plus');">
                More Details [<span id="team4Plus" class="showplus"></span>]</a>
                </div>

                <div class="card-body">
                    <div id="team1" class="teamtxt container-fluid">
                    <div class="row">
                        <img id="res" class="col-sm-8 col-md- img-responsive" src="{{asset('/image/service1.jpg')}}" width="500" height="300" >
                        <div class="col-sm-4 col-md-4">
                            <p>Yoo are invite to visit our studio to have one of the best studio experience of s life time. We also offer </p>
                            <p class="discount"> 20%</p>Discount<strike>Excess</strike>
                            <button class="btn btn-success py-3 px-3 rounded-border"  href="{{route('registernysc')}}">Book for your studio shot</button>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Event Shot 
                <a align="center" href="javascript:void(0)" onclick="toggle_visibility('team2'); toggle_plus('team2Plus');">
                More Details [<span id="team4Plus" class="showplus"></span>]</a>
                </div>

                <div class="card-body">
                <div id="team2" class="teamtxt container-fluid">
                    <div class="row">
                        <img id="res" class="col-sm-8 col-md-7 img-responsive" src="{{asset('/image/mariage.jpg')}}" width="500" height="500" >
                        <div class="col-sm-4 col-md-4">
                            <p>Yoo are invite to visit our studio to have one of the best studio experience of s life time. We also offer </p>
                            <p class="discount"> 20%</p><strike>Excess</strike>

                            <div class="col-md-12 py-4 px-4">
                            <ol >
                                <li>Pre-Wedding Shot</li>
                                <li>Wedding Coverage</li>
                                <li>Naming ceremony</li>
                                <li>Birthday celebration</li>
                                <li>Graduation Ceremony</li>
                                <li>Anniversaries and Many more</li>
                            <ol>
                            </div>
                            <button class="btn btn-success py-3 px-3 rounded-border" href="{{route('registernysc')}}">Book for your studio shot</button>
                            
                         </div>
                        </div>
                    </div>   

                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Modelling
                <a align="center" href="javascript:void(0)" onclick="toggle_visibility('team3'); toggle_plus('team3Plus');">
                More Details [<span id="team4Plus" class="showplus"></span>]</a>
                </div>

                <div class="card-body">
                <div id="team3" class="teamtxt container-fluid">
                    <div class="row">
                        <img id="res" class="col-sm-8 col-md-7 img-responsive" src="{{asset('/image/model.jpg')}}"  height="500" >
                        <div class="col-sm-4 col-md-5">
                            <p>Your talent and your career as a model is our priority and as such we take our 
                            time and resources to bring out the best in you </p>
                            <p class="discount"> Your career as a Model</p><b class="text-lg">20% of</b>
                            <button class="btn btn-success py-3 px-3 rounded-border" href="{{route('registernysc')}}">Sign up for this service</button>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Studio Work
                <a align="center" href="javascript:void(0)" onclick="toggle_visibility('team4'); toggle_plus('team4Plus');">
                More Details [<span id="team4Plus" class="showplus"></span>]</a>
                </div>

                <div class="card-body">
                <div id="team4" class="teamtxt container-fluid">
                    <div class="row">
                        <img id="res" class="col-sm-8 col-md-8 img-responsive" src="{{asset('/image/studio.jpg')}}" width="500" height="300" >
                        <div class="col-sm-4 col-md-4">
                            <p>Visit our studio at <i class="color-blue">Shop 23 Yiware Plaza Opposite,NNPC filling station,Jalingo, Taraba State</i>, 
                            to have an experience in one of thebest Photography studio accross the Nation  </p>
                            <p class="discount"> Studio work (Landscape)</p>Discount<strike>Excess</strike>
                            <button class="btn btn-success py-3 px-3 rounded-border" src="{{route('registernysc')}}">Book for your studio shot</button>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">Gallery</div>

                <div class="card-body">
                <img id="res" class="col-sm-12 img-responsive mySlides" src="{{asset('/image/big1.svg')}}" width="500" height="300" >
                <img id="res" class="col-sm-12 img-responsive mySlides" src="{{asset('/image/IMG_01.jpg')}}" width="500" height="300" >
                <img id="res" class="col-sm-12 img-responsive mySlides" src="{{asset('/image/big2.svg')}}" width="500" height="300" >
               
<
                   <button class="btn btn-primary" href="{{ route('photography') }}">Train With Us</button>
                </div>
            </div>
    </div>
        
    

    </div>
</div>
@endsection

