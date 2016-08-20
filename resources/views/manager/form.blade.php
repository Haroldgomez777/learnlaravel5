		<div class="form-group">
			{!! Form::label('name', 'Hotel Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('location', 'Location:') !!}
			{!! Form::text('location', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>
		         <div class="control-group">
          			<div class="controls">
		    {!! Form::label('img','Choose Image:') !!}
		    {!! Form::file('img',null,array(['class' => 'form-control'] )) !!}
		</div>
		<div class="form-group">
			<div class="col-md-5 col-md-offset-3">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control'])!!}
			</div>
		</div>

		