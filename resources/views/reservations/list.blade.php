@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<article>
			<h3>Reservation ID: {{ $reservation->id }}</h3>
			<h3>Total Price : {{ $reservation->total_price }}</h3>
			 <h3>Customer ID :{{ $reservation->customer_id }}</h3>
			 <h3>Checkin : {{ $reservation->checkin }}</h3>
			 <h3>CheckOut : {{ $reservation->checkout }}</h3>
			 <h3>RoomType ID : {{ $reservation->room_type_id }}</h3>
			 <h3>Created at : {{ $reservation->created_at }}</h3>
			</article>

		</div>
	</div>
</div>
@stop