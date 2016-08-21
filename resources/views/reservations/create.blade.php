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

			<div class="row">
				<div class="col-md-6 col-md-offset-3">
						<div class = "col-sm-3">
						<h3> Roomtype</h3>
						@foreach($ROOMS as $room)
						<article>
							{{ $room }}
						</article>
						@endforeach
						</div>
						<div class = "col-sm-3">
						<h3> Price </h3>
						@foreach($PRICES as $price)
						<article>
							{{ $price }}
						</article>
						@endforeach
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

	@include('errors.list')
@stop