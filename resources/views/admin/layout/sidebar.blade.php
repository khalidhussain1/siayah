













  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('admin.index')}}">
        <img src="{{asset('img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Siayah Dashbaord</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white bg-gradient-primary" href="{{route('admin.index')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Admin Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/onewaybookingdetails*')) ? 'active' : '' }}" href="{{route('admin.onewaybooking') }} ">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
         <span class=""> Booking Managemnt </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/bookingdetails*')) ? 'active' : '' }}" href="{{route('admin.bookingdetails')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Hotel Bookings </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/hotels*')) ? 'active' : '' }} " href="{{url('admin/hotels')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Hotels </span>
          </a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/pp*')) ? 'active' : '' }}" href="{{url('admin/pp')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Packages</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/payments*')) ? 'active' : '' }}" href="{{url('admin/payments')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Payments</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/history*')) ? 'active' : '' }}" href="{{url('admin/history')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">History</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/covid*')) ? 'active' : '' }} " href="{{url('admin/covid')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">COVID_19 </span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Guide  </span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">COVID-19</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Visa Services </span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Email for services  </span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Payemnt </span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Places </span>
          </a>
        </li> -->
      </ul>
    </div>

  </aside>