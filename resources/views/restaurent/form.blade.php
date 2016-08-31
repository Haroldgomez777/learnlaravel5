

		<div class="form-group row">
			{!! Form::label('food_name', 'Name:', ['class' => 'col-sm-3 control-label'])!!}
			<div class="col-sm-8">
			{!! Form::text('food_name', null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group row">
			{!! Form::label('price', 'Price:', ['class' => 'col-sm-3 control-label'])!!}
			<div class="col-sm-8">
			{!! Form::text('price', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		
		

		<!--Add Article Form Input -->
		<div class="form-group row">
			<div class="col-md-4 col-md-offset-4">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control'])!!}
			</div>
		</div>