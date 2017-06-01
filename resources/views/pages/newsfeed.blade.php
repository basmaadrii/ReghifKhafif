@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if(empty($posts->toArray()))
				<div class="row panel panel-default">
					<div class="panel-body col-sm-offset-4">
						<h3 style= "color : Black;"><strong>No Posts To Be Viewed Yet</strong></h3>
					</div>
				</div>
			@else
				@foreach($posts as $post)
					<div class="row panel panel-default">
						<div class="panel-heading">
							<h3 style= "color : Black;"><strong>{{ $post->user->name }}</strong></h3>
						</div>
						<div class="panel-body">
							<p>{{ $post->text }}</p>
							@if(!empty($post->image))
								{!! Html::image(asset('storage/'.$post->image), null, array('class' => 'img-responsive col-md-7 col-md-offset-3')) !!}
							@endif
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
</div>


@stop