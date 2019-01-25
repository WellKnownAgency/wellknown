@extends('layout.maincase')

@section('title', 'Case Studies | WellKnown')

@section('description', 'Web Design and development of your Business website. Responsive, fast and efficient. Admin Panel with simple CRM and CMS systems.')

@section('keywords', '')


@section('customcss')
@stop

@section('content')
<!-- Header -->
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
		@foreach($scases as $scase)
		@if ($loop->iteration % 2 != 0)
		<div class="row">

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

		</div>
		@endif
		@endforeach
		@foreach($scases as $scase)
		@if ($loop->iteration % 2 == 0)
		<div class="row">

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
		@endif
		@endforeach
	</div>


</div>
@stop
@section('customjs')
@stop
