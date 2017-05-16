@extends('app')
@section('content')

<h1 style= "color : Black;"><strong>Give Us Your FeedBack<strong/></h1>

{!! Form::open(['url'=>/'feedback'])!!}
{!! Form::label('Quality','Quality of Food')!!}
{!! Form::radio('poorquality','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Goodquality','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellentquality','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Service ','Service Efficiency')!!}
{!! Form::radio('poorservice','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Goodservice','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellentservice','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Cleanliness','Cleanliness')!!}
{!! Form::radio('poorcleanliness','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Goodcleanliness','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellentcleanliness','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
 <br/>

{!! Form::label('Speed','Speed Of Service')!!}
{!! Form::radio('poorspeed','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Goodspeed','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellentspeed','Excellent')!!}speed
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Value','Value For Money')!!}
{!! Form::radio('poorvalue','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Goodvalue','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellentvalue','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Staff','Staff Attitude')!!}
{!! Form::radio('poorstaff','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Goodstaff','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellentstaff','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('comment','Aditional Comments')!!}
<br/>
{!! Form::textarea('comments',null )!!}
<br/>
{!! Form::submit('submit',null)!!}



{!! Form::close()!!}


@stop