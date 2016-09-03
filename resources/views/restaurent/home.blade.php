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
                    <a href="{{ url('/rose',$hotel->id) }}">{{ $hotel->name }}</a>
                            </h3>
        </article>
    
    @endforeach
        </div>
    </div>
</div>

@endsection
