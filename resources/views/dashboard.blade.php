@extends('layouts.app')

@section('content')

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" rel="stylesheet" type="text/css">
<script src="{{ asset('js/custom.js') }}" defer></script>

<div class="container-fluid" onresize="shrink()" onload="shrink()">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 dashboard-main">
                        <p>You are logged in!</p>
                            

                        <!--begin dash content of-->
                         <div class="Data-information">
                              <div class="row">
                <div class="col-md-3 col-sm-3 box-shadowing" style="height:300px;">
                    <form action="" method="post" enctype="multipart/form-data" action="{{route('imag')}}">
                    @csrf
                        <div class="passport">
                            <img src="">    
                            <input id="us" type="hidden" value="{{Auth::user()->id}}" class="form-control padding-left" name="user_id">

                            <i class="fa fa-user icon-round lg-icons" style="background:#435;" src="/image/image.jpg" ></i><p> 
                            <input type="file" name="file" id="fileToUpload" value="Choose file">
                            <input type="submit" href="" value="Upload">            
                        </div>
                    </form>
                        <div class="col-md-12 col-sm-0 col-xs-0 dashboard-side"id="dside">

                        <ul class="navbar-nav mr-auto side-nav">
                        
                        <li class="nav-item"><a class="nav-link"href="javascript:void(0)" onclick="reducedash('dash1')"><i class="fa fa-file-alt " style="color:#ddd;"></i>     Profile</a></li>
                        <li class="nav-item"><a class="nav-link"href="javascript:void(0)"onclick="reducedash('dash2')"><i class="fa fa-cogs " style="color:#ddd;"></i>      Setting</a></li>
                        <li class="nav-item"><a class="nav-link"href="javascript:void(0)" onclick="reducedash('dash3')"><i class="fa fa-suitcase " style="color:#ddd;"></i>     Training</a></li>
                        <li class="nav-item"><a class="nav-link"href="javascript:void(0)"onclick="reducedash('dash4')"><i class="fa fa-fire " style="color:#ddd;"></i>      Services</a></li>
                        <li class="nav-item"><a class="nav-link"href="javascript:void(0)"  onclick="reducedash('id')"><i class="fa fa-lock" style="color:#ddd;"></i>        Logout</a></l>
                        
                    </ul>

                        </div>

                             </div>

                        <!--end of side-->


                     <div class="col-md-9 col-sm-9">

                                    <div class="content-dash box-shadowing" id="dash1">
                                        @include('dashboard.registerform')
                                        
                                    </div>

                                    
                                    <div class="content-dash box-shadowing" id="dash2">
                                        @include('dashboard.datapage')
                                        
                                    </div>

                                    <div class="content-dash box-shadowing" id="dash3">
                                        @include('dashboard.timetable')
                                        
                                    </div>

                                    <div class="content-dash box-shadowing" id="dash4">
                                        @include('dashboard.certification')
                                        
                                    </div>

                                </div>
                                <!--end of main-->

                            </div>
                        </div>
<!--end of dash content-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection