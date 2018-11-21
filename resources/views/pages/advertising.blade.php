@extends('layout.main')

@section('title', 'Online Advertsing | PPC, Remarketing, Social Media Adv')

@section('description', 'All types of Digital Advertising for your Business Online. Pay Per Click (PPC), Remarketing, Social Media Advertising and Video Advertising by WellKnown Agency')

@section('keywords', 'Advertising, ads agency, ppc, pay per click, remarketing campaigns, video advertising')

@section('preload')

@stop

@section('customcss')
<meta property="og:image" content="/images/sem.jpg" />
<style>
canvas {
	position: absolute;
	width: 100%;
  height: 100%;
}
</style>
@stop

@section('content')
<div class="wrapper">
  <div class="header-2">
    <div class="page-header header-filter" >
      <canvas></canvas>
      <canvas></canvas>
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center" style="padding-top: 100px;">
                    <h1 class="title">Online Advertising</h1>
                    <h5 class="description">Advertise your business through Search or Social Media with the best possible ROI</h5>
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
<div class="section section-pills">
	<div class="container">
    <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
            <h2 class="title text-center">How do we create advertising?</h2>
        </div>
    </div>
    <br>
		<div id="navigation-pills">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-lg-2 col-md-10">
							<ul class="nav nav-pills nav-pills-primary nav-pills-icons flex-column" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#link10" role="tablist">
										<i class="fas fa-bullseye fa-2x"></i>
                    Goals and Ideas
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
										<i class="fas fa-globe fa-2x"></i>
										Strategy and Tactics
									</a>
								</li>
                <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#link12" role="tablist">
										<i class="fab fa-creative-commons-share"></i>
										Creating and Testing
									</a>
								</li>
                <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#link13" role="tablist">
										<i class="fas fa-clipboard-check"></i>
										Deployment and Managing
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-10">
							<div class="tab-content">
								<div class="tab-pane active" id="link10">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="content-ads">It's essential to understand what you exactly looking for to get from the advertising.
                        It helps, first of all, to understand what auditory is the best for you, what platform to use to catch your Ideal Client and more...
                        Ideal Client is important part for any advertising campaign and any marketing plan.
                        For Ads is important to have An overall Idea, we will make sure you get all you can from each penny you spend.
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <img src="images/advertising/ideas.jpg" alt="Card image cap" style="margin-left:auto; margin-right:auto; display:block;">
                    </div>
                  </div>
								</div>
								<div class="tab-pane" id="link11">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="content-ads">
                        After understanding your business Goals and Ideas we come to the most important part. Without Strategy your advertising money can "fly away" and give zero results.
                        Our Agency have tried different tactics for different businesses and cases. All this knowledge helps us to make sure,
                        that strategy we use give your business real results.
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <img class="" src="images/advertising/strategy.jpg" alt="Card image cap" style="margin-left:auto; margin-right:auto; display:block;">
                    </div>
                  </div>
								</div>
                <div class="tab-pane" id="link12">
                  <div class="row">
                    <div class="col-md-12 ">
                      <p class="content-ads">
                        Now we come to the creative part of the process. Not a secret for any Advertising campaign creativity is important, in some cases
                        it takes first place. WellKnown Agency team created ads for a lot of industries and we have already an idea which kewords work best.
                        But still any ad campaign needs testing, so it takes in our creation proces a huge part.
                      </p>
                    </div>
  								</div>
                  <div class="row">
                    <div class="col-md-12">
                        <img class="" src="images/advertising/creating.jpg" alt="Card image cap" style="margin-left:auto; margin-right:auto; display:block;">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="link13">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="content-ads">
                        After all the above steps are done we finnaly can deploy your advertising. Any online advertising campaign needs 2 things:
                        <br>Analytics and Managing.<br>
                        Analytics gives you information hwo to improve you campaign and sometimes it's really a long process, but eventeally gives huge results.
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <img class="" src="images/advertising/managing.jpg" alt="Card image cap" style="margin-left:auto; margin-right:auto; display:block;">
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
</div>
<div class="features-8 section-image" style="background-image: url('images/advertising/bg-1.jpg')">

    <div class="col-md-8 ml-auto mr-auto text-center">
        <h2 class="title">Types of Online Advertising</h2>
        <h4 class="description">There are many types of advertising you can use, but usually you need few to get real results.</h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/advertising/ppc.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons fa fa-bullhorn"></i>
                        </div>
                        <h4 class="info-title">PPC</h4>
                        <p class="description">Pay Per Click advertising in search like Google or Bing</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/advertising/remarketing.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons fa fa-bullseye"></i>
                        </div>
                        <h4 class="info-title">Remarketing</h4>
                        <p class="description">Great extension for any advertising campaign </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/advertising/smm.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons fa fa-share-alt"></i>
                        </div>
                        <h4 class="info-title">Social Media Ads</h4>
                        <p class="description">Extend your Social Media with any type of advertising </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/advertising/brand.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons fas fa-gem"></i>
                        </div>
                        <h4 class="info-title">Brand Awareness</h4>
                        <p class="description">Make sure your customers know your brand</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-basic-components">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <h2 class="title">Online Advertising</h2>
        <h6 class="category">Huge part of any business</h6>
        <h5 class="description">In the era of Internet there is no business that can ignore <b>online advertising</b>.
          People search for things to buy online even if it right in front of them. It helps you business not only to build a ROI system
          where we can help you to know how much any client cost, but also expend your brand to the next level.</h5>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="image-container">
          <img class="components-macbook" src="images/img/ipad1.webp" alt="">
          <img class="table-img" src="/images/advertising/anton.jpg" alt="">
          <img class="share-btn-img" src="/images/advertising/stars.jpg" alt="">
          <img class="coloured-card-btn-img" src="/images/advertising/bannerads.jpg" alt="">
          <img class="coloured-card-img" src="/images/advertising/facebookads.jpg" alt="">
          <img class="social-img" src="/images/google.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog -->
