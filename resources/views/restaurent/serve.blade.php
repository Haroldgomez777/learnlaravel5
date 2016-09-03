@extends('manager.app')
@section('content')

@foreach($user as $user)

		@unless ($user->restaurant->isEmpty())
		<div class="panel-heading" id ="pac">
		@foreach ($user->restaurant as $eat)
		@if($eat->hotel_id==$hotel)
		<h3>{{$user->name}}</h3>
		<h5>Order</h5>
		</div>

		
			<li class="col-sm-offset-1">				
			<h5>{{ $eat->food_name }}</h5>		
			</li>
		
		@endif
		@endforeach
		@endunless
@endforeach

@endsection