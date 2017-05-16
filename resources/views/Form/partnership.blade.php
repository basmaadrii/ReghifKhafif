@extends('app')

@section('content')

<h1>Be our partner</h1>
<p>Interested in being our partner? You have good cooking skills? You have a good offer for us? Fill this form and let us know what you have for us.</p>
<hr/>

{!! Form::open() !!}
	<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	<br/>
	{!! Form::text('nameText', null) !!}
	<br/>
	</div>

	<div class="form-group">
	{!! Form::label('address ', 'Adress:') !!}
	<br/>
	{!! Form::text('addressText', null) !!}
	<br/>
	</div>

	<div class="form-group">
	{!! Form::label('email', 'Email:') !!}
	<br/>
	{!! Form::text('emailText', null) !!}
	<br/>
	</div>

	<div class="form-group">
	{!! Form::label('phonenumber', 'PhoneNumber:') !!}
	<br/>
    {!! Form::text('phonenumberText', null) !!}
	<br/>
	</div>

	<div class="form-group">
	{!! Form::label('offer', 'Offer:') !!}
	<br/>
	{!! Form::textarea('offerText', null) !!}
	<br/>
	</div>

	<div class="form-group">
	{!! Form::label('additional information', 'Additional Information') !!}
	<br/>
	{!! Form::textarea('additional informationText', null) !!}
	<br/>
	</div>

	<div class="form-group">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}