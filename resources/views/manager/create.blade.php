@extends('manager.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default" >
				<div class="panel-heading" id ="pac"><h2>Edit Hotel Details</h2></div>
				<div class="panel-body">
						{!! Form::open(array('url' => 'manager/create' , 'files' => true)) !!}
								@include('manager.form', ['submitButtonText' => 'Add Hotel'])
						{!! Form::close() !!}
				</div>
			</div>
			@include('errors.list')
		</div>
	</div>
</div>
@stop
