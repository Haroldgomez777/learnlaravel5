@extends('layouts.app')

@section('content')
@if ($first == 'jofd')
	<h1>dsff</h1>
@else
	<h1>Elsdf</h1>
@endif

	<h1>About me:{{ $first }} {{ $last }}</h1>
	<p>hello this is my first app in laravel</p>
@stop	
