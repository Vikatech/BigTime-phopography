@extends('layouts.app')
@section('title', 'View member')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<h2> Member </h2>
</div>
@if ($member->isEmpty())
<p> There is no member.</p>
@else
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>TR-Number</th>
        </tr>
    </thead>
<tbody>
@foreach($member as $members)
 <tr>
            <td>{!! $members->id !!} </td>
            <td><a href="{!! action('AdminController@show', $members->id) !!}">{!! $members->firstName !!}  {!!$members->lastName!!}</a></td>
            <td>{!! $members->email  !!}</td>
            <td>{!! $members->stateCode  !!}</td>
    </tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>

@endsection;