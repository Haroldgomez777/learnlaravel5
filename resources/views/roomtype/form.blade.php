		<div class="form-group">
			{!! Form::label('name', 'Name:', ['class' => 'col-sm-3 control-label'])!!}
			<div class="col-sm-8">
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('short_name', 'ShortName:', ['class' => 'col-sm-3 control-label'])!!}
			<div class="col-sm-8">
			{!! Form::text('short_name', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('max_occupancy', 'Maximum capacity:', ['class' => 'col-sm-3 control-label'])!!}
			<div class="col-sm-8">
			{!! Form::text('max_occupancy', null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('base_price', 'Price:', ['class' => 'col-sm-3 control-label'])!!}
			<div class="col-sm-8">
			{!! Form::text('base_price', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('base_availability', 'Available:', ['class' => 'col-sm-3 control-label'])!!}
			<div class="col-sm-8">
			{!! Form::text('base_availability', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		

		<!--Add Article Form Input -->
		<div class="form-group">
			<div class="col-md-4 col-md-offset-4">
				{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control'])!!}
			</div>
		</div>