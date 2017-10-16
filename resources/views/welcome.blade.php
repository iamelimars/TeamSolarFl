@extends('layouts.app')

@section('content')
<div id="hero">
    <div id="cover">
        <h1 class="text-center wow fadeInDown" data-wow-delay="1.2s">BE IN CONTROL OF YOUR POWER</h1>
        <h3 class="text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">AFFORDABLE SOLAR PANELS</h3>
        <a href="#"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a>
    </div>
</div>
<div id="info" class="section">
    <div class="container">
        <div class="col-sm-4 info-section wow fadeInLeft" data-wow-duration="2s" data-wow-offset="50">
            <h3>Solar is now the cheapest an most abundant energy source in the world</h3>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4 col-sm-offset-4 info-section wow fadeInUp" data-wow-duration="2s" data-wow-offset="50">
            <h3>Over a million solar systems have been installed in the U.S. alone</h3>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4 col-sm-offset-8 info-section wow fadeInRight" data-wow-duration="2s" data-wow-offset="50">
            <h3>Homeowners don't have to install their own solar panels to go solar</h3>
        </div>
    </div>
</div>

<div class="clearfix"></div>

{{--  <div id="about" class="alt-section">
    <div class="container">

    </div>
</div>  --}}

<div class="clearfix"></div>

<div id="panel" class="section">
    <div class="container">
        <img class="col-xs-12 wow fadeIn" data-wow-duration="3s" data-wow-offset="100" src="https://s3.us-east-2.amazonaws.com/iamelimars/solar-panel.png" alt="Solar Panel">
    </div>
</div>

<div class="clearfix"></div>

<div id="contact" class="alt-section">
    <div class="container">
        {{--  {!! Form::open(['url' => '', 'method' => 'post']) !!}  --}}
        {{--  {!! Form::open(array('route' => 'post.contact', 'id' => 'contactForm')) !!}
            {{ csrf_field() }}
            <div class="col-xs-12">
                {{ Form::text('contactName', null, array('class' => 'col-xs-12', 'placeholder' => 'Name')) }}
                {{ Form::email('contactEmail', null, array('class' => 'col-xs-12', 'placeholder' => 'Email')) }}
                {{ Form::textarea('contactMessage', null, array('class' => 'col-xs-12', 'placeholder' => 'Enter Message Here')) }}
                {{ Form::submit('Submit', ['class' => 'col-xs-4 col-xs-offset-4 submit']) }}
            </div>
        {!! Form::close() !!}  --}}
    </div>
</div>

<div class="clearfix"></div>

<div id="team" class="section">
    <div class="container">

    </div>
</div>

@endsection
