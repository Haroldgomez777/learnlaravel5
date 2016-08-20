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
			        <th>location</th>
			        <th>description </th>
			        <th>Owner</th>
			        <th>Delete</th>
			        	        
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
			        	<td> 
				<form action="{{ url('admin/hotel/'.$hotel->id) }}" method="post">
				            {{ csrf_field() }}
				            {{ method_field('DELETE') }}

				            <button type="submit" class=" btn btn-danger btn-xs">
				                <span class="glyphicon glyphicon-trash"></span> DELETE
				            </button>
				</form>
				</td>
			      </tr>
			     @endforeach
			    </tbody>
		  </table>
	</div>
</div>
@endsection