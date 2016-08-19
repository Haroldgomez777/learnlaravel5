@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            		<div class="panel panel-default">
								<div class="panel-heading" id ="pac"><h3>Book your Rooms here</h3></div>

						<div class="panel-body">
						{!! Form::open(array('url' => 'reserve/create')) !!}
				    		@include('reservations.form', ['submitButtonText' => 'Book Room'])
						{!! Form::close() !!}
						</div>
					</div>	
			</div>
		</div>
	</div>
</div>

	@include('errors.list')
@stop