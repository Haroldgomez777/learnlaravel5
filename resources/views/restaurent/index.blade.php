@extends('manager.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            		<div class="panel panel-default">
            		<div class="panel-heading" id ="pac"><h3>Create food type</h3></div>
            			<div class="panel-body">
				{!! Form::open(array('url' => 'rose/create')) !!}
			    	@include('restaurent.form', ['submitButtonText' => 'Create food type'])
				{!! Form::close() !!}
				
				<div class="container">
				<div class="row">
				@include('errors.list')
				</div>
				<div class="row">
				<table class="table table-bordered">
					    <thead>
					      <tr>
					        <th>Food name</th>
					        <th>Price</th>
					      </tr>
					      </thead>

				<tbody>
				@foreach($foods as $food)
				<tr>
					        <td>{{$food->food_name}}</td>
					        <td>{{$food->price }}</td>
				</tr>
				@endforeach
				</tbody>
				</table>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop