@extends('layouts.app')
@section('content')
<div class="service"id="service"  onload= "doMove()" >

<div class="row">
<img class="img img-responsive col-md-12" src="{{asset('/image/service1.jpg')}}" style="position:relative; ">
</div>

<div class="capture"id="capture" style="position:absolute; top:250px;left:240px;color:white; "><h1>Capturing The Main </h1>
<button class ="btn btn-lg btn-primary">Book now</button>
</div>
<!--SERVICES SECTION -->
<section id="services-section container">
            <div class="row">
                <div class="col-md-10 offset-1 col-sm-10 col-sm-offset-1 py-4" data-scrollreveal="enter top and move 100px, wait 0.5s">
                    <div class="text-center">
                        <h1><i class="fa fa-check small-icons bk-color-green"></i>Services</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                         Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.                        
                        </p>
                    </div>
                </div>
                <!-- / Heading div-->
                </div>
                <div class="row">
        
                    <div class="col-md-4 col-sm-6" data-scrollreveal="enter left and move 100px, wait 0.6s">
                        <div class="text-center"><a href="">
                            <i class="fa fa-bolt icon-round bk-color-red"></i>
                            <h4>Photography</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                         Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-scrollreveal="enter bottom and move 100px, wait 0.6s">
                        <div class="text-center"><a href="">
                            <i class="fa fa-comments icon-round bk-color-black"></i>
                            <h4>24x7 Support</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                         Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-scrollreveal="enter right and move 100px, wait 0.6s">
                        <div class="text-center"><a href="">
                            <i class="fa fa-desktop icon-round bk-color-light-blue"></i>
                            <h4>Awesome Display</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                         Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-scrollreveal="enter left and move 100px, wait 0.6s">
                        <div class="text-center"><a href="">
                            <i class="fa fa-flask icon-round bk-color-green"></i>
                            <h4>Tested Template</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                         Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-scrollreveal="enter bottom and move 100px, wait 0.6s">
                        <div class="text-center">
                            <i class="fa fa-pencil icon-round bk-color-blue"></i>
                            <h4>Say Yes To Customize</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                         Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-scrollreveal="enter right and move 100px, wait 0.6s">
                        <div class="text-center">
                            <i class="fa fa-thumbs-up icon-round bk-color-brown"></i>
                            <h4>Well Documented</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                         Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.
                            </p>
                        </div>
                    </div>
                </div>
                </section>
                <!-- ./ Content div-->
                </div>

    @endsection
    <script>
    
    

    
    
    </script>