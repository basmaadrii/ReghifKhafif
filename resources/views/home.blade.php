@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    @if(Session::has('alert-error'))

                        <p class="alert alert-danger">{{ Session::get('alert-error') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>

                    @endif

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
