<!-- Navbar -->
<nav style="background-color: #343a40;" class="main-header navbar navbar-expand navbar-white navbar-light ">
  <!-- Left navbar links -->
  
 

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    
    
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i style= "color: aliceblue;" class="fas fa-globe"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
        <div class="dropdown-divider"></div>
        <center><a href="{{ url('locale/fr') }}" class="dropdown-item">
          <i class="fas fa-flag"></i> {{__('text.French.lbl') }}
        </a></center>
        <div class="dropdown-divider"></div>
        <center><a href="{{ url('locale/en') }}" class="dropdown-item">
          <i class="fas fa-flag"></i> {{__('text.English.lbl') }}
        </a></center>
        
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
      <i style= "color: aliceblue;" class="far fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 157px;">
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
      <i class="fas fa-power-off" style="margin-right: 6px;"></i>
      {{__('text.log_out.ic') }}      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
      </form>
      </div>
      </li>
  </ul>
</nav>
<!-- /.navbar -->