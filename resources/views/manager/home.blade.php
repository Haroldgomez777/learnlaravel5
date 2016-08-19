@extends('manager.app')
@section('content')
<div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>{{$hotel->name}}</h2>
                        <div class ="col-md-7  col-md-offset-2">
        <img src="{{url($hotel->file)}}" class="img-rounded" alt="Cinque Terre" width=100% height="300">
        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection