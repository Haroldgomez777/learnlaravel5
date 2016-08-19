@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
	
	<div class="panel panel-default ">
		<div class="panel-body">
				<div class="panel-heading">
					<h3>Reviews</h3>
				</div>
				<div>
				<h4>Tags:</h4>
				@foreach ($tags as $tag)
									
				<a href="{{url('/tags',$tag->name)}}" class="btn btn-primary" role="button">{{ $tag->name }} </a>

				@endforeach
				</div>
		@foreach ($articles as $article)
		
		<article>
		
					<div class="panel-heading">
							<h3>
					<a href="{{ url('/articles',$article->id) }}">{{ $article->title }}</a>
							</h3>
					</div>

				
					<div class="panel-body">
						<article>{!! nl2br(e($article->body)) !!}</article>
					</div>
		
		</article>
	
	@endforeach
		</div>
	</div>
</div>
@stop