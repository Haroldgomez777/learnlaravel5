		<div class="form-group row">
			{!! Form::label('room_info', 'RoomType:',['class'=>'col-xs-2 col-form-label'] ) !!}
		 <div class="col-xs-6 col-xs-offset-2">
			{!! Form::select('room_info',$roomtype,null, ['class' => 'form-control']) !!}
		</div>
		</div>

		<div class="form-group row">
			{!! Form::label('customer', 'your first Name:',['class'=>'col-xs-3 col-form-label'] ) !!}
		<div class="col-xs-6 col-xs-offset-1">
			{!! Form::text('customer', null,['class' => 'form-control']) !!}
		</div>
		</div>

		<div class="form-group row">
			{!! Form::label('lastname', 'Last Name:',['class'=>'col-xs-3 col-form-label'] ) !!}
		<div class="col-xs-6 col-xs-offset-1">
			{!! Form::text('lastname', null,['class' => 'form-control']) !!}
		</div>
		</div>

		<div class="form-group row">
			{!! Form::label('email', 'email',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-6 col-xs-offset-2">
			{!! Form::email('email', null,['class' => 'form-control']) !!}
		</div>
		</div>

		<div class="form-group row">
			{!! Form::label('occupancy', 'No of People:',['class'=>'col-xs-3 col-form-label'] ) !!}
		<div class="col-xs-6 col-xs-offset-1">
			{!! Form::text('occupancy', null, ['class' => 'form-control']) !!}
		</div>
		</div>

		<div class="form-group row">
			{!! Form::label('start_dt', 'Startdate:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-6 col-xs-offset-2">
			{!! Form::input('date','start_dt', date('Y-m-d'), ['class' => 'form-control']) !!}
		</div>
		</div>
		
		<div class="form-group row">
			{!! Form::label('end_dt', 'EndDate:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-6 col-xs-offset-2">
			{!! Form::input('date','end_dt', date('Y-m-d'), ['class' => 'form-control']) !!}
		</div>
		</div>
		

		<!--Add Article Form Input -->
		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control'])!!}
		</div>
