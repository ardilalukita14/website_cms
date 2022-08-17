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
              <a href="/admin"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>
            <li>
              <a href="/admin/berita"><i class="ion ion-ios-paper-outline"></i><span>Berita</span></a>
            </li>
            <li>
              <a href="/kategori"><i class="ion ion-ios-list-outline"></i><span>Kategori Berita</span></a>
            <li>
              <a href="/komentar"><i class="ion ion-ios-chatbubble-outline"></i><span>Komentar</span></a>
            </li>
            <li>
              <a href="/saran"><i class="ion ion-ios-email-outline"></i> Saran</a>
            </li> 
            <li>
              <a href="/pengumuman"><i class="ion ion-ios-information-outline"></i> Pengumuman</a>
            </li>
            <li>
              <a href="/"><i class="ion ion-ios-home-outline"></i> Back To Home</a>
            </li>
        </aside>
      </div>

      