<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     
    <a href="#" class="brand-link">
      <img src="/AdminLTE/dist/img/FT.png" alt="User Image" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="m-0 text-lime">Intan P G Suherman</span>
    </a>
    </li>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/AdminLTE/dist/img/profil1.jpg" class="brand-img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <li class="nav-item active">
            <a class="dropdown-item {{request() -> is('MyInformation') ?'active' : ''}}" href="{{route('MyInformation')}}">
              <span class="m-0 text-lime">MyInformation</span>
            </a>
        </div>
      </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
            </li>
           
           {{-- <li class="nav-item active">
            <a class="dropdown-item {{request() -> is('detail') ?'active' : ''}}" href="{{route('detail')}}">
                detail</a> 
            </li> --}}

            <li class="nav-item active">
              <a class="dropdown-item {{request() -> is('list') ?'active' : ''}}" href="{{route('list')}}">
                list mahasiswa</a> 
              </li>

              <li class="nav-item active">
                <a class="dropdown-item {{request() -> is('dosen') ?'active' : ''}}" href="{{route('dosen')}}">
                  list dosen</a> 
                </li>

                <li class="nav-item active">
                  <a class="dropdown-item {{request() -> is('organization') ?'active' : ''}}" href="{{route('organization')}}">
                    Organization</a> 
                  </li>
              


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>