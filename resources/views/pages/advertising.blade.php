@extends('layout.main')

@section('title', 'Advertsing | WellKnown Agency')

@section('description', 'All types of Digital Advertising for your Business. PPC, Remarketing and video ads by WellKNown Digital Agency')

@section('keywords', 'Advertising, ads agency, ppc, pay per click, reamrketing campaigns, video advertising')

@section('preload')
<link rel="preload" href="/images/bgmain/sem.jpg" as="image">
@stop

@section('content')
<div class="wrapper">
  <div class="header-2">
    <div class="page-header header-filter" >
        <div class="page-header-image" style="background-image: url('/images/bgmain/sem.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center" style="padding-top: 100px;">
                    <h1 class="title">Advertising</h1>
                    <h5 class="description">Create catching advertising</h5>
                </div>
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-raised card-form-horizontal card-plain" data-background-color="">
                        <div class="card-body">
                          <a href="#" class="btn btn-primary btn-round btn-l">Free consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-pills">
	<div class="container">
    <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
            <h2 class="title text-center">How we create ads?</h2>
        </div>
    </div>
    <br
		<div id="navigation-pills">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-lg-2 col-md-10">
							<ul class="nav nav-pills nav-pills-primary nav-pills-icons flex-column" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#link10" role="tablist">
										<i class="now-ui-icons objects_umbrella-13"></i>
										Home
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
										<i class="now-ui-icons ui-2_settings-90"></i>
										Settings
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-10">
							<div class="tab-content">
								<div class="tab-pane active" id="link10">
								  Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
								  <br><br>
								  Dramatically visualize customer directed convergence without revolutionary ROI.
								</div>
								<div class="tab-pane" id="link11">
								  Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
								  <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

</div>
@stop
