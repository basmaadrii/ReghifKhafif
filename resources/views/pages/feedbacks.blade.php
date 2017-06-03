@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if(empty($feedbacks->toArray()))
				<div class="row panel panel-default">
					<div class="panel-body col-sm-offset-4">
						<h3 style= "color : Black;"><strong>No Feedbacks To Be Viewed Yet</strong></h3>
					</div>
				</div>
			@else
				@foreach($feedbacks as $feedback)
					<div class="row panel panel-default">
						<div class="panel-heading">
							<h3 style= "color : Black;"><strong>{{ $feedback->isUser? $feedback->user->name : 'Guest' }}</strong></h3>
						</div>
						<div class="panel-body">
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Quality:</strong> {{ $feedback->Quality }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Service Efficiency:</strong> {{ $feedback->ServiceEfficiency }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Cleanliness:</strong> {{ $feedback->cleanliness }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Speed Of Service:</strong> {{ $feedback->speedofservice }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Value For Money:</strong> {{ $feedback->valueformoney }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Staff Attitude:</strong> {{ $feedback->staffattitude }}
							</div>
							@if(!empty($feedback->additionalcomment))
								<div style = "font-size: 16px;">
									<strong class = "col-md-5">Additional Comments:</strong> {{ $feedback->additionalcomment }}
								</div>
							@endif
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
</div>


@stop