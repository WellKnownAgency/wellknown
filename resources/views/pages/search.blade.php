@extends('layout.mainservices')

@section('title', 'Search Engine Optimization | SEO Services')

@section('description', 'Our Search Engine Optimization Company provide you with SEO Experts for Your Local Search Business needs. Our SEO Services include offsite, onsite, link building and more.')

@section('keywords', 'Search Engine Optimization Services, SEO Agency, Services Company, Local SEO, SEO Expert')

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
@section('extrahead')
<!-- Event snippet for Contact us conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-823555244/kx7RCOT5rZQBEKzp2YgD',
      'event_callback': callback
  });
  return false;
}
</script>
@stop
@section('content')
<!-- Header -->
<div class="wrapper">
  <div class="header-2">
    <div class="page-header header-filter" >
      <canvas></canvas>
      <canvas></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="padding-top: 100px;">
            <h1 class="title">Search Engine Optimization Services</h1>
            <h4 class="page_header_dscr">With Our SEO Services you will be in top 10 guaranteed!</h4>
          </div>
          <div class="col-md-10 ml-auto mr-auto">
            <div class="card card-raised card-form-horizontal card-plain" data-background-color>
              <div class="card-body" >
                <a href="#freeconsultation" class="btn btn-primary btn-round btn-l">Free consultation</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

		<!-- Coming Home -->
		<section>
      <div class="features-4 " data-background-color="gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Professional SEO Services <br>That Boost Your Business</h2>
              <h5 class="description">
									WellKnown is a perfect SEO company to make your business rapidly growing up. If you want to raise FREE Conversions and Traffic to your Website, we can provide you a SEO Campaign with the best solutions to your particular case, that will help you expand your business on the Internet.</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" class="card-container first-card" data-aos="fade-up"
								 data-aos-easing="linear"
								 data-aos-duration="500">
              <div class="card card-background card-raised" data-background-color style="background-image: url('images/search/optimization.jpg')">
                <div class="info">
                  <div class="icon icon-white">
                    <i class="fa fa-cog"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Website Optimization</h4>
                    <p>Our team will optimize your website for Search Engines.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4"class="card-container first-card" data-aos="fade-up"
								 data-aos-easing="linear"
								 data-aos-duration="600">
              <div class="card card-background card-raised" data-background-color style="background-image: url('images/search/analytics.jpg')">
                <div class="info">
                  <div class="icon icon-white">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Analyzing</h4>
                    <p>We Analyze your Business Industry and learn about your competitors.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4"class="card-container first-card" data-aos="fade-up"
								 data-aos-easing="linear"
								 data-aos-duration="700">
              <div class="card card-background card-raised" data-background-color style="background-image: url('images/search/reporting.jpg')">
                <div class="info">
                  <div class="icon icon-white">
                    <i class="fas fa-flag"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Reporting</h4>
                    <p>Weeekly and monthly reports about your positions in Search.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</section>

		<!-- Iphone X -->
		<section>
      <div class="features-6">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">SEO Company Strategy</h2>
              <h4 class="description">Over the years we established our own SEO strategy, and with no hesitation, we can say: "Your positions will grow up."</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="info info-horizontal" data-aos="zoom-in"
							data-aos-easing="linear"
							data-aos-duration="300">
                <div class="icon icon-info">
                  <i class="fab fa-searchengin"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Keywords Research</h4>
                  <p>The first step of the process is keywords research, which is based on your business segment. Analyzing competitors, average monthly volume and other parametrs, we generate a list of potential keywords.</p>
                </div>
              </div>
              <div class="info info-horizontal" data-aos="zoom-in"
							data-aos-easing="linear"
							data-aos-duration="500">
                <div class="icon icon-danger">
                  <i class="fas fa-globe"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">SEO Strategy</h4>
                  <p>We develop a unique SEO strategy for the particular client. Because each business sphere has different goals, customers and competitors, we make a deep scan of each case before starting a SEO campaign.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="flip-left"
						data-aos-easing="linear"
						data-aos-duration="400">
              <div class="phone-container">
                <img src="images/search/iphone-x.png" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="info info-horizontal"
							data-aos="zoom-in"
							data-aos-easing="linear"
							data-aos-duration="700">
                <div class="icon icon-primary">
                  <i class="fas fa-edit"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Onsite Optimization</h4>
                  <p>The next step is to check website code and bring it to the correct structure. Optimizing code and pictures, page titles and meta descriptions are only a small part.</p>
                </div>
              </div>
              <div class="info info-horizontal"
							data-aos="zoom-in"
							data-aos-easing="linear"
							data-aos-duration="900">
                <div class="icon icon-success">
                  <i class="fas fa-link"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Link Building</h4>
                  <p>The literate link building process is vital for every SEO campaign today. Fortunately, we have significant experience and we can build the most advanced link building strategy with guaranteed results.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</section>

		<div class="section call-to-action-section" data-background-color="gray">
			<div class="row" style="margin-left: 0; margin-right:0;">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<h4>Any Questions?</h4>
					<h5>Ready to get started? Call  <a href="tel:3395450956">(339) 545-0956</span></h5>
				</div>
			</div>
			<div class="row" style="margin-left: 0; margin-right:0;">
				<div class= "col-md-8 ml-auto mr-auto text-center">
					<a href="/contact-us" class="btn btn-primary btn-round btn-l" style="margin-top: 30px; margin-bottom: 40px;"
						data-aos="flip-up"
						data-aos-duration="1000">GET A FREE QUOTE </a>
				</div>
			</div>
		</div>

		<!--     *********    TESTIMONIALS 2     *********      -->
		<div class="section section-testimonials">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">What Our Clients Say</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleIndicators2" class="carousel slide">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active justify-content-center">
                <div class="card card-testimonial card-plain">
                  <div class="card-avatar">
                    <a href="https://clutch.co/profile/wellknown-agency"  target="_blank">
                      <img class="img img-raised rounded" src="/images/dmitrii.jpg"  data-aos="zoom-in" data-aos-duration="500"/>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="https://clutch.co/profile/wellknown-agency" target="_blank"><p class="card-description" style="font-size:1.5em;">"Their ability to increase our online visibility in a market as competitive as ours shows that they were the right choice!"
                    </p></a>
                    <p class="card-title" style="font-size:2em; margin-bottom:5px;">Dmitrii Malashkin</p>
                    <a href="https://clutch.co/profile/wellknown-agency" target="_blank"><p class="category text-primary">Owner, Born to Move, LLC</p></a>
                    <div class="card-footer">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!--     *********    END TESTIMONIALS 2      *********      -->
    <div class="pricing-1 section-image" id="pricing-1" style="background-image: url('/images/search/seo-bg-prices.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
                <h2 class="title">SEO Services Packages</h2>
                <h4 class="description">We totally understand that these SEO packages not always can fit you needs, for more detailes contact us</h4>
                <div class="section-space"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3"data-aos="fade-right"
							data-aos-easing="linear"
							data-aos-duration="1200">
                <div class="card card-pricing card-plain">
                    <div class="card-body">
                        <h5 class="category ">Single</h5>
                        <div class="icon icon-warning">
                            <i class="now-ui-icons media-1_button-power"></i>
                        </div>
                        <h3 class="card-title">$300</h3>
                        <ul>
                            <li>One Page SEO</li>
														<li>Keywords Research</li>
														<li>Up to 10 Keywords Tracking</li>
														<li>Weekly and Monthly Reporting</li>
                        </ul>
                        <a href="/contact-us" class="btn btn-neutral btn-warning btn-round">Contact us</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3"data-aos="fade-right"
							data-aos-easing="linear"
							data-aos-duration="1000">
                <div class="card card-pricing">
                    <div class="card-body">
                        <h5 class="category">Double</h5>
                        <div class="icon icon-primary">
                            <i class="now-ui-icons objects_diamond"></i>
                        </div>
                        <h3 class="card-title">$500</h3>
                        <ul>
													<li>Two Pages SEO</li>
													<li>Keywords Research</li>
													<li>Up to 25 Keywords Tracking</li>
													<li>Weekly and Monthly Reporting</li>
                        </ul>
                        <a href="/contact-us" class="btn btn-primary btn-round">Contact us</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3"data-aos="fade-right"
							data-aos-easing="linear"
							data-aos-duration="700">
                <div class="card card-pricing card-plain">
                    <div class="card-body">
                        <h5 class="category ">Triple</h5>
                        <div class="icon icon-success">
                            <i class="now-ui-icons media-2_sound-wave"></i>
                        </div>
                        <h3 class="card-title">$800</h3>
                        <ul>
													<li>Three Pages SEO</li>
													<li>Keywords Research</li>
													<li>Up to 50 Keywords Tracking</li>
													<li>Weekly and Monthly Reporting</li>
                        </ul>
                        <a href="/contact-us" class="btn btn-neutral btn-success btn-round">Contact us</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3"	data-aos="fade-right"
							data-aos-easing="linear"
							data-aos-duration="400">
                <div class="card card-pricing card-plain">
                    <div class="card-body">
                        <h5 class="category">Quadruple</h5>
                        <div class="icon icon-danger">
                            <i class="now-ui-icons education_atom"></i>
                        </div>
                        <h3 class="card-title">$1200</h3>
                        <ul>
													<li>Five Pages SEO</li>
													<li>Keywords Research</li>
													<li>Up to 100 Keywords Tracking</li>
													<li>Weekly and Monthly Reporting</li>
                        </ul>
                        <a onclick="return gtag_report_conversion('https://wknown.com/contact-us');" href="/contact-us" class="btn btn-neutral btn-danger btn-round">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>

