<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
</head>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                  <img src="{{asset('admin/images/dummy-image.jpg')}}" alt="image" />
                  <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                  <p class="name">
                  @yield('user_name')
                  </p>
                  <p class="designation">
                 Admin
                  </p>
                </div>
              </div>
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="{{route('companies.index')}}">
              <!-- <i class="fa fa-home" aria-hidden="true"></i> -->
                <span class="menu-title">Companies</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('employees.index')}}">
                <!-- <i class="icon-user menu-icon"></i> -->
                <span class="menu-title">Employees</span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->