<div class="jumbotron">
			<div class="container">
			      <h1>Admin</h1>
			      </hr>     
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Email</th>
			        <th>password </th>
			        <th>Role</th>	        
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
			      </tr>
			     @endforeach
			    </tbody>
		  </table>
	</div>
</div>

{{ $users->links() }}
