<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src=" {{asset('admincss/img/avatar-6.jpg')}} " alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
      <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('admin.home') }}"> <i class="icon-home"></i>Home </a>
      </li>
      <li class="{{ request()->is('admin/docs') ? 'active' : '' }}">
          <a href="{{ route('admin.docs') }}"> <i class="icon-grid"></i>Tables </a>
      </li>
      <li class="{{ request()->is('admin/reports') ? 'active' : '' }}">
          <a href="{{ route('admin.reports') }}"> <i class="icon-padnote"></i>Forms </a>
      </li>
      <li>
          <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
          </ul>
      </li>
      <li>
          <a href="{{ route('login') }}"> <i class="icon-logout"></i>Login page </a>
      </li>
  </ul>
  
  <span class="heading">Extras</span>
  <ul class="list-unstyled">
      <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
  </ul>
  </nav>