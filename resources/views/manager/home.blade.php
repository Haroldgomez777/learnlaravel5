@extends('manager.app')
@section('content')
<div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                   <div class="col-lg-12">
                <div class="panel-body">
                <div class="panel-heading">

        
                    <div class="panel-heading">
                            <h3>
                    <a href="{{ url('/manager/create')}}">{{ $hotel->name }}</a>
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
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection