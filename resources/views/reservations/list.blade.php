@extends('layouts.app')

@section('content')

	@foreach ($roomtypes as $roomtype)
	{{$roomtype->name }}
	{{$roomtype->RoomCalendar->date }}

	@endforeach

@stop