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
  <div class="header-2">
    <div class="page-header header-filter" >
      <canvas></canvas>
      <canvas></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="padding-top: 100px;">
            <h1 class="title">Web Design and Development</h1>
            <h4 class="description">From nowhere to top ten</h4>
          </div>
          <div class="col-md-10 ml-auto mr-auto">
            <div class="card card-raised card-form-horizontal card-plain" data-background-color>
              <div class="card-body">
                <a href="#" class="btn btn-primary btn-round btn-l">Free consultation</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section section-images">
   <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="hero-images-container">
       <img src="images/webdesign/desktop.png" alt="">
      </div>

      <div class="hero-images-container-1">
       <img src="images/webdesign/ipad.png" alt="">
      </div>

      <div class="hero-images-container-2">
       <img src="images/webdesign/iphone.png" alt="">
      </div>
     </div>
    </div>
   </div>
  </div>
		<!-- Steps -->

      <div class="features-7 section-image" style="background-image: url('images/webdesign/bg-2.jpg')">
        <div class="col-md-8 mr-auto ml-auto text-center">
          <h2 class="title">Our Steps to Build Your Website</h2>
          <h4 class="description">WellKnown Agency is providing a full service in web design & development and help your business to obtain gorgeous Internet profile.</h4>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 px-0">
              <div class="col-sm-12">
                <div class="info info-horizontal">
                  <div class="icon">
                    <i class="now-ui-icons design_palette"></i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Design</h5>
                    <p class="description">We create stunning website design, which is supposed to tell the story of your business and help you to achieve all the goals you've planned. </p>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon">
                    <i class="now-ui-icons design-2_html5"></i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Development</h5>
                    <p class="description">Our team are the experts of coding and development, and we have all the skills to implement your ideas to life, whether it is one page website or sophisticated web application.  </p>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon">
                    <i class="now-ui-icons objects_spaceship"></i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Managing</h5>
                    <p class="description">WellKnown Agency is always happy to maintain your website or application after deployment. We provide the best service to keep your website running like a Swiss clock. </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="image-container">
                <img src="images/webdesign/ipad3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

		<!-- Design & Development -->
    <div class="projects-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">We have many advantages</h2>
            <h4 class="description">Our team will give you the most convenient experience in building your website. You will, definitely, never regret giving us the opportunity to create your online profile.</h4>
            <div class="section-space"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 ml-auto">
            <div class="card card-background card-background-product card-raised" style="background-image: url('../images/webdesign/design.jpg')">
              <div class="card-body">
                <h2 class="card-title">Web Design</h2>
                <p class="card-description">
                  If you want to get for your website the best UX and irresistible functionality - WellKnown Agency is the exclusive solution.
                </p>
                <label class="badge badge-neutral">Contact Us</label>
              </div>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
            <div class="info info-horizontal">
              <div class="icon icon-danger">
                <i class="now-ui-icons ui-2_chat-round"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Listen to Customers</h4>
                <p class="description">
                  First of all, we carefully listen to our Clients, so we are able to syntesize our thoughts and easier reach their goals.
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-danger">
                <i class="now-ui-icons design_app"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Unique Design</h4>
                <p class="description">
                   We create 100% custom design for each Client. Our creative designers will take care of your website to profitably stand out from the rest in your business' sphere.
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-danger">
                <i class="now-ui-icons tech_mobile"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Mobile Responsive</h4>
                <p class="description">
                  We create fully optimized websites and web apps for mobile and tablet devices. Since mobile responsibility is vital nowadays, our team know how to build the most advanced and convenient mobile-web.
                </p>
              </div>
            </div>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-md-5 ml-auto mt-5">
            <div class="info info-horizontal">
              <div class="icon icon-warning">
                <i class="now-ui-icons users_single-02"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Greatest Minds</h4>
                <p class="description">
									Our experienced programmers create the most advanced applications, and they are always follow to the latest trends in IT universe.
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-warning">
                <i class="now-ui-icons objects_key-25"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Data Security</h4>
                <p class="description">
                  We understand how important an information in your database is, that is why our applications are possessed of high-quality data protection.
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-warning">
                <i class="now-ui-icons arrows-1_refresh-69"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Always In Sync</h4>
                <p class="description">
                  We are proud of our designers and developers colloboration. These teams closely work together over the course of each project, so the final result is always as planned.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
            <div class="card card-background card-background-product card-raised" style="background-image: url('../images/webdesign/development.jpg')">
              <div class="card-body">
                <h2 class="card-title">Web Development</h2>
                <p class="card-description text-white">
									There is nothing imposible in a programming world for our team. WellKnown Agency creates websites and applications no matter how complex it are.
                </p>
                <label class="badge badge-neutral">Contact Us</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--     *********   CASE Studies     *********      -->
    <div class="projects-1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Some of Our Awesome Projects</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 px-0">
            <div class="card card-background card-background-product card-no-shadow" style="background-image: url('/images/ffmain.jpg')">
              <div class="card-body">
                <h6 class="category">Web Design & Development</h6>
                <h3 class="card-title">
                  Fancy Flowers
                </h3>
                <p class="card-description">
                  Fully created Online Flowers Delivery store...
                </p>
                <a href="/fancy-flowers" target="_blank" class="btn btn-danger btn-round">
                  <i class="now-ui-icons ui-1_send"></i> View Case
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 px-0">
            <div class="card card-raised card-background card-background-product card-no-shadow" style="background-image: url('/images/omdarling.jpg')">
              <div class="card-body">
                <h6 class="category">Web Design & Development</h6>
                <h3 class="card-title">OmDarling</h3>
                <p class="card-description">
                  Personal Blog...
                </p>
                <a href="/omdarling" target="_blank" class="btn btn-danger btn-round">
                  <i class="now-ui-icons ui-1_send"></i> View case
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6 px-0">
            <div class="card card-background card-background-product card-no-shadow" style="background-image: url('/images/btmmain.jpg')">
              <div class="card-body">
                <h6 class="category">Web Design & Development</h6>
                <h3 class="card-title">Born to Move</h3>
                <p class="card-description">
                  Moving Company Website with High Quality SEO...
                </p>
                <a href="/born-to-move" target="_blank" class="btn btn-danger btn-round">
                  <i class="now-ui-icons ui-1_send"></i> View case
                </a>
              </div>
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
