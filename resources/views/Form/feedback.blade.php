@extends('app')
@section('content')

<h1 style= "color : Black;"><strong>Give Us Your FeedBack<strong/></h1>

{!! Form::open()!!}
{!! Form::label('Quality','Quality of Food')!!}
{!! Form::radio('poor','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Good','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellent','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Service ','Service Efficiency')!!}
{!! Form::radio('poor','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Good','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellent','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Cleanliness','Cleanliness')!!}
{!! Form::radio('poor','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Good','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellent','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
 <br/>

{!! Form::label('Speed','Speed Of Service')!!}
{!! Form::radio('poor','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Good','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellent','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Value','Value For Money')!!}
{!! Form::radio('poor','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Good','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellent','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('Staff','Staff Attitude')!!}
{!! Form::radio('poor','Poor')!!}
{!! Form::label('poor','Poor')!!}
{!! Form::radio('Good','Good')!!}
{!! Form::label('Good','Good')!!}
{!! Form::radio('Excellent','Excellent')!!}
{!! Form::label('Excellent','Excellent')!!}
<br/>

{!! Form::label('comment','Aditional Comments')!!}
<br/>
{!! Form::textarea('comments',null )!!}
<br/>
{!! Form::submit('submit',null)!!}



{!! Form::close()!!}


@stop