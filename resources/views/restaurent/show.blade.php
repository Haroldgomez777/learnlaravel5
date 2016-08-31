@extends('layouts.app')
@section('content')
<div class="container" id ="pac">
	
		<div class="col-md-6 col-md-offset-3">
            		<div class="panel panel-default" id ="pac">
            		<div class="panel-heading" id ="pac">
            		<h3>Order food</h3>
            		</div>
            		</div>

            								<div class="panel panel-default" id ="pac">
								<table class="table table-bordered">
									    <thead>
									      <tr>

									        <th>Food name</th>
									        <th>Price</th>
									        <th>Select</th>
									      </tr>
									      </thead>

								<tbody>
								
								{!! Form::open(array('url' => 'rose/order' , 'method' => 'post')) !!} 
								
								@foreach($foods as $food)
								<tr>
									        <td>{{$food->food_name}}</td>
									        <td>{{$food->price }}</td>			            
									        <td class="form-group" id="pac">{!! Form::checkbox('select[]', $food->id, false); !!}</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								
								
								<div class="col-xs-offset-5">		
								{!! Form::submit('Submit', ['class'=>'btn btn-primary btn-group-xs']) !!}
								{!! Form::close() !!}
								</div>
								</div>
								
				
				
								

					
				
			</div>
		</div>

<div class="container">
	<div class="row">
	<div class="col-md-6 col-md-offset-3" id="pac">
	<div class="panel panel-default" id ="pac">
@unless ($user->restaurant->isEmpty())
	<div class="panel-heading" id ="pac">

			<h5>Your Order</h5>
	</div>
	
								<ul>
									@foreach ($user->restaurant as $eat)
									<div class="panel panel-default-3" id ="pac">
									<h5>{{ $eat->food_name }}</h5>
									</div>
									@endforeach
								</ul>
	</div>
				@endunless

			</div>
	</div>
</div>
@stop