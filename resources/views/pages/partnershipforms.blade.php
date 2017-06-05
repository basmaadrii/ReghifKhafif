@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if(empty($forms->toArray()))
				<div class="row panel panel-default">
					<div class="panel-body col-sm-offset-4">
						<h3 style= "color : Black;"><strong>No Forms To Be Viewed Yet</strong></h3>
					</div>
				</div>
			@else
				@foreach($forms as $form)
					<div class="row panel panel-default">
						<div class="panel-heading">
							<h3 style= "color : Black;"><strong>{{ $form->user->name }}</strong></h3>
						</div>
						<div class="panel-body">
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Name:</strong> {{ $form->name }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Email:</strong> {{ $form->email }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Address:</strong> {{ $form->address }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Phone Number:</strong> {{ $form->phonenumber }}
							</div>
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Offer:</strong> {{ $form->offer }}
							</div>
							@if(!empty($form->additionalInfo))
								<div style = "font-size: 16px;">
									<strong class = "col-md-5">Additional Information:</strong> {{ $form->additionalInfo }}
								</div>
							@endif
							<div style = "font-size: 16px;">
								<strong class = "col-md-5">Documentation:</strong><a href="/partnership/download/{{$form->id}}">Download</a>
							</div>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
</div>


@stop