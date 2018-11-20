<nav class="navbar navbar-expand-lg bg-primaryy navbar-transparent fixed-top" color-on-scroll="400">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="/" rel="tooltip" title="WellKnown Agency" data-placement="bottom">
        <img src="/images/wk.jpg" width="100" />
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar top-bar"></span>
        <span class="navbar-toggler-bar middle-bar"></span>
        <span class="navbar-toggler-bar bottom-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('/') ?"active" : ""}}">
          <a class="nav-link " href="/">
            <i class="fa fa-home wk-icons"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" >
            <p>Services</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
            <a class="dropdown-item {{ Request::is('advertising') ?"active-a" : ""}}" href="/advertising">
              <i class="fa fa-bullhorn wk-icons"></i> <span>Advertising</span>
            </a>
            <a class="dropdown-item {{ Request::is('search') ?"active-a" : ""}}" href="/search-engine-optimization">
              <i class="fa fa-search wk-icons"></i>  <span>Search</span>
            </a>
              <!--
              <a class="dropdown-item" href="/search-engine-optimization">
                <i class="fa fa-share wk-icons"></i>  <span>Social</span>
              </a>
            -->
            <a class="dropdown-item {{ Request::is('web-design') ?"active-a" : ""}}" href="/web-design">
              <i class="fa fa-code wk-icons"></i>  <span>Web Design and Dev</span>
            </a>
          </div>
        </li>
        <li class="nav-item {{ Request::is('contact-us') ?"active" : ""}}">
          <a class="nav-link" href="/contact-us">
            <p>contact us</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('about-us') ?"active" : ""}}">
          <a class="nav-link" href="/about-us">
            <p>about us</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('blog') ?"active" : ""}}">
          <a class="nav-link" href="/blog">
            <p>blog</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/WKnownMarketing" target="_blank">
            <i class="fab fa-twitter wk-icons"></i>
            <p class="d-lg-none d-xl-none">Twitter</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/WellKnown-153425045259276/" target="_blank">
            <i class="fab fa-facebook wk-icons"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Linkedin" data-placement="bottom" href="https://www.linkedin.com/company/wellknown/" target="_blank">
            <i class="fab fa-linkedin-in wk-icons"></i>
            <p class="d-lg-none d-xl-none">LinkedIn</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Call Us" data-placement="bottom" href="tel:8572209555" style="font-size:20px; padding-top:5px;">
            (857) 220-9555
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
