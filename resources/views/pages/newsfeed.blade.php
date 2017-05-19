@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach($posts as $post)
				<div class="panel panel-default">
					<div class="panel-heading"><h3 style= "color : Black;"><strong>{{ $post->user->name }}</strong></h3></div>
					<div class="panel-body"><p>{{ $post->text }}</p></div>
				</div>
			@endforeach
		</div>
	</div>
</div>


@stop