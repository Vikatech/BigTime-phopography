@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row ">
        <div class="col-md-8 col-lg-8">
            <div class="card nysc" style="margin-top:40px;">
                <div class="card-header" style="color:#fed; font-size:20px; background-color:#234; border:0px;">BOOK YOUR SERVICE</div>

                <div class="nysc-body card-body" style="padding-top:40px;">

                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <fieldset>
                        
                        <div class="form-group row">
                            <label for="name" class="sr-only col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Name" class="input-group form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right sr-only">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email"class="input-group form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Shot" class="col-md-4 col-form-label text-md-right sr-only">{{ __('Short') }}</label>
                            <div class="col-md-12">
                                <select class="form-control" placeholder="select type of shot">
                                    <option>Wedding<option>
                                    <option>Naming ceremony<option>
                                    <option>Anniversary<option>
                                    <option>studio<option>
                                    <option>Modell shot<option>
                                    <option>Birthday<option>
                                    <option>others-Please describe below<option>

                                    
                                </select>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 sr-only col-form-label text-md-right">{{ __(' Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" placeholder="Location"type="text" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 sr-only col-form-label text-md-right">{{ __(' Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" placeholder="What date is these event"type="text" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 sr-only col-form-label text-md-right">{{ __(' Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" placeholder="password"type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button  type="submit" class="btn btn-primary">
                                    {{ __('Book a Date') }}
                                </button>
                            </div>
                        </div>
                        </fieldset>
                    </form>

                    <div>
            <p> Already have an account. Please <a class="bt btn-success btn-sm">login<a> with yoiur account

        </div>
                   
                </div>
            </div>
        </div>


        

    <div class="col-md-4 col-lg-4">
            <div class="card" style="margin-top:40px;">
                <div class="card-header">Book For Your Services</div>

                <div class="card-body">
                   <ol>
                       <li><a class="btn ">Photography Training</a></li>
                       <li><a class="btn ">photo Shoots</a></li>
                       <li><a class="btn ">Event Coverage</a></li>
                       <li><a class="btn ">Instrumentation</a></li>
                       <li><a class="btn ">Film Making</a></li>
                       <li><a class="btn">Photography Training</a></li>
                    </ol>
                    <p>Related Topics</p>

                    <ul class="nav nav-pills  ">
                       <li><a class="btn btn-default ">Home <span class="badge">3</span>
</a></li>
                       <li><a class="btn btn-default" data-toggle="tooltip" title="Example tooltip" data-placement="top" title="Tooltip on right" >About</a></li>
                       <li><a data-toggle="popover" data-content="pop over menu" data-container="body" title="Example tooltip" data-placement="top" title="popover on right" class="btn btn-default">Member</a></li>
                       <li><a class="btn btn-default">FAQ</a></li>
                       <li><a class="btn btn-default">Contact</a></li>
</ul>

                </div>
            </div>
        </div>



    </div>

        </div>
@endsection
<script>
 $(function () { $("[data-toggle='tooltip']").tooltip(); });

>$(function ()
 { $("[data-toggle='popover']").popover();
</script>