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
      <h3>Contact</h3>
      <form id="contact-form" class="col-xs-10 col-xs-offset-1" action="{!! route('post.contact') !!}" method="post">
        <label class="col-xs-12" for="name">Name</label>
        <input class="col-xs-12" type="text" id="name" name="name" value="">

        <label class="col-xs-12" for="email">Email</label>
        <input class="col-xs-12" type="email" name="email" id="email" value="">

        <label class="col-xs-12" for="body">Body</label>
        <textarea class="col-xs-12" name="body" id="body" rows="8" cols="80"></textarea>

        <input type="submit" value="Submit" id="submit" class="col-xs-4 col-xs-offset-4 ">
      </form>
    </div>
</div>

<div class="clearfix"></div>

<div id="team" class="section">
    <div class="container">
      <h3>Team</h3>
      <div class="col-xs-12 col-sm-4 team-container">
        <div class="col-xs-12 team-card">
          <img class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" src="https://s3.us-east-2.amazonaws.com/iamelimars/Walter%403x.png" alt="">
          <h4 class="col-xs-12 text-center">Walter Briceno</h4>
          <h5 class=" col-xs-12 text-center">CEO</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 team-container">
        <div class="col-xs-12 team-card">
          <img class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" src="https://s3.us-east-2.amazonaws.com/iamelimars/Sonia%403x.png" alt="">
          <h4 class="col-xs-12 text-center">Sonia Cera</h4>
          <h5 class=" col-xs-12 text-center">COO</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 team-container">
        <div class="col-xs-12 team-card">
          <img class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" src="https://s3.us-east-2.amazonaws.com/iamelimars/diana%403x.png" alt="">
          <h4 class="col-xs-12 text-center">Diana Briceno</h4>
          <h5 class=" col-xs-12 text-center">CMO</h5>
        </div>
      </div>
    </div>
</div>

<div id="footer" class="top-footer">

</div>
<div id="bottom-footer" class="footer">

</div>

@endsection