<div class="section">
	<div class="col-md-12 ml-auto mr-auto">
		<div class="container">
		<h3 class="title" style="font-size:1.825em; text-align:center; padding-bottom:15px;">F.A.Q. ABOUT SEO SERVICES
 		</h3>
		<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
			<div class="card card-plain"
			data-aos="fade-down" data-aos-duration="600">

				<div class="card-header smm-collapse" role="tab" id="headingOne">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						HOW MUCH IS A SEO, HOW DO I GET A CALCULATION OF COST?
						<i class="now-ui-icons arrows-1_minimal-down"></i>
					</a>
				</div>
				<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
					<div class="card-body">
						<blockquote class="blockquote blockquote-primary" style="padding-bottom:0;">
				      <p>The cost of seo services depends on the subject of your website and the selected keywords. In order to get a calculation of the cost, you must contact us. We will clarify exactly what goals you set for our company, after which we will prepare an individual commercial offer to increase sales for your website. Then we can discuss it over the phone or arrange a meeting. The minimum cost of seo package is $300 / month.</p>
				    </blockquote>
					</div>
				</div>

			</div>
			<div class="card card-plain"
			data-aos="fade-down" data-aos-duration="900">

				<div class="card-header smm-collapse" role="tab" id="headingTwo">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						WHAT CHANGES WILL YOU MAKE ON THE WEBSITE?
						<i class="now-ui-icons arrows-1_minimal-down"></i>
					</a>
				</div>
				<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="card-body">
						<blockquote class="blockquote blockquote-primary" style="padding-bottom:0;">
							<p>
								Starting from the first month of work, we are actively starting to modify the website code, and also in 99% of cases, both the appearance and functionality of the website. In the past few years, it is impossible to promote the website if it is lagging behind in terms of design and functionality from its TOP-10 competitors. That is why we do a complete website redesign for many of our customers. At the same time, all the work on website redesign and modernization is included in the budget and the client does not have to pay anything extra. This essentially distinguishes us from other companies, where for each change on the website from a client, an additional charge is required.
							</p>
				    </blockquote>
					</div>
				</div>

			</div>
			<div class="card card-plain"
			data-aos="fade-down" data-aos-duration="1200">

				<div class="card-header smm-collapse" role="tab" id="headingThree">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						WHEN YOU CAN EXPECT THE RESULT? HOW LONG DO YOU NEED TO PAY FOR SEO SERVICES?
						<i class="now-ui-icons arrows-1_minimal-down"></i>
					</a>
				</div>
				<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="card-body">
						<blockquote class="blockquote blockquote-primary" style="padding-bottom:0;">
							<p>
								Usually, the client observes the first results from the second week of our work, as in most cases (if the website is of high quality) we start to bring potential clients to the website from the first month. By the end of the second month, a noticeable growth in positions in Google and other search engines is already visible, and by the sixth month, the website’s attendance reaches a significantly new level compared to what it was before we began working with us. On average, to achieve excellent results, it takes 6 months - 1 year in medium and highly competitive topics. After achieving the desired results, you also need to continue to work on the website, hold positions and develop it further. This is due to the fact that: the search engines monthly modify and adjust their algorithms, as well as competitors,  are not standing still and are constantly developing their websites.
							</p>
				    </blockquote>
					</div>
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
    HEX_BG = '#2c2c2c',
    HEX_HL = '#5c5c5c',
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
