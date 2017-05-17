@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1 style= "color : Black;"><strong>Write a Post<strong/></h1></div>
				<br/>
				<div class="panel-body">
				{!! Form::open(['url' => 'post'])!!}
					{!! Form::textarea('post',null )!!}
					<br/>
					{!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}
				{!! Form::close()!!}
				</div>

@stop