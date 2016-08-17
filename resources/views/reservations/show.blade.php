@extends('layouts.app')
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
			    @foreach ($reserved as $reserved)
			      <tr>
			        <td>{{ $reserved->customer->first_name }}</td>
			        <td>{{ $reserved->customer->email }}</td>
			        <td>{{ $reserved->checkin }}</td>
			        <td>{{ $reserved->checkout }}</td>
			        <td>{{ $reserved->total_price }}</td>
			        <td>{{ $reserved->room }}</td>
			      </tr>
			     @endforeach
			    </tbody>
			  </table>
			</div>
	</div>
	<a href="/">home</a>


@stop

