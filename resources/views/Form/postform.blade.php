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
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
					{!! Form::textarea('text', null)!!}
					<br/>
					  @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
					<hr/>
					</div>
					{!! Form::label('uploadLabel', 'Upload Photo', ['class' => ' control-label']) !!}
					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						{!! Form::file('image', ['class' => 'btn btn-file']) !!}
						@if ($errors->has('image'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('image') }}</strong>
	                                    </span>
	                                @endif
						<br/>
						</div>
					{!! Form::submit('Submit', ['class' => 'col-md-offset-2 btn btn-primary'])!!}
				{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop