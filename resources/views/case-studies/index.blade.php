@extends('layout.maincase')

@section('title', 'Case Studies | WellKnown')

@section('description', 'Web Design and development of your Business website. Responsive, fast and efficient. Admin Panel with simple CRM and CMS systems.')

@section('keywords', '')


@section('customcss')
@stop

@section('content')
<!-- Header -->
<!--
<div class="wrapper">
	<div class="page-header page-header-small" style="background-image: url('../images/smm/smm-header-drk.jpg');">
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

<div class="projects-4" data-background-color="gray">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<h6 class="category text-muted">Our work</h6>
				<h2 class="title">Some of Our Awesome Projects - 4</h2>
			</div>
		</div>
		<div class="row">
			  @foreach($scases as $scase)
				@if ($loop->iteration % 2 != 0)
			<div class="col-md-6 px-0">
				<div class="card card-fashion card-background"  style="background-image: url('/images/cases/{{ $scase->header_image }}')">
					<div class="card-body">
						<div class="card-title text-left">
							<h2>
								<a href="/cases/{{ $scase->slug }}">
									{{ $scase->title }}
								</a>
							</h2>
						</div>
						<div class="card-footer text-left">
							<div class="stats">
								<span>
									<i class="now-ui-icons objects_globe"></i>{{ $scase->excerpt }}
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 px-0">
				<div class="card-container">
					<div class="card card-fashion">
						<div class="card-title">
							<a href="#pablo">
								<h4>
									<a href="{{ $scase->slug }}">
										{{ $scase->dscr }}
									</a>
								</h4>
							</a>
						</div>
						<div class="card-body">
							<div class="card-footer">
								<div class="stats">
									<span>
										<i class="now-ui-icons education_paper"></i> {{ $scase->excerpt }}
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-fashion card-background" style="background-image: url('/images/cases/{{ $scase->mobile_image }}')">
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="row">
			@foreach($scases as $scase)
			@if ($loop->iteration % 2 == 0)
			<div class="col-md-6 px-0">
				<div class="card-container">
					<div class="card card-fashion card-background" style="background-image: url('/images/cases/{{ $scase->mobile_image }}')">
					</div>
					<div class="card card-fashion">
						<div class="card-title">
							<a href="#pablo">
								<h4>
									<a href="{{ $scase->slug }}">
										{{ $scase->dscr }}
									</a>
								</h4>
							</a>
						</div>
						<div class="card-body">
							<div class="card-footer">
								<div class="stats">
									<span>
										<i class="now-ui-icons education_paper"></i> {{ $scase->excerpt }}
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 px-0">
				<div class="card card-fashion card-background" style="background-image: url('/images/cases/{{ $scase->header_image }}')">
					<div class="card-body">
						<div class="card-title text-left">
							<h2>
								<a href="/cases/{{ $scase->slug }}">
									{{ $scase->title }}
								</a>
							</h2>
						</div>
						<div class="card-footer text-left">
							<div class="stats">
								<span>
									<i class="now-ui-icons objects_globe"></i>{{ $scase->excerpt }}
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	@endforeach

</div>


<div class="projects-2">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<h6 class="text-muted">Our work</h6>
				<h2 class="title">Some of Our Awesome Products - 2</h2>
				<h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
				<div class="section-space"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card card-plain">
					<a href="https://www.creative-tim.com/product/now-ui-kit" target="_blank">
						<div class="card-image">
							<img class="img-raised rounded" src="https://s3.amazonaws.com/creativetim_bucket/products/38/original/opt_mk_thumbnail.jpg?1458052306" />
						</div>
					</a>
					<div class="card-body">
						<a href="https://www.creative-tim.com/product/now-ui-kit" target="_blank">
							<h4 class="card-title">Now UI Kit Free</h4>
						</a>
						<h6 class="category text-primary">Free UI Kit</h6>
						<p class="card-description">
							Now UI Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Invision. It's a great pleasure to introduce to you the Now UI concepts in an easy to use and beautiful set of components.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card card-plain">
					<a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
						<div class="card-image">
							<img class="img-raised rounded" src="https://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg?1449352503" />
						</div>
					</a>
					<div class="card-body">
						<a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
							<h4 class="card-title">Light Bootstrap Dashboard Pro</h4>
						</a>
						<h6 class="category text-primary">Premium Template</h6>
						<p class="card-description">
							Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. Forget about boring dashboards and grab yourself a copy to kickstart new project!
						</p>
					</div>
				</div>
			</div>
		</div>
</div>

-->

    <!--     *********   CASE Studies     *********      -->
    <div class="projects-1" style="background-color:#F5F5F5; margin-top:100px;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title">WellKnown Case Studies</h1>
          </div>
        </div>
        <div class="container-fluid">
        <div class="row">
					@foreach($scases as $scase)
          <div class="col-md-6"  style="margin-bottom:30px;">
            <div class=" wkn-case-card  outer-div">
              <div  onclick="window.location='case-studies/{{ $scase->slug }}';" class="inner-div card card-background card-background-product card-no-shadow" style="background-image: url('/images/cases/{{ $scase->header_image }}'); cursor: pointer;">
                <div class="card-body">
                  <h6 class="category">{{ $scase->title_work }}</h6>
                  <h2 class="card-title">
                    {{ $scase->title }}
                  </h2>
                  <br>
  								<p class="card-description">
                    {{ str_limit ($scase->body, 150) }}
                  </p>
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
