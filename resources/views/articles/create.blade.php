@extends('layouts.app')

@section('content')


	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" id ="pac"><h3>Write a New Review</h3></div>
				<div class="panel-body">
						{!! Form::model($article = new \App\Article,['url' => 'articles']) !!}
								@include('articles.form', ['submitButtonText' => 'Add Review'])
						{!! Form::close() !!}

						@include('errors.list')

				</div>
			</div>
		</div>
	</div>

@stop


<!---


-->