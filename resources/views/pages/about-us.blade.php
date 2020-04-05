@extends('layout.maincontact')

@section('title', 'Digital Marketing and Advertising Agency | Full Service')

@section('description', 'Our Marketing and Advertisng Agency is ready to provide you with any online digital services for your small business company. Customer Support - Get a Free Consultation.')

@section('keywords', 'Digital Marketing, Online marketing, marketing Agency, Advertising Agency,  Marketing services')

@section('preload')
<link rel="preload" href="/images/about-bg.jpg" as="image">
@stop

@section('content')
<div class="page-header header-filter">
  <div class="page-header-image" style="background-image: url('images/about-bg.jpg');"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 ml-auto text-right">
        <h1 class="title">About us</h1>
        <h4 class="description">The beginning of WellKnown Agency starts with people who started their carrier as Digital Marketers and Web Developers. And it still the same - it's all about people who work here.</h4>
        <br />
        <div class="buttons">
          <a href="#wellknown" class="btn btn-primary btn-lg mr-3">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about-team team-4" id="wellknown">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <h2 class="title" >We are WellKnown Professionals</h2>
        <h4 class="description">Here is our small team of professionals who creates everything we do in our Agency.</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
        <div class="card card-profile card-plain">
          <div class="row">
            <div class="col-md-5">
              <div class="card-image">
                <a href="#pablo">
                  <img class="rounded-circle img-raised" src="../images/taraskim.jpg" />
                </a>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h4 class="card-title">Taras Kim</h4>
                <h6 class="category">Marketing Specialist</h6>
                <p class="card-description">
                  SEO, SMM, Content Marketing, Advertising
                </p>
                <div class="card-footer">
                  <a href="https://twitter.com/Taras_Kim" target="_blank" class="btn btn-icon btn-neutral btn-twitter"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.facebook.com/kimtaras" target="_blank" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                  <a href="https://www.linkedin.com/in/taras-kim-477a2756/" target="_blank" class="btn btn-icon btn-neutral btn-linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
        <div class="card card-profile card-plain">
          <div class="row">
            <div class="col-md-5">
              <div class="card-image">
                <a href="#pablo">
                  <img class="rounded-circle img-raised" src="../images/anton.jpg" />
                </a>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h4 class="card-title">Anton Likhnekevich</h4>
                <h6 class="category">Project Manager</h6>
                <p class="card-description">
                  Planing and managing project development.
                </p>
                <div class="card-footer">
                  <a href="#pablo" class="btn btn-icon btn-neutral btn-twitter"><i class="fab fa-twitter"></i></a>
                  <a href="https://wknown.com/about-us" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                  <a href="https://www.linkedin.com/in/anton-likhnekevich-941294165/" class="btn btn-icon btn-neutral btn-linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
        <div class="card card-profile card-plain">
          <div class="row">
            <div class="col-md-5">
              <div class="card-image">
                <a href="#pablo">
                  <img class="rounded-circle img-raised" src="../images/tolik.png" />
                </a>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h4 class="card-title">Anatoliy Zaycev</h4>
                <h6 class="category">Web Developer</h6>
                <p class="card-description">
                  Main programmer in Web Developing
                </p>
                <div class="card-footer">
                  <a href="#pablo" class="btn btn-icon btn-neutral btn-twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#pablo" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                  <a href="#pablo" class="btn btn-icon btn-neutral btn-linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
        <div class="card card-profile card-plain">
          <div class="row">
            <div class="col-md-5">
              <div class="card-image">
                <a href="#pablo">
                  <img class="rounded-circle img-raised" src="/images/martashvedava.jpeg" />
                </a>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h4 class="card-title">Marta Shvedava</h4>
                <h6 class="category">Graphic Design</h6>
                <p class="card-description">
                  Specialist in Visual Design
                </p>
                <br>
                <div class="card-footer">
                  <a href="https://www.behance.net/martisha355" class="btn btn-icon btn-neutral btn-twitter"><i class="fab fa-behance"></i></a>
                  <a href="https://www.facebook.com/marta.shvedova" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                  <a href="https://www.linkedin.com/in/marta-shvedava-b5b73b18a/" class="btn btn-icon btn-neutral btn-linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


		<!--<div class="container-fluid" style="width: auto; height: 400px;" id="map"></div>-->
@stop
