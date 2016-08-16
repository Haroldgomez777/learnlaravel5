@extends('app')
@section('content')

<div class="jumbotron">
			<div class="container">
			  <h2>RoomCalender</h2>           
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>RoomType ID</th>
			        <th>Availability</th>
			        <th>reservations</th>
			        <th>rate </th>
			        <th>day</th>
			        <th>Room type Name</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    @foreach ($roomcal as $room)
			      <tr>
			        <td>{{$room->room_type_id  }}</td>
			        <td>{{$room->availability  }}</td>
			        <td>{{$room->reservations  }}</td>
			        <td>{{$room->rate  }}</td>
			        <td>{{$room->day  }}</td>
			        <td>{{$room->RoomType->name }}</td>
			      </tr>
			     @endforeach
			    </tbody>
			  </table>
			</div>
	</div>


@stop


