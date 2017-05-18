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
							<br/>
						</div>

						<div class="form-group">
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
							<br/>
						</div>

						<div class="form-group">
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
							 <br/>
						</div>

						<div class="form-group">
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
							<br/>
						</div>

						<div class="form-group">
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
							<br/>
						</div>

						<div class="form-group">
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
							<br/>
						</div>

						<div class="form-group">
						{!! Form::label('comment','Aditional Comments')!!}
						<br/>
<<<<<<< HEAD
						{!! Form::textarea('additionalcomment',null )!!}
=======
						{!! Form::textarea('comments',null)!!}
>>>>>>> origin/master
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
