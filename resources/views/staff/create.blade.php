@extends('manager.app')

@section('content')


	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" id ="pac"><h3>Add a New Staff</h3></div>
				<div class="panel-body">
						{!! Form::model($staff = new \App\Staff,['url' => 'staff/create']) !!}
								@include('staff.form', ['submitButtonText' => 'Add Staff'])
						{!! Form::close() !!}

						@include('errors.list')

				</div>
			</div>
		</div>
	</div>

@stop


<!---


-->