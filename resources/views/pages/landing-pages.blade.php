@extends('layout.main')

@section('title', 'Web Design and Development | WellKnown')

@section('description', 'Web Design and development of your Business website. Responsive, fast and efficient. Admin Panel with simple CRM and CMS systems.')

@section('keywords', 'website design, simple crm and cms systems, website developers, responsive web design, web design and development')


@section('customcss')
<style>
canvas {
	position: absolute;
	width: 100%;
  height: 100%;
}
</style>
@stop

@section('content')
<!-- Header -->
<div class="wrapper">
	<div class="page-header page-header-small">
			<canvas></canvas>
			<canvas></canvas>
			<div class="container">
					<div class="row">
							<div class="col-md-8 ml-auto mr-auto text-center" style="padding-top: 5px;">
									<h1 class="title landing_page_header">NEED A LANDING PAGE THAT REALLY INCREASE YOUR SALES? </h1>
							</div>
							<div class="col-md-10 ml-auto mr-auto">
									<div class="card card-raised card-form-horizontal card-plain" data-background-color="">
											<div class="card-body">
												<a href="#freeconsultation" class="btn btn-primary btn-round btn-l">Order Now</a>
											</div>
									</div>
							</div>
					</div>
			</div>

	</div>
	<div class="section section-about-us">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<h2 class="title">Why Landing Page is Vital Today?</h2>
					<h5 class="description">Choosing is difficult, and people really do not like to do it. They want to be convinced of the right choice. Remember how difficult it is to choose a movie in an online movie theater or pizza on the site. Landing helps with the choice. The choice has already been made, we just convince the user that this choice is correct and necessary.</h5>
				</div>
			</div>
			<div class="separator separator-primary"></div>
			<div class="section-story-overview">
				<div class="row">
					<div class="col-md-6">
						<!-- First image on the left side -->
						<div class="image-container image-left" style="background-image: url('../assets/img/bg38.jpg')">
							<p class="blockquote blockquote-primary">It's important to formulate an exact proposal for your audience and once again determine why you want to use the landing.
							</p>
						</div>
						<!-- Second image on the left side of the article -->
						<div class="image-container image-left-bottom" style="background-image: url('../assets/img/bg24.jpg')"></div>
					</div>
					<div class="col-md-5">
						<!-- First image on the right side, above the article -->
						<div class="image-container image-right" style="background-image: url('../assets/img/bg39.jpg')"></div>
						<h3>When do We Use Landings?</h3>
						<p>In brief, landing page is useful if you know exactly what and whom you are selling.</p>
							<h6 class="landing_page_step">1. Sell goods and services</h6>
						<p>Landing can sell anything: jewels, cinema tickets, consultations, and soft toys. An important condition - the goods count must be little. If you have a catalog of goods in 10 categories, it is better to make an online store.
						</p>
							<h6 class="landing_page_step">2. Collect leads</h6>
						<p>Lead is a visitor who is likely to buy something from you. For example, 10 people came to the website, 5 reached the presentation section, two downloaded it. These two are the leads you can operate with. You can send emails, advertisements, sell additional services.
						</p>
							<h6 class="landing_page_step">3. When the main site is already exist</h6>
						<p>If you have a regular website, you can use a landing page for individual ad campaigns. For example, you have an consulting agency. On the site you can talk about yourself, the conditions of collaboration and completed projects. Advertise a separate services is better on the landing.
						</p>
							<h6 class="landing_page_step">4. When there is no main website</h6>
						<p>Well, no, and not necessary. If you sew leather wallets or cotton dresses, you do not have to pretend a big atelier. Enough to make a landing page that will only advertise your items.
						</p>
							<h6 class="landing_page_step">5. When it is a startup</h6>
						<p>Landing will help you understand whether your product is needed in the market. You can launch a one-page site in a few hours, and advertising will lead to the first customers.
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="features-4" style="padding-top:0px; background-color:#FAFAFA;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<h2 class="title">Not convinced yet?</h2>
				</div>
			</div>
			<div class="row">
					<div class="col-md-4">
							<div class="info info-hover icon-landing">
									<div class="icon icon-landing icon-circle">
											<i class="now-ui-icons education_hat"></i>
									</div>
									<h4 class="info-title">Not cleary understand the technique of creating a good landing?</h4>
									<p class="landing_page_questions">We combined theory and practice to built a consistent strategy: what you need to know and what to be able to make web project successful.</p>
							</div>
					</div>

					<div class="col-md-4">
							<div class="info info-hover">
									<div class="icon icon-grey icon-circle">
											<i class="now-ui-icons users_circle-08"></i>
									</div>
									<h4 class="info-title">Don't understand how to define your target audience?</h4>
										<br>
										<br>
									<p class="landing_page_questions">We have years of experience helping different businesses to define  to discover their exact customer.</p>
							</div>
					</div>

					<div class="col-md-4">
							<div class="info info-hover">
									<div class="icon icon-grey icon-circle">
											<i class="now-ui-icons design_vector"></i>
									</div>
									<h4 class="info-title">Do not know how to mobilize your creative potential?</h4>
										<br>
										<br>
									<p class="landing_page_questions">We know how to avoid boring decisions that are not impressive, and what to do so that the landing catches the clients.</p>
							</div>
					</div>
			</div>

		</div>
	</div>
	<div class="pricing-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto text-center">
					<h2 class="title">Pick the best plan fits for you</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card card-pricing card-plain">
						<div class="card-body">
							<h6 class="category">Extended</h6>
							<h1 class="card-title">
								<small>$</small>599</h1>
							<ul>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Design concept
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Optimized for your target audience
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Unlimited Revisions
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Fully responsive
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Compatible with any browser
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Additional icons and illustrations
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Stock images (up to 3)
								</li>
							</ul>
							<a href="/contact-us" class="btn btn-primary btn-round">
								Order Now
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-pricing card-background card-raised" style="background-color:#FFCDD2;">
						<div class="card-body">
							<h6 class="category text-info">Standart</h6>
							<h1 class="card-title">
								<small>$</small>399</h1>
								<ul>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Design concept
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Optimized for your target audience
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 5 Revisions
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Fully responsive
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Compatible with any browser
									</li>
									<li>
										<b>
										</b> Additional icons and illustrations
									</li>
									<li>
										<b>
										</b> Stock images (up to 3)
									</li>
								</ul>
							<a href="/contact-us" class="btn btn-neutral btn-round">
								Order Now
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-pricing card-plain">
						<div class="card-body">
							<h6 class="category">Basic</h6>
							<h1 class="card-title">
								<small>$</small>199</h1>
								<ul>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Design concept
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Optimized for your target audience
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 3 Revisions
									</li>
									<li>
										<b>
										</b> Fully responsive
									</li>
									<li>
										<b>
										</b> Compatible with any browser
									</li>
									<li>
										<b>
										</b> Additional icons and illustrations
									</li>
									<li>
										<b>
										</b> Stock images (up to 3)
									</li>
								</ul>
							<a href="/contact-us" class="btn btn-primary btn-round">
								Order Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-contact-us text-center">
		<div class="container">
			<h2 class="title">Want to work with us?</h2>
			<p class="description">Your project is very important to us.</p>
			<div class="row">
				<div class="col-lg-6 text-center ml-auto mr-auto col-md-8">
					<div class="input-group input-lg">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="First Name...">
					</div>
					<div class="input-group input-lg">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Email Here...">
					</div>
					<div class="textarea-container">
						<textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
					</div>
					<div class="send-button">
						<a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
					</div>
				</div>
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
    HEX_BG = '#171717',
    HEX_HL = '#2a2a2a',
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