<div class="section section-plain-cards">
	<div class="container">
		<div class="title">
			<h3>Latest Blog Posts
			</h3>
		</div>
		<div class="row">
			@foreach( $posts as $post )
			<div class="col-md-6 col-lg-4">
				<div class="card card-blog card-plain">
					<div class="card-image">
						<a href="/blog/{{ $post->slug }}">
							<img class="img img-raised rounded" src="/images/blog/{{ $post->image }}">
						</a>
					</div>
					<div class="card-body text-center">
						<h6 class="category text-danger">
							<i class="now-ui-icons media-2_sound-wave"></i> {{ $post->category['name'] }}
						</h6>
						<h5 class="card-title">
							<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
						</h5>
						<p class="card-description">
							{{ str_limit($post->excerpt, 100) }}
						</p>
						<div class="card-footer">
							<a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read Article</a>
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
<script>
/* because me lazy */
Object.getOwnPropertyNames(Math).map(function(p) {
	window[p] = Math[p];
});

var HEX_CRAD = 32,
    HEX_BG = '#383838',
    HEX_HL = '#606060',
		HEX_HLW = 2,
		HEX_GAP = 4,
		NEON_PALETE = [
			'#cb3301', '#ff0066',
			'#ff6666', '#feff99',
			'#ffff67', '#ccff66',
			'#99fe00', '#fe99ff',
			'#ff99cb', '#fe349a',
			'#cc99fe', '#6599ff',
			'#00ccff', '#ffffff'
		],
		T_SWITCH = 64,

		unit_x = 3*HEX_CRAD + HEX_GAP*sqrt(3),
		unit_y = HEX_CRAD*sqrt(3)*.5 + .5*HEX_GAP,
		off_x = 1.5*HEX_CRAD + HEX_GAP*sqrt(3)*.5,

		/* extract a work palette */
		wp = NEON_PALETE.map(function(c) {
			var num = parseInt(c.replace('#', ''), 16);

			return {
				'r': num >> 16 & 0xFF,
				'g': num >> 8 & 0xFF,
				'b': num & 0xFF
			};
		}),
		nwp = wp.length, csi = 0,

		f = 1/T_SWITCH,

		c = document.querySelectorAll('canvas'),
		n = c.length, w, h, _min,
		ctx = [],
		grid, source = null,
		t = 0, request_id = null;

