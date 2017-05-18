@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Html::image('images/akl1.jpg', null, array('class' => 'img-thumbnail col-md-7 col-md-offset-3')) !!}
            
                    {!! Html::image('images/akl2.png', null,  array('class' => 'img-thumbnail col-md-7 col-md-offset-3')) !!}
                
                    {!! Html::image('images/akl3.jpg', null,  array('class' => 'img-thumbnail col-md-7 col-md-offset-3')) !!}
                
                    {!! Html::image('images/akl4.png', null, array('class' => 'img-thumbnail col-md-7 col-md-offset-3')) !!}
                
                    {!! Html::image('images/akl5.jpg',  null, array('class' => 'img-thumbnail col-md-7 col-md-offset-3')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
