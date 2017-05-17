@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Be our partner</div>
				<br/>
				<p class="col-md-offset-1">Interested in being our partner? Fill this form and let us know what you have for us.</p>
				<br/>
				<div class="panel-body">

					{!! Form::open(['url' => '/partnership', 'class' => 'form-horizontal']) !!}

	                    {{ csrf_field() }}

						<div class="form-group">
							{!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('nameText', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('emailText', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('address ', 'Address', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('addressText', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('phonenumber', 'Phone Number', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
							    {!! Form::text('phonenumberText', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('offer', 'Offer', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::textarea('offerText', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('additionalinfo', 'Additional Information', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::textarea('additionalinfoText', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group">
							<div class = "col-md-8 col-md-offset-6">
								{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
							</div>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@stop