@extends('layouts.app')
@section('content')


<link href="{{ asset('css/navigation.css') }}" rel="stylesheet">

<div class="container-">
    
    <nav class="navbar navbar-expand-md">
            <div class="container">
            <h1 class="color-darkblue">TRAINING |</h1>
                
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">SAED</a></li>

                        
                        <li class="nav-item"><a class="nav-link"href="{{ route('video') }}">Photography</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('training') }}">Video coverage</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('training') }}">Photo editing</a></li>
                        
                    </ul>
            </div>
    </nav>

</div>
<div class="container-fluid">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="col-md-12 col-lg-12">
            <div class="card ">
                <div class="card-header"><b>Photography training</b></div>

                <div class="card-body training1">
                <div class="container-fluid">
                <div class="row">
                 
                        <img class="col-sm-8 col-md-6 col-lg-6 img-responsive" src="{{asset('/image/photography/img.JPEG')}}" width="500" height="300" >
                    
                        <div class="col-sm-4 col-md-6 col-lg-6">
                            <h3></h3>
                       <p> We have made it a point of duty to teach and impact others the art of Photography
                           and film making. The effect of photography and media coverage can not be neglected in these
                         <a href="">social media<a/> era.
                       </p>
                       <a class="btn btn-success btn-lg" href="{{route('login')}}">Enroll now</a>
                         </div>
                        </div>
                        </div>   
                </div>
            </div>
        </div>
    
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header "><b>National Skills Acquisition Development</b> </div>

                <div class="card-body training1">

                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-sm-4 col-md-6 col-lg-6">
                        <p> A good number of graduates from various fields of profession have undergone the traing with the Big-time photographhy,where they learnt the art of photography,video making, media coverage in General
                                <a href="">social media<a/> era.
                            </p>
                            <a class="btn btn-success btn-lg" href="{{route('login')}}">Enroll now</a>
                            </div>
                           
                                <h3></h3>
                                <img class=" padzero  box-shad col-sm-8 col-md-6 col-lg-6 img-responsive img-circle" src="{{asset('/image/training/training4.JPG')}}" width="500" height="300" >
                            
                                
                         </div>
                     </div> 
                   
                </div>
            </div>
        </div>


        <div class="col-md-12 col-lg-12">
            <div class="card ">
                <div class="card-header"><b>Film-Making and Videography</b></div>

                <div class="card-body training1">
                <div class="container-fluid">
                <div class="row">
                 
                        <img class="col-sm-8 col-md-6 col-lg-6 img-responsive" src="{{asset('/image/photography/video.jpg')}}" width="500" height="300" >
                    
                        <div class="col-sm-4 col-md-6 col-lg-6">
                            <h3></h3>
                       <p> We have made it a point of duty to teach and impact others the art of Photography
                           and film making. The effect of photography and media coverage can not be neglected in these
                         <a href="">social media<a/> era.
                       </p>
                       <a class="btn btn-success btn-lg" href="{{route('login')}}">Enroll now</a>
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
                <img class="col-sm-12 img-responsive" src="{{asset('/image/image2.jpg')}}" width="500" height="300" >
                   <div class="small">

                        <img class="col-sm-12 img-responsive img-small" src="{{asset('/image/training/training4.jpg')}}"  >
                        <img class="col-sm-12 img-responsive img-small" src="{{asset('/image/image2.jpg')}}" >
                        <img class="col-sm-12 img-responsive img-small" src="{{asset('/image/image1.jpg')}}"  >
                        <img class="col-sm-12 img-responsive img-small" src="{{asset('/image/IMG_011.jpg')}}"  >
                        <img class="col-sm-12 img-responsive img-small" src="{{asset('/image/training/training2.jpg')}}"  >
                        <img class="col-sm-12 img-responsive img-small" src="{{asset('/image/training/training1.jpg')}}"  >

                   </div>
                </div>
            </div>
    </div>
        
    

    </div>
</div>


    


@endsection