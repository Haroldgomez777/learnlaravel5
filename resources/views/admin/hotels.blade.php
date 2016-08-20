@extends('admin.app')
@section('content')
<div class="jumbotron">
			<div class="container">
			      <h1>Hotels</h1>
			      </hr>     
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Email</th>
			        <th>password </th>
			        <th>Owner</th>
			        	        
			      </tr>
			    </thead>
			    <tbody>
			    @foreach ($hotels as $hotel)
			      <tr>
			        <td>{{ $hotel->id }}</td>
			        <td>{{ $hotel->name }}</td>
			        <td>{{ $hotel->location }}</td>
			        <td>{{ $hotel->description }}</td>
			        <td>{{ $hotel->user->name}}</td>
			        	 
			        
			      </tr>
			     @endforeach
			    </tbody>
		  </table>
	</div>
</div>
@endsection