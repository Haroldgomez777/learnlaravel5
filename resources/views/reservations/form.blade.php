		<div class="form-group">
			{!! Form::label('room_info', 'RoomType:') !!}
			{!! Form::select('room_info',$roomtype,null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('customer', 'your first Name:') !!}
			{!! Form::text('customer', null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('lastname', 'Last Name:') !!}
			{!! Form::text('lastname', null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'email') !!}
			{!! Form::email('email', null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('occupancy', 'No of People:') !!}
			{!! Form::text('occupancy', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('start_dt', 'Startdate:') !!}
			{!! Form::input('date','start_dt', date('Y-m-d'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('end_dt', 'EndDate:') !!}
			{!! Form::input('date','end_dt', date('Y-m-d'), ['class' => 'form-control']) !!}
		</div>
		

		<!--Add Article Form Input -->
		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control'])!!}
		</div>
