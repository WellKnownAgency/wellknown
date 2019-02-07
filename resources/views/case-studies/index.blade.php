@extends('layout.maincase')

@section('title', 'Case Studies | WellKnown')

@section('description', 'Web Design and development of your Business website. Responsive, fast and efficient. Admin Panel with simple CRM and CMS systems.')

@section('keywords', '')


@section('customcss')

@stop

@section('content')
<!-- Header -->
<div class="wrapper">
	<div class="page-header page-header-small" style="background-image: url('../images/cases/case-studies-bg.jpg');background-repeat: no-repeat;  background-size: auto;">
			<div class="container">
					<div class="row">
							<div class="col-md-10 ml-auto mr-auto text-center" style="padding-top: 5px;">
									<h1 class="title landing_page_header">WellKnown Case Studies</h1>
									<h5 class="page_header_dscr"></h5>
							</div>
							<div class="col-md-10 ml-auto mr-auto">
									<div class="card card-raised card-form-horizontal card-plain" data-background-color="">
											<div class="card-body">
												<a href="#freeconsultation" class="btn btn-primary btn-round btn-l">Free consultation</a>
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
</div>
    <!--     *********   CASE Studies     *********      -->
    <div class="projects-1" style="background-color:#F5F5F5;">
      <div class="container-fluid">
        <div class="container-fluid">
        <div class="row">
					@foreach($scases as $scase)
          <div class="col-md-6"  style="margin-bottom:30px;">
            <div class=" wkn-case-card  outer-div">
              <div  onclick="window.location='case-studies/{{ $scase->slug }}';" class="inner-div card card-background card-background-product card-no-shadow" style="background-image: url('/images/cases/{{ $scase->header_image }}');background: {{$scase->filter_color}}; cursor: pointer;">
                <div class="card-body">
                  <h6 class="category">{{ $scase->title_work }}</h6>
                  <h2 class="card-title">
                    {{ $scase->title }}
                  </h2>
                </div>
              </div>
            </div>
          </div>
					@endforeach
        </div>
      </div>
      </div>
    </div>
@stop
@section('customjs')
@stop
