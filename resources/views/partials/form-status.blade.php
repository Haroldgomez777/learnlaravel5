@if(Session::has('flash_message'))
        <div class="alert alert-success"><h3>{{session('flash_message')}}</h3></div>
@endif
@if (session('status'))
	<div class="alert alert-success alert-dismissable flat">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<h4><i class="icon fa fa-check"></i> Success</h4>
		{{ session('status') }}
	</div>
@endif

@if (session('anError'))
	<div class="alert alert-danger alert-dismissable flat">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<h4>
			<i class="icon fa fa-warning"></i>
			Success
		</h4>
		{{ session('anError') }}
	</div>
@endif

@if (count($errors) > 0)
	<div class="alert alert-danger alert-dismissable flat">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<h4>
			<i class="icon fa fa-warning"></i>
			<strong>ALERT</strong>
		</h4>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif