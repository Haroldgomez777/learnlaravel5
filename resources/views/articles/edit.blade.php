@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Edit:{!! $article->title!!}</h1></div>
						<div class="panel-body">	
	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
		@include('articles.form', ['submitButtonText' => 'Update Review'])
	{!! Form::close() !!}

		@include('errors.list')
				</div>
			</div>
		</div>
	</div>
</div

@stop