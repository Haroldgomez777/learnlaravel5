		<div class="form-group row">
			{!! Form::label('room_type', 'RoomType:',['class'=>'col-xs-2 col-form-label']) !!}
			<div class="col-xs-10">
			{!! Form::select('room_type',$roomtype,null, ['class' => 'form-control']) !!}
			</div>
		</div>


		<div class="form-group row">
			{!! Form::label('start_dt', 'Startdate:',['class'=>'col-xs-2 col-form-label']) !!}
			<div class="col-xs-10">
			{!! Form::input('date','start_dt', date('Y-m-d'), ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group row">
			{!! Form::label('end_dt', 'EndDate:',['class'=>'col-xs-2 col-form-label']) !!}
			<div class="col-xs-10">
			{!! Form::input('date','end_dt', date('Y-m-d'), ['class' => 'form-control']) !!}
			</div>
		</div>
		
		

		<!--Add Article Form Input -->
		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control'])!!}
		</div>