@extends('manager.app')
@section('content')

<div class="panel-heading"><h1>Reservations</h1></div>
<hr/>
		<div class="jumbotron">
			<div class="container">
			  <h2>Reservations</h2>           
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Customer</th>
			        <th>email_id</th>
			        <th>check in</th>
			        <th>check out </th>
			        <th>Amount payable</th>
			        <th>Room type</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    @foreach ($reserved as $reserve)
			      <tr>
			        <td>{{ $reserve->customer->first_name }}</td>
			        <td>{{ $reserve->customer->email }}</td>
			        <td>{{ $reserve->checkin }}</td>
			        <td>{{ $reserve->checkout }}</td>
			        <td>{{ $reserve->total_price }}</td>
			        <td>{{ $reserve->room }}</td>
			      </tr>
			     @endforeach
			    </tbody>
			  </table>
			</div>
	</div>



@stop