var GridItem = function(x, y) {
	this.x = x || 0;
	this.y = y || 0;
	this.points = { 'hex': [], 'hl': [] };

	this.init = function() {
		var x, y, a, ba = PI/3,
				ri = HEX_CRAD - .5*HEX_HLW;

		for(var i = 0; i < 6; i++) {
			a = i*ba;
			x = this.x + HEX_CRAD*cos(a);
			y = this.y + HEX_CRAD*sin(a);

			this.points.hex.push({
				'x': x,
				'y': y
			});

			if(i > 2) {
				x = this.x + ri*cos(a);
				y = this.y + ri*sin(a);

				this.points.hl.push({
					'x': x,
					'y': y
				});
			}
		}
	};

	this.draw  = function(ct) {
		for(var i = 0; i < 6; i++) {
			ct[(i === 0?'move':'line')+ 'To'](
				this.points.hex[i].x,
				this.points.hex[i].y
			);
		}
	};

	this.highlight = function(ct) {
		for(var i = 0; i < 3; i++) {
			ct[(i === 0?'move':'line')+ 'To'](
				this.points.hl[i].x,
				this.points.hl[i].y
			);
		}
	};

	this.init();
};

var Grid = function(rows, cols) {
	this.cols = cols || 16;
	this.rows = rows || 16;
	this.items = [];
	this.n = this.items.length;

	this.init = function() {
		var x, y;

		for(var row = 0; row < this.rows; row++) {
			y = row*unit_y;

			for(var col = 0; col < this.cols; col++) {
				x = ((row%2 == 0)?0:off_x) + col*unit_x;

				this.items.push(new GridItem(x, y));
			}
		}

		this.n = this.items.length;
	};

	this.draw = function(ct) {
		ct.fillStyle = HEX_BG;
		ct.beginPath();

		for(var i = 0; i < this.n; i++) {
			this.items[i].draw(ct);
		}

		ct.closePath();
		ct.fill();

		ct.strokeStyle = HEX_HL;
		ct.beginPath();

		for(var i = 0; i < this.n; i++) {
			this.items[i].highlight(ct);
		}

		ct.closePath();
		ct.stroke();
	};

	this.init();
};

var init = function() {
	var s = getComputedStyle(c[0]),
			rows, cols;

	w = ~~s.width.split('px')[0];
	h = ~~s.height.split('px')[0];
	_min = .75*min(w, h);

	rows = ~~(h/unit_y) + 2;
	cols = ~~(w/unit_x) + 2;

	for(var i = 0; i < n; i++) {
		c[i].width = w;
		c[i].height = h;
		ctx[i] = c[i].getContext('2d');
	}

	grid = new Grid(rows, cols);
	grid.draw(ctx[1]);

	if(!source) {
		source = { 'x': ~~(w/2), 'y': ~~(h/2) };
	}

	neon();
};

var neon = function() {
	var k = (t%T_SWITCH)*f,
			rgb = {
				'r': ~~(wp[csi].r*(1 - k) +
						 wp[(csi + 1)%nwp].r*k),
				'g': ~~(wp[csi].g*(1 - k) +
						 wp[(csi + 1)%nwp].g*k),
				'b': ~~(wp[csi].b*(1 - k) +
						 wp[(csi + 1)%nwp].b*k)
			},
			rgb_str = 'rgb(' + rgb.r + ',' + rgb.g + ',' + rgb.b + ')',
			light = ctx[0].createRadialGradient(
				source.x, source.y, 0,
				source.x, source.y, .875*_min
			), stp;

	stp = .5 - .5*sin(7*t*f)*cos(5*t*f)*sin(3*t*f);

	light.addColorStop(0, rgb_str);
	light.addColorStop(stp, 'rgba(0,0,0,.03)');

	fillBackground('rgba(0,0,0,.02)');
	fillBackground(light);

	t++;

	if(t%T_SWITCH === 0) {
		csi++;

		if(csi === nwp) {
			csi = 0;
			t = 0;
		}
	}

	request_id = requestAnimationFrame(neon);
};

var fillBackground = function(bg_fill) {
	ctx[0].fillStyle = bg_fill;
	ctx[0].beginPath();
	ctx[0].rect(0, 0, w, h);
	ctx[0].closePath();
	ctx[0].fill();
};

init();

addEventListener('resize', init, false);

addEventListener('mousemove', function(e) {
	source = { 'x': e.clientX, 'y': e.clientY };
}, false);
</script>
@stop
