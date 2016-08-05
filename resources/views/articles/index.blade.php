@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
	
	<div class="panel panel-default ">
		<div class="panel-body">
				<div class="panel-heading">
					<h2>Reviews</h2>
				</div>
		@foreach ($articles as $article)
		
		<article>
		
					<div class="panel-heading">
							<h3>
					<a href="{{ url('/articles',$article->id) }}">{{ $article->title }}</a>
							</h3>
					</div>

				
					<div class="panel-body">
						<p>{!! nl2br(e($article->body)) !!}</p>
					</div>
		
		</article>
	
	@endforeach
		</div>
	</div>
</div>
@stop