		<div class="form-group row">
			{!! Form::label('name', 'Name:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-10">
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		</div>

		
		<div class="form-group row">
			{!!Form::label('address','Address:',['class'=>'col-xs-2 col-form-label'] )!!}
		<div class="col-xs-10">
			{!!Form::textarea('address', null, ['class' => 'form-control']) !!}
		</div>
		</div>


		<div class="form-group row">
			{!! Form::label('phone', 'Phone:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-10">
			{!! Form::text('phone', null, ['class' => 'form-control']) !!}
		</div>
		</div>

		<div class="form-group row">
			{!! Form::label('salary', 'Salary:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-10">
			{!! Form::text('salary', null, ['class' => 'form-control']) !!}
		</div>
		</div>

		<div class="form-group row">
			{!! Form::label('position', 'Position:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-10">
			{!! Form::text('position', null, ['class' => 'form-control']) !!}
		</div>
		</div>


		<!--Add Article Form Input -->
		<div class="form-group">
			<div>
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary'])!!}
			</div>
		</div>

