@extends('app')

@section('content')
<div class="panel-heading"><h1>Book your Rooms here</h1></div>
	

	<hr/>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					{!! Form::open(array('url' => 'reserve/create')) !!}
				    	@include('reservations.form', ['submitButtonText' => 'Book Room'])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>


	@include('errors.list')
@stop