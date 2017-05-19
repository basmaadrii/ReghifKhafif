       @extends('layouts.app')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1 style= "color : Black;"><strong>Give Us Your FeedBack<strong/></h1></div>
				<br/>
				<div class="panel-body col-md-offset-1">

					{!! Form::open(['url' => 'feedback'])!!}

						<div class="form-group{{ $errors->has('Quality') ? ' has-error' : '' }}">
							{!! Form::label('qualitylabel','Quality of Food', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
								{!! Form::radio('Quality','Poor')!!}
								{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
								{!! Form::radio('Quality','Good')!!}
								{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
							</div>
							<div class="col-md-2">
								{!! Form::radio('Quality','Excellent')!!}
								{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
							</div>

							
							@if ($errors->has('Quality'))
                                    <span class="help-block cd-md-4">
                                        <strong>{{ $errors->first('Quality') }}</strong>
                                    </span>
                            @endif

                            <br/>
						</div>

						<div class="form-group{{ $errors->has('ServiceEfficiency') ? ' has-error' : '' }}">
							{!! Form::label('ServiceLabel','Service Efficiency', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
							{!! Form::radio('ServiceEfficiency','Poor')!!}
							{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('ServiceEfficiency','Good')!!}
							{!! Form::label('Good','Good', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('ServiceEfficiency','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
							</div>
							@if ($errors->has('ServiceEfficiency'))
                                    <span class="help-block  cd-md-4" >
                                        <strong>{{ $errors->first('ServiceEfficiency') }}</strong>
                                    </span>
                                 
                                @endif

							<br/>
						</div>

						<div class="form-group{{ $errors->has('cleanliness') ? ' has-error' : '' }}">
							{!! Form::label('CleanlinessLabel','Cleanliness', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
							{!! Form::radio('cleanliness','Poor')!!}
							{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('cleanliness','Good')!!}
							{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('cleanliness','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
							</div>
							 @if ($errors->has('cleanliness'))
                                    <span class="help-block  cd-md-4">
                                        <strong>{{ $errors->first('cleanliness') }}</strong>
                                    </span>
                                @endif
							 <br/>
						</div>

						<div class="form-group{{ $errors->has('speedofservice') ? ' has-error' : '' }}">
							{!! Form::label('SpeedLabel','Speed Of Service', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
							{!! Form::radio('speedofservice','Poor')!!}
							{!! Form::label('poor','Poor', ['class' =>  'control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('speedofservice','Good')!!}
							{!! Form::label('Good','Good', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('speedofservice','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
							</div>
							@if ($errors->has('speedofservice'))
                                    <span class="help-block  cd-md-4">
                                        <strong>{{ $errors->first('speedofservice') }}</strong>
                                    </span>
                                @endif
							<br/>
						</div>

						<div class="form-group{{ $errors->has('valueformoney') ? ' has-error' : '' }}">
							{!! Form::label('ValueLabel','Value For Money', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">	
							{!! Form::radio('valueformoney','Poor')!!}
							{!! Form::label('poor','Poor', ['class' =>  'control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('valueformoney','Good')!!}
							{!! Form::label('Good','Good', ['class' =>  'control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('valueformoney','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
							</div>
							@if ($errors->has('valueformoney'))
                                    <span class="help-block  cd-md-4">
                                        <strong>{{ $errors->first('valueformoney') }}</strong>
                                    </span>
                                @endif
							<br/>
						</div>

						<div class="form-group{{ $errors->has('staffattitude') ? ' has-error' : '' }}">
							{!! Form::label('StaffLabel','Staff Attitude', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">	
							{!! Form::radio('staffattitude','Poor')!!}
							{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('staffattitude','Good')!!}
							{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('staffattitude','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
							</div>
							@if ($errors->has('staffattitude'))
                                    <span class="help-block  cd-md-4">
                                        <strong>{{ $errors->first('staffattitude') }}</strong>
                                    </span>
                                @endif
							<br/>
						</div>

						<div class="form-group ">
						{!! Form::label('comment','Aditional Comments', ['class' => 'col-md-4 control-label'])!!}
						{!! Form::textarea('additionalcomment', null, ['class' => 'col-md-8'])!!}
						</div>
						
						<br/>
						{!! Form::submit('Submit', ['class' => 'btn btn-primary col-md-2'])!!}
						</div>

					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>


@stop
