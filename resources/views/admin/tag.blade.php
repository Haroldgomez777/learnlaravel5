@extends('admin.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default" >
				<div class="panel-heading" id ="pac"><h2>Admin</h2></div>
				<div class = "col-sm-6">
				<article>This is the Admin dash board </article>
				<div>
				<h3>List of tags</h3>
				<div>
				<thead>
				<tr>
				<table class= "table">
				<td>Tag name</td>
				<td>Delete</td>
				</tr>
				</thead>
				@foreach($tags as $tag)
				

				<tbody>
				<td>
					{{$tag->name}}
				</td>
				<td>
					<form action="{{ url('admin/tag/'.$tag->id) }}" method="post">
				            {{ csrf_field() }}
				            {{ method_field('DELETE') }}
				            <button type="submit" class=" btn btn-danger btn-xs">
				                <span class="glyphicon glyphicon-trash"></span> DELETE
				            </button>
				
				</form>
				 </td>
				</tbody>
				
				@endforeach
				</table>
				</div>
				</div>
<div class="form-group">
	{!! Form::open(array('url' => 'admin/tag')) !!}
		<div class="form-group row">
			{!! Form::label('name', 'ADD TAG:',['class'=>'col-xs-5 col-form-label']) !!}
		<div class="col-xs-10">
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-offset-0 col-sm-12">
			{!! Form::submit('submit',['class'=>'btn btn-primary'])!!}
			</div>
		</div>
	{!! Form::close() !!}
</div>


				</div>
			</div>
		
		</div>
	</div>
</div>

@endsection
