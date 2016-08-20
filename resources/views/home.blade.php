@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    
    <div class="panel panel-default ">
        <div class="panel-body">
                <div class="panel-heading">
                    <h3>Hotels</h3>
                </div>
                <div>

        @foreach ($hotels as $hotel)
        
        <article>
        
                    <div class="panel-heading">
                            <h3>
                    <a href="{{ url('/reserve',$hotel->id) }}">{{ $hotel->name }}</a>
                            </h3>
                    </div>
                        <div class ="col-md-7">
                            <img src="{{url($hotel->file)}}" class="img-rounded" alt="No Image Found" width=100% height="300">
                        </div>
                    <div class="panel-body">
                       <h3>Location:{!! $hotel->location !!}</h3>
                        <article> Description:{!! nl2br(e($hotel->description)) !!}</article>
                    </div>
        
        </article>
    
    @endforeach
        </div>
    </div>
</div>

@endsection
