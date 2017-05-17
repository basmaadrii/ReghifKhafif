@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1 style= "color : Black;"><strong>Write a Post</strong></h1></div>
				<br/>
				<div class="panel-body">
				{!! Form::open(['url' => 'post', 'files' => true])!!}
					{!! Form::textarea('text', null)!!}
					<br/>
					<hr/>
					{!! Form::label('uploadLabel', 'Upload Photo', ['class' => ' control-label']) !!}
					{!! Form::file('image', ['class' => 'btn btn-file']) !!}
					<br/>
					{!! Form::submit('Submit', ['class' => 'col-md-offset-2 btn btn-primary'])!!}
				{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop