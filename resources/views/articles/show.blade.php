@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" id ="pac">
				
                <h1>{{ $article->title }}</h1></div>
				<div class="panel-body">
					<article>
					{!! nl2br(e($article->body)) !!}
					</article>

					@unless ($article->tags->isEmpty())
							<h5>Tags:</h5>
								
								<ul>
									@foreach ($article->tags as $tag)
									
									<li><a href="{{url('/tags',$tag->name)}}">{{ $tag->name }} </a></li>

									@endforeach
								</ul>
					@endunless
				</div>
				
				

			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			  <div class="panel-body">
			  {!! link_to_action('ArticlesController@edit','Edit Review',[$article->id]) !!}
			  </div>
		</div>
		</div>
	</div>
</div>
@stop