<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

<!-- Bootstrap -->
<!-- Owl Carousel -->
<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />


@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

<div id="home-owl" class="owl-carousel owl-theme">
  <!-- home item -->
  <div class="home-item">
    <!-- section background -->
    <div class="section-bg" style="background-image: url(./img/background-1.jpg);"></div>
    <!-- /section background -->

    <!-- home content -->
    <div class="home">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="home-content">
              <h1>Save The Children</h1>
              <a href="#causes" class="primary-button">View Causes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /home content -->
  </div>
  <!-- /home item -->
</div>
<!-- /HOME OWL -->

<!-- ABOUT -->
<div id="about" class="section">
<!-- container -->
<div class="container">
  <!-- row -->
  <div class="row">
    <!-- about content -->
    <div class="col-md-5">
      <div class="section-title">
        <h2 class="title">Welcome</h2>
        <p class="sub-title">Help us in making a change towards a better future.</p>
      </div>
      <div class="about-content">
        <p>Children are the pillar to a better future. Your one donation, one effort can make a difference to one life.</p>
      </div>
    </div>
    <!-- /about content -->

    <!-- about photo -->
    <div class="col-md-offset-1 col-md-6">
      <a href="#" class="about-video">
          <img  src="./img/Nepal.4.jpg" alt="">
        </a>
    </div>
    <!-- /about photo -->
  </div>
  <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /ABOUT -->

<!-- NUMBERS -->
<div id="numbers" class="section">
<!-- container -->
<div class="container">
  <!-- row -->
  <div class="row">
    <!-- number -->
    <div class="col-md-3 col-sm-6">
      <div class="number">
        <i class="fa fa-smile-o"></i>
        <h3>7</h3>
        <span>Donors</span>
      </div>
    </div>
    <!-- /number -->

    <!-- number -->
    <div class="col-md-3 col-sm-6">
      <div class="number">
        <i class="fa fa-heartbeat"></i>
        <h3>100</h3>
        <span>Children Saved</span>
      </div>
    </div>
    <!-- /number -->

    <!-- number -->
    <div class="col-md-3 col-sm-6">
      <div class="number">
        <i class="fa fa-money"></i>
        <h3>10K</h3>
        <span>Donated</span>
      </div>
    </div>
    <!-- /number -->

    <!-- number -->
    <div class="col-md-3 col-sm-6">
      <div class="number">
        <i class="fa fa-handshake-o"></i>
        <h3>10</h3>
        <span>Volunteers</span>
      </div>
    </div>
    <!-- /number -->
  </div>
  <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /NUMBERS -->

<!-- CAUSESS -->
<div id="causes" class="section">
<!-- container -->
<div class="container">
  <!-- row -->
  <div class="row">

    <!-- section title -->
    <div class="col-md-8 col-md-offset-2">
      <div class="section-title text-center">
        <h2 class="title">Our Causes</h2>
        <p class="sub-title">In a developing country like Nepal, where poverty has its roots in everyone's economy; children end up becoming the victim of it. Each donation counts</p>
      </div>
    </div>
    <!-- section title -->

    <!-- causes -->
    <div class="col-md-4">
      <div class="causes">
        <div class="causes-img">
          <a href="single-cause.html">
              <img src="./img/post-1.jpg" alt="">
            </a>
        </div>
        <div class="causes-progress">
          <div class="causes-progress-bar">
            <div style="width: 87%;">
              <span>87%</span>
            </div>
          </div>
          <div>
            <span class="causes-raised">Raised: <strong>52.000$</strong></span>
            <span class="causes-goal">Goal: <strong>90.000$</strong></span>
          </div>
        </div>
        <div class="causes-content">
          <a href="/donate" class="primary-button causes-donate">Donate Now</a>
        </div>
      </div>
    </div>
    <!-- /causes -->

<!-- CTA -->
<div id="cta" class="section">
<!-- background section -->
<div class="section-bg" style="background-image: url(./img/background-1.jpg);" data-stellar-background-ratio="0.5"></div>
<!-- /background section -->

<!-- container -->
<div class="container">
  <!-- row -->
  <div class="row">
    <!-- cta content -->
    <div class="col-md-offset-2 col-md-8">
      <div class="cta-content text-center">
        <h1>Become A Volunteer</h1>
        <p class="lead">By becoming a volunteer, you get to participate in various activites and help the kids, also, help to put a smile in their faces. Become a volunteer and join us now.</p>
        <a href="/register" class="primary-button">Join Us Now!</a>
      </div>
    </div>
    <!-- /cta content -->
  </div>
  <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /CTA -->

<!-- EVENTS -->
<div id="events" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- section title -->
      <div class="col-md-8 col-md-offset-2">
        <div class="section-title text-center">
          <h2 class="title">Upcoming Events</h2>
        </div>
      </div>
      <!-- /section title -->

      <!-- event -->
      <div class="col-md-6">
        <div class="event">
          <div class="event-img">
            <a href="single-event.html">
              <img src="./img/event-1.jpg" alt="">
            </a>
          </div>
          <div class="event-content">
            <h3><a href="single-event.html">Health Checkup Program</a></h3>
            <ul class="event-meta">
              <li><i class="fa fa-clock-o"></i> 29 December, 2019 | 8:00AM - 11:00PM</li>
              <li><i class="fa fa-map-marker"></i> Teaching Hospital, Maharajgung</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <!-- /event -->

      <!-- event -->
      <div class="col-md-6">
        <div class="event">
          <div class="event-img">
            <a href="single-event.html">
              <img src="./img/event-2.jpg" alt="">
            </a>
          </div>
          <div class="event-content">
            <h3><a href="single-event.html">Taking kids to the zoo.</a></h3>
            <ul class="event-meta">
              <li><i class="fa fa-clock-o"></i> 1 January, 2019 | 10:00AM - 4:00PM</li>
              <li><i class="fa fa-map-marker"></i> Jawlakhel</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <!-- /event -->

      <div class="clearfix visible-md visible-lg"></div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /EVENTS -->


<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/main.js"></script>
@endsection