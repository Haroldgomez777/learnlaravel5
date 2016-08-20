@extends('manager.app')
@section('content')
<div id="page-content-wrapper">
            <div class="container">
                <div class="row">
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
                        <h2>{{$hotel->name}}</h2>
                        <div class ="col-md-7  col-md-offset-2">
        <img src="{{url($hotel->file)}}" class="img-rounded" alt="No Image Found" width=100% height="300">
        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection