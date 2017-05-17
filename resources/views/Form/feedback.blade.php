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
				{!! Form::label('Quality','Quality of Food', ['class' => 'col-md-4 control-label'])!!}
				<div class="col-md-2">
					{!! Form::radio('poorquality','Poor',['class' => 'form-control'])!!}
					{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
				</div>
				<div class="col-md-2">
					{!! Form::radio('Goodquality','Good',['class' => 'form-control'])!!}
					{!! Form::label('Good','Good', ['class' => ' control-label'])!!}
				</div>
				<div class="col-md-2">
					{!! Form::radio('Excellentquality','Excellent',['class' => 'form-control'])!!}
					{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
				</div>
				<br/>
			</div>

			<div class="form-group">
			{!! Form::label('Service ','Service Efficiency', ['class' => 'col-md-4 control-label'])!!}
			<div class="col-md-2">
			{!! Form::radio('poorservice','Poor',['class' => 'form-control'])!!}
			{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
			</div>
			<div class="col-md-2">
			{!! Form::radio('Goodservice','Good',['class' => 'form-control'])!!}
			{!! Form::label('Good','Good', ['class' => ' control-label'])!!}
			</div>
			<div class="col-md-2">	
			{!! Form::radio('Excellentservice','Excellent',['class' => 'form-control'])!!}
			{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
			</div>
			<br/>
			</div>

			<div class="form-group">
			{!! Form::label('Cleanliness','Cleanliness', ['class' => 'col-md-4 control-label'])!!}
			<div class="col-md-2">
			{!! Form::radio('poorcleanliness','Poor',['class' => 'form-control'])!!}
			{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
			</div>
			<div class="col-md-2">
			{!! Form::radio('Goodcleanliness','Good',['class' => 'form-control'])!!}
			{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
		</div>
			<div class="col-md-2">
			{!! Form::radio('Excellentcleanliness','Excellent',['class' => 'form-control'])!!}
			{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
			</div>
			 <br/>
			</div>

			<div class="form-group">
			{!! Form::label('Speed','Speed Of Service', ['class' => 'col-md-4 control-label'])!!}
			<div class="col-md-2">
			{!! Form::radio('poorspeed','Poor')!!}
			{!! Form::label('poor','Poor', ['class' =>  'control-label'])!!}
			</div>
			<div class="col-md-2">
			{!! Form::radio('Goodspeed','Good')!!}
			{!! Form::label('Good','Good', ['class' => ' control-label'])!!}
			</div>
			<div class="col-md-2">
			{!! Form::radio('Excellentspeed','Excellent')!!}
			{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
			</div>
			<br/>
			</div>

			<div class="form-group">
			{!! Form::label('Value','Value For Money', ['class' => 'col-md-4 control-label'])!!}
			<div class="col-md-2">	
			{!! Form::radio('poorvalue','Poor')!!}
			{!! Form::label('poor','Poor', ['class' =>  'control-label'])!!}
			</div>
			<div class="col-md-2">	
			{!! Form::radio('Goodvalue','Good')!!}
			{!! Form::label('Good','Good', ['class' =>  'control-label'])!!}
			</div>
			<div class="col-md-2">	
			{!! Form::radio('Excellentvalue','Excellent')!!}
			{!! Form::label('Excellent','Excellent', ['class' => ' control-label'])!!}
			</div>
			<br/>
			</div>

			<div class="form-group">
			{!! Form::label('Staff','Staff Attitude', ['class' => 'col-md-4 control-label'])!!}
			<div class="col-md-2">	
			{!! Form::radio('poorstaff','Poor')!!}
			{!! Form::label('poor','Poor', ['class' => ' control-label'])!!}
			</div>
			<div class="col-md-2">	
			{!! Form::radio('Goodstaff','Good')!!}
			{!! Form::label('Good','Good', ['class' => 'control-label'])!!}
			</div>
			<div class="col-md-2">	
			{!! Form::radio('Excellentstaff','Excellent')!!}
			{!! Form::label('Excellent','Excellent', ['class' => 'control-label'])!!}
			</div>
			<br/>
			</div>

			<div class="form-group">
			{!! Form::label('comment','Aditional Comments')!!}
			<br/>
			{!! Form::textarea('comments',null )!!}
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