@extends('manager.app')
@section('content')


	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
					  <div class="panel-heading" id ="pac"><h3>RoomCalender</h3></div>
					  <div class="panel-body">          
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
			</div>
		</div>
	</div>


@stop


