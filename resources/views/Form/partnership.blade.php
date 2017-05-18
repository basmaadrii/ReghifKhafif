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

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							{!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('name', null, ['class' => 'form-control']) !!}

								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

								<br/>
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							{!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('email', null, ['class' => 'form-control']) !!}

								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('address ', 'Address', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('address', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('phonenumber', 'Phone Number', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
							    {!! Form::text('phonenumber', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group{{ $errors->has('offer') ? ' has-error' : '' }}">
							{!! Form::label('offer', 'Describe Your Offer', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::textarea('offer', null, ['class' => 'form-control']) !!}

								@if ($errors->has('offer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('offer') }}</strong>
                                    </span>
                                @endif

								<br/>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('additionalInfo', 'Additional Information', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::textarea('additionalInfo', null, ['class' => 'form-control']) !!}
								<br/>
							</div>
						</div>

						<div class="form-group{{ $errors->has('documentation') ? ' has-error' : '' }}">
							<hr/>
							{!! Form::label('uploadLabel', 'Add Documentation', ['class' => ' control-label col-md-4']) !!}
							{!! Form::file('documentation', ['class' => 'btn btn-file']) !!}

								@if ($errors->has('documentation'))
                                    <span class="help-block col-md-offset-4">
                                        <strong>{{ $errors->first('documentation') }}</strong>
                                    </span>
                                @endif

							<br/>
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