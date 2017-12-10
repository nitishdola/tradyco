<button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
  <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="{{ route('admin.home') }}"></a>
<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
  <span class="navbar-toggler-icon"></span>
</button>

<ul class="nav navbar-nav d-md-down-none">
  <li class="nav-item px-3">
    <a class="nav-link" href="{{ route('admin.home') }}">Dashboard</a>
  </li>
  
</ul>
<ul class="nav navbar-nav ml-auto">
  
  <li class="nav-item d-md-down-none">
    <a class="nav-link" href="{{ url('admin/logoff') }}"><i class="icon-logout"></i></a> 
  </li>
  
</ul>