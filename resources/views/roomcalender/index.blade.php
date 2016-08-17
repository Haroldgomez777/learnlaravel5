@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            		<div class="panel panel-default">
            		<div class="panel-heading" id ="pac"><h1>create Room calendar</h1></div>
            			<div class="panel-body">
				{!! Form::open(array('url' => 'roomcal/set')) !!}
			    	@include('roomcalender.form', ['submitButtonText' => 'Create Calender'])
				{!! Form::close() !!}
				</div>
				<div class="error">
				@include('errors.list')
				</div>
			</div>
		</div>
	</div>
</div>
@stop