@extends('layouts.app')
@section('title', 'Student view')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<div class="content">
<h2 class="header" style="text-align:center; color:blue;">{!! $member->firstName !!} {!! $member->firstName !!}</h2>
<p> <strong>Status</strong>: {!! $member->stateCode ? 'Pending'
: 'Answered' !!}</p>
<p> <strong>Email</strong>  {!! $member->email !!} </p>
<p> <strong>Phone</strong>  {!! $member->phone !!} </p>
<p> <strong>Chosen Specialization</strong>  {!! $member->training !!} </p>
<p> <strong>Period of the Day Most comfortable</strong>  {!! $member->schedule !!} </p>
<p> <strong>State Date</strong>  {!! $member->start !!} </p>
<p> <strong>Ending Date</strong>  {!! $member->end !!} </p>

</div>
<a  href="{!! action('AdminController@edit', $member->id) !!}" class="btn btn-info">Edit</a>

<form method="post" action="{!! action('AdminController@destroy', $member->id) !!}" class="pull-right" style="position:relative; float:left; margin-right:20px;">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
        <div>
        <button type="submit" class="btn bk-color-red color-white ">Delete</button>
        </div>
        </div>
</form>
<div class="clearfix"></div>

</div>
</div>
@endsection

<style>
    .header{
        margin-top:40px;
        text-align:center; color:blue;
    }
</style>