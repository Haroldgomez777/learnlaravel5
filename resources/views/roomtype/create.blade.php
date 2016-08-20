@extends('manager.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-default">
				<div class="panel-heading" id ="pac"><h3>Create a new Room Type</h3></div>
					<div class="panel-body">
						{!! Form::open(array('url' => 'roomtypes/create','class'=>'form-horizontal')) !!}
					    	@include('roomtype.form', ['submitButtonText' => 'Create Room'])
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


	@include('errors.list')
@stop