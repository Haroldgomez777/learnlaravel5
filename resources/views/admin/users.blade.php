@extends('admin.app')
@section('content')

<div class="jumbotron">
			<div class="container">
			      <h2>Users</h2>
			      </hr>     
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Email</th>
			        <th>password </th>
			        <th>Role</th>
			        <th>Make Manager</th> 
			        <th>Make user</th>       
			      </tr>
			    </thead>
			    <tbody>
			    @foreach ($users as $user)
			      <tr>
			        <td>{{ $user->id }}</td>
			        <td>{{ $user->name }}</td>
			        <td>{{ $user->email }}</td>
			        <td>{{ $user->password }}</td>
			        	 
			        <td>{{ $user->role->name }}</td> 
			        <td>
			        @if($user->role->id!='1')
			        <form action="{{ url('admin/'.$user->id) }}" method="post">
				            {{ csrf_field() }}
				            {{ method_field('PATCH') }}

				            <button type="submit" class=" btn btn-danger btn-xs">
				                <span class="glyphicon glyphicon-flash"></span> Make Admin
				            </button>
				</form>
			        
			      	</td>
			      	<td>
					<form action="{{ url('admin/user/'.$user->id) }}" method="post">
				            {{ csrf_field() }}
				            {{ method_field('PATCH') }}

				            <button type="submit" class=" btn btn-danger btn-xs">
				                <span class="glyphicon glyphicon-flash"></span> Make user
				            </button>
				</form>
			@endif
			      	</td>
			      </tr>
			     @endforeach
			    </tbody>
		  </table>
	</div>
</div>
@endsection