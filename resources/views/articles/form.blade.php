

		<div class="form-group row">
			{!! Form::label('title', 'Title:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-10">
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
		</div>

		
		<div class="form-group row">
			{!!Form::label('body','Body:',['class'=>'col-xs-2 col-form-label'] )!!}
		<div class="col-xs-10">
			{!!Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>
		</div>


		<div class="form-group row">
			{!!Form::label('published_at','Published On:',['class'=>'col-xs-2 col-form-label'] )!!}
		<div class="col-xs-10">
			{!!Form::input('date','published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}
		</div>
		</div>


		<div class="form-group row">
			{!! Form::label('tag_list', 'Tags:',['class'=>'col-xs-2 col-form-label'] ) !!}
		<div class="col-xs-10">
			{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control','multiple']) !!}
			
		</div>
		</div>

		<!--Add Article Form Input -->
		<div class="form-group">
			<div>
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary'])!!}
			</div>
		</div>

		@section('footer')
			<script>
				$('#tag_list').select2({
					placeholder: 'Choose a tag!',
				});
			</script>
		@endsection