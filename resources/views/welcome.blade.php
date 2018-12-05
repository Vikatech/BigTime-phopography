@extends('layouts.app')
@section('content')

        <!-- Styles -->
    <body onload="loader()" style="margin:0;" >
    <div id="loader"></div>
  <div class="" style="margin:0;"style="display:none;" id="myDiv">
            <div class = "container-fluid col-md-12 col-sm-12 col-xs-12 slider">
                <div class="row">

                <div class ="image-side">
                    <b><h1>Light Is Beautiful When You Talk Photography</h1></b>
                    <p> We bring the best form of photography and <br>Media Event Services to your<br> Door Step</p></hr>
                    <button class=" btn btn-success btn-lg" href=" {{ route('photography') }}">Get Started</button>
                    <button class=" btn btn-success btn-lg get-trained" href=" {{ route('training') }}">Get Trained<i class="fa fa-arrow"></i></button>
                </div>
            </div>
            </div>

    <div class="wraper">
        <div class="container px-4 py-4 product">
        <h2>Our Product</h2>
            <div class="row">
            
                <div class ="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="subtop"><h4>Photography</h4>
                    <img class=" img img-responsive img-circle" src="{{asset('/image/photography/image8.jpg')}}" width="200" height="200" >
                    <p>The big-time Enterprise is a speciaslist in event and media coverage in photography.</p>
                    </div>

                </div>


                <div class ="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="subtop"><h4>Videography</h4>
                    <img class="img-responsive  img-circle" src="{{asset('/image/IMG_011111.jpg')}}" width="230" height="230" >    
                    <p>The big-time Enterprise is a speciaslist in event and media coverage in photography.
                    thgethehehhebehfbhf bhrbfurbyuhrbujb rybyur</p>
                    </div>
                </div>


                <div class ="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="subtop"><h4>Services</h4>
                 <img class=" img img-responsive img-circle" src="{{asset('/image/image1.jpg')}}" width="270" height="270" >
                 <p>Our Services includes event coverage, studio shots, home services,
                 video coverage, training on both video and pgotography, pictures and video editing. we deal with
                 some of the most advanced studio and outdoor instruments in the country.</p>
                
                </div>
                </div>
            </div>

            </div>
        </div>
            <div class = " training">
            <div class="container-fluid">
                <div class="row">
                

                <div class =" col-md-10 col-md-offset-1 training-side">
                    <b><h1>Train With Us</h1></b>
                    </div>
                    <div class=" col-md-6 col-lg-6 col-sm-12 col-xs-12 back"><h3>Skill Acquisition Entrepreneurship Development <h3><p> The National Skills Acquisition and Enterpreneurship Development popularly known as SAED
                    is A Federal Government Initialtive to ensure that young graduates learned valuable skills that will enhance the chances of getting job in the Labour market
                    Or Better still become Employers of Laours themsselves       
                </p></hr>
                    <button class=" btn btn-success btn-lg" href=" {{ route('photography') }}">Get Started</button>
                    </div>
                    <div class=" col-md-6 col-lg-6 col-sm-12 col-xs-12"><h3>Graduates and None Graduates</h3><p>It is true that some youth corpers probably missed this opportunity to be self employed through the SAED, we have therefore decided to the opportunty 
                        available to all none serving corpers either as greaduate none graduate or even none-educated.</p></hr>
                    <button class=" btn btn-success btn-lg get-trained" href=" {{ route('training') }}">Get Trained<i class="far fa-arrow"></i></button>
                    </div>
                    </div>
            </div>
            </div>
        </div>

        

        </body>
@endsection