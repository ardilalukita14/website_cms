<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">BERITA KOTA MADIUN</a>
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
              <a href="/penulis"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>
            <li>
            <li>
              <a href="/penulis/berita"><i class="ion ion-ios-paper-outline"></i><span>Berita</span></a>
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