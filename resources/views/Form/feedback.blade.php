@extends('layouts.app')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1 style= "color : Black;"><strong>Give Us Your FeedBack<strong/></h1></div>
				<br/>
				<div class="panel-body">

					{!! Form::open(['url' => 'feedback'])!!}

						<div class="form-group">
							{!! Form::label('qualitylabel','Quality of Food', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
								{!! Form::radio('quality','Poor')!!}
								{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
								{!! Form::radio('quality','Good')!!}
								{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
							</div>
							<div class="col-md-2">
								{!! Form::radio('quality','Excellent')!!}
								{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
							</div>
							<br/>
						</div>

						<div class="form-group">
							{!! Form::label('ServiceLabel','Service Efficiency', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
							{!! Form::radio('Service ','Poor')!!}
							{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('Service ','Good')!!}
							{!! Form::label('Good','Good', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('Service ','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
							</div>
							<br/>
						</div>

						<div class="form-group">
							{!! Form::label('CleanlinessLabel','Cleanliness', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
							{!! Form::radio('Cleanliness','Poor')!!}
							{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('Cleanliness','Good')!!}
							{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('Cleanliness','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
							</div>
							 <br/>
						</div>

						<div class="form-group">
							{!! Form::label('SpeedLabel','Speed Of Service', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">
							{!! Form::radio('Speed','Poor')!!}
							{!! Form::label('poor','Poor', ['class' =>  'control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('Speed','Good')!!}
							{!! Form::label('Good','Good', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">
							{!! Form::radio('Speed','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
							</div>
							<br/>
						</div>

						<div class="form-group">
							{!! Form::label('ValueLabel','Value For Money', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">	
							{!! Form::radio('Value','Poor')!!}
							{!! Form::label('poor','Poor', ['class' =>  'control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('Value','Good')!!}
							{!! Form::label('Good','Good', ['class' =>  'control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('Value','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
							</div>
							<br/>
						</div>

						<div class="form-group">
							{!! Form::label('StaffLabel','Staff Attitude', ['class' => 'col-md-4 control-label'])!!}
							<div class="col-md-2">	
							{!! Form::radio('Staff','Poor')!!}
							{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('Staff','Good')!!}
							{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
							</div>
							<div class="col-md-2">	
							{!! Form::radio('Staff','Excellent')!!}
							{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
							</div>
							<br/>
						</div>

						<div class="form-group">
						{!! Form::label('comment','Aditional Comments')!!}
						<br/>
						{!! Form::textarea('comments',null)!!}
						<br/>
						{!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}
						</div>

					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>


@stop