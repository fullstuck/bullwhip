@extends('layout.index')
@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/form-elements.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
@endsection
@section('content')
<div class="top-content">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('assets/gambar/Bullwhip_effect.png') }}" alt="Chania">
      </div>

      <div class="item">
        <img src="{{ asset('assets/gambar/business_framework_bullwhip_effect_in_supply_chains_powerpoint_presentation_2_1.jpg') }}" alt="Chania">
      </div>

      <div class="item">
        <img src="{{ asset('assets/gambar/img12.jpg') }}" alt="Flower">
      </div>

      <div class="item">
        <img src="{{ asset('assets/gambar/pZjJsM2.jpg') }}" alt="Flower">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
      <div class="form-top">
        <div class="form-top-left">
          <h3>Bullwhip Effect By Satrianansyah</h3>
            <p>Login To Application:</p>
        </div>
        <div class="form-top-right">
          <i class="fa fa-lock"></i>
        </div>
      </div>

      <div class="form-bottom">
        <form role="form" action="login_action.php" method="post" class="login-form">
          <div class="form-group">
              <input required type="text" name="username" placeholder="Username..." class="form-control">
            </div>
            <div class="form-group">
              <input required type="password" name="password" placeholder="Password..." class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign in!</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection