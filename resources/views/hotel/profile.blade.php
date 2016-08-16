@extends('app')
@section('content')
<h1>Hotel Profile</h1>
@foreach($hotels as $hotel)
<p>{{ $hotel->name }}</p>
@endforeach
@stop