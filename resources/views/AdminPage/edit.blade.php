@extends('layouts.app')
@section('title', 'Edit a data')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<form class="form-horizontal" method="post">
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<fieldset>
<legend>Edit Student Data</legend>

            <div class="form-group">
            <label for="title" class="col-lg-2 control-label">LastName</label>
            <div class="col-lg-10">
            <input type="text" class="form-control" id="title" name="lastName" value="{!! $member->lastName !!}">
            </div>
            </div>

            
            <div class="form-group">
            <label for="title" class="col-lg-2 control-label">FirstName</label>
            <div class="col-lg-10">
            <input type="text" class="form-control" id="title" name="firstName" value="{!! $member->firstName !!}">
            </div>
            </div>

            <div class="form-group">
            <label for="title" class="col-lg-2 control-label">State code</label>
            <div class="col-lg-10">
            <input type="text" class="form-control" id="title" name="stateCode" value="{!! $member->stateCode !!}">
            </div>
            </div>

        <div class="form-group">
        <label for="title" class="col-lg-2 control-label">Schedule</label>
        <div class="col-lg-10">
        <input type="text" class="form-control" id="title" name="title" value="{!! $member->Schedule !!}">
        </div>
        </div>

<div class="form-group">
<label>
<input type="checkbox" name="status" {!! $member->status?"":"checked"!!} > Close this ticket?
</label>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
@endsection