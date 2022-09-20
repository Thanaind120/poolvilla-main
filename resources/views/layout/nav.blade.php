<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    {{-- <div class="mr-auto"></div> --}}
    
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
       
        </ul>
       
      </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi,{{Auth::user()->name}}</div></a>
        <div class="dropdown-menu dropdown-menu-right">
     
        <a href="{{url('backend/edit_profile')}}" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
            </a>
            <a href="{{url('backend/change_password')}}" class="dropdown-item has-icon">
            <i class="fas fa-key"></i> Change Password
            </a>
            {{-- <a href="features-settings.html" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Settings
            </a> --}}
            <div class="dropdown-divider"></div>
          <a href="{{url('/logout')}}" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
        </li>
    </ul>
</nav>