<!-- Navbar -->
    	<nav class="navbar navbar-custom navbar-fixed-top" >
  			<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
     				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="/"><img src="/images/wk.jpg" alt="WellKnown Agency"></a>
    			</div>

   		 		<!-- Collect the nav links, forms, and other content for toggling -->
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">
       					<li class="{{ Request::is('/') ?"active" : "" }}"><a href="/">HOME</a></li>
						<li class="dropdown {{ Request::is('web-design', 'analytics', 'search-engine-marketing-ppc', 'search-engine-optimization', 'social-media-marketing', 'display-advertising') ?"active" : "" }}">
       						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Services
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="app">
								<li ><a href="/advertising">Advertising</a></li>
								<li ><a href="/search-engine-optimization">Search</a></li>
								<li ><a href="/social-media-marketing">Social</a></li>
								<li ><a href="/web-design">Web Design</a></li>
							</ul>
						</li>
						<li class="{{ Request::is('about-us') ?"active" : "" }}"><a href="/about-us">ABOUT US</a></li>
            <li class="{{ Request::is('contact-us') ?"active" : "" }}"><a href="/contact-us">Contact US</a></li>
						<li class="{{ Request::is('blog') ?"active" : "" }}"><a href="/blog/">BLOG</a></li>
					</ul>
					<div class="pull-right navbar-text">
            <a href="tel:8572653644" style="font-weight: 600;text-decoration:none;">(857) 265-3644</a>
					</div>
					<div class="navbar-text pull-right">
            <a href="mailto:info@wknown.com" rel="external"><i class="fa fa-envelope fa-lg icon-color"></i></a>
						<a href="https://www.facebook.com/WellKnown-153425045259276/" target="_blank" rel="external"><i class="fa fa-facebook fa-lg icon-color"></i></a>
						<a href="https://twitter.com/WKnownMarketing" target="_blank" rel="external"><i class="fa fa-twitter fa-lg icon-color"></i></a>
						<a href="https://www.linkedin.com/company/wellknown/" target="_blank" rel="external"><i class="fa fa-linkedin fa-lg icon-color"></i></a>
					</div>
    			</div><!-- /.navbar-collapse -->
  			</div><!-- /.container-fluid -->
		</nav><!-- End navbar -->
