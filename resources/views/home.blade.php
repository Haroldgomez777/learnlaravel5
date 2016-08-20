@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" id="pac">Available Hotels</div>

                <div class="panel-body">
                    @foreach($hotels as $hotel)
                            <a href="{{ url('/reserve',$hotel->id) }}"><h2>{{$hotel->name}}</h2></a>
                            <div class ="col-md-7  col-md-offset-2">
                            <img src="{{url($hotel->file)}}" class="img-rounded" alt="No Image Found" width=100% height="300">
                            </div>
                    @endforeach                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
