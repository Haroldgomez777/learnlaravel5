@extends('app')
@section('content')
<h1>RoomCalender</h1>
	{!! Form::open(array('url' => 'roomcal/set')) !!}
    	@include('roomcalender.form', ['submitButtonText' => 'Create Calender'])
	{!! Form::close() !!}
@stop