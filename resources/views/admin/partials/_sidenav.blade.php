<!-- Sidebar -->
<ul class="sidebar navbar-nav toggled transition-togg">
  <li class="nav-item {{ Request::is('admin') ?"active" : ""}}">
    <a class="nav-link " href="/admin">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown {{ Request::is('admin/leads','admin/clients',	'admin/partners') ?"active" : ""}}">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>CRM</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="/admin/leads">Leads</a>
      <a class="dropdown-item" href="/admin/clients">Customers</a>
      <a class="dropdown-item" href="/admin/partners">Partners</a>
    </div>
  </li>
  <li class="nav-item dropdown {{ Request::is('admin/seo') ?"active" : ""}}">
    <a class="nav-link" href="/admin/seo" id="pagesDropdown">
      <i class="fas fa-fw fa-folder"></i>
      <span>SEO</span>
    </a>
  </li>
  <li class="nav-item dropdown {{ Request::is('admin/posts','admin/comments',	'admin/categories') ?"active" : ""}}">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-book"></i>
      <span>Blog</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="/admin/posts">Posts</a>
      <a class="dropdown-item" href="">Comments</a>
      <a class="dropdown-item" href="/admin/categories">Categories</a>
			<a class="dropdown-item" href="/admin/subscribers">Subscribers</a>
    </div>
  </li>
	<li class="nav-item dropdown {{ Request::is('admin/cases','admin/caseservices',	'admin/casetechnologies') ?"active" : ""}}">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-book"></i>
      <span>Cases</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="/admin/cases">Cases</a>
      <a class="dropdown-item" href="/admin/caseservices">Services</a>
      <a class="dropdown-item" href="/admin/casetechnologies">Technologies</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/calendar">
      <i class="fa fa-fw fa-calendar-alt"></i>
      <span>Calendar</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Manager</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="">Users</a>
      <a class="dropdown-item" href="">Roles</a>
    </div>
  </li>
</ul>
