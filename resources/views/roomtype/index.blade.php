@extends('app')
@section('content')

<div class="panel-heading"><h1>RoomTypes</h1></div>
<hr/>
<div class="panel-body"></div>	
	<body>
	<div class="jumbotron">
			<div class="container">
			  <h2>Room Types</h2>           
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Roomtype</th>
			        <th>Shortname</th>
			        <th>Maximum Capacity</th>
			        <th>price</th>
			        <th>Available Rooms </th>
			      </tr>
			    </thead>
			    <tbody>
			    @foreach ($room_type as $room_type)
			      <tr>
			        <td>{{ $room_type->name }}</td>
			        <td>{{ $room_type->short_name }}</td>
			        <td>{{ $room_type->max_occupancy }}</td>
			        <td>{{ $room_type->base_price }}</td>
			        <td>{{ $room_type->base_availability }}</td>
			      </tr>
			     @endforeach
			    </tbody>
			  </table>
			</div>
	</div>
	</body>
</html>
	@foreach ($roomcal as $cal)
	{{$cal->id}}
	@endforeach
	
	</div>
	<a href="/">home</a>


@stop