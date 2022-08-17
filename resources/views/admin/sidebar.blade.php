<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">ANALISA BERITA</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../dist/img/avatar/people.png" width="30px" height="50px">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name" style= "font-size: 18px; font-family: Arial, Helvetica>Profile">{{ Auth::user()->name }}</div>
              <div class="user-role" style= "font-size: 12px; font-family: Arial, Helvetica>Profile">
              {{ Auth::user()->role }}
              </div>
            </div>
          </div>
              
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
              <a href="/admin"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
              <ul class="menu-dropdown">
                <li><a href="/general"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
                <li><a href="/component"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
                <li><a href="/button"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
                <li><a href="/toastr"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
              </ul>
            </li>
            <!-- <li>
              <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
              <ul class="menu-dropdown">
                <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
              </ul>
            </li> -->
            <li>
              <a href="/table"><i class="ion ion-clipboard"></i><span>Tables</span></a>
            </li>
            <li>
              <a href="/chart"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
            </li>
            <li>
              <a href="/simple"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
              <ul class="menu-dropdown">
                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
              </ul>
            <li>
              <a href="/saran"><i class="ion ion-ios-email-outline"></i> Saran</a>
            </li> 
            <li>
              <a href="/"><i class="ion ion-ios-home-outline"></i> Back To Home</a>
            </li> 
        </ul>
          <!-- <div class="p-3 mt-4 mb-4">
            <a href="http://stisla.multinity.com/" class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
              <i class="ion ion-help-buoy"></i> <div>Go PRO!</div>
            </a>
          </div> -->
        </aside>
      </div>