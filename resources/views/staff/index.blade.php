@extends('manager.app')

@section('content')

<div class="panel-heading"><h1>Staff details</h1></div>

<div class="panel-body"></div>	
	<body>
	<div class="jumbotron">
			<div class="container">
			  <h2>Staff Details</h2>           
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Name</th>
			        <th>Address</th>
			        <th>Phone Number</th>
			        <th>Salary</th>
			        <th>Position</th>
			      </tr>
			    </thead>
			    <tbody>
			    @foreach ($staff as $staff)
			      <tr>
			        <td>{{ $staff->name }}</td>
			        <td>{!! nl2br(e($staff->address)) !!}</td>
			        <td>{{ $staff->phone  }}</td>
			        <td>{{ $staff->salary  }}</td>
			        <td>{{ $staff->position  }}</td>
			      </tr>
			     @endforeach
			    </tbody>
			  </table>

			   <a href="{{url('staff/create')}}"><button type="" class=" btn btn-danger btn-xs">Add Staff</button></a>
			</div>


	</div>
	</body>
</html>
@stop