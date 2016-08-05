		<div class="form-group">
			{!! Form::label('room_type', 'RoomType:') !!}
			{!! Form::select('room_type',$roomtype,null, ['class' => 'form-control']) !!}
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