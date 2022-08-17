<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-lg-between align-items-center">
                                <div class="header-info-left">
                                    <li class="d-none d-lg-block">
                                        <div class="form-box f-right" style="width: 300px;">
                                        <form class="form-inline" style="margin-top: 10px" action="{{route('reader.cr_berita')}}" method="post">
    		 	                        {{csrf_field()}}
                                         <input  name="cari" type="search" placeholder="Temukan Berita..." aria-label="Search">
                                          <div class="search-icon mt-2">
                                                <button  class="ti-search" type="submit" style="height:30px; margin-button:60px; margin-top:-10p;"></button>
                                            </div>
                                            </form>
                                        </div>
                                     </li>
                                </div>
                                <div class="header-info-mid">
                                    <!-- logo -->
                                    <div class="logo">
                                        <a href="/"><img src="assets/img/logo/logo7a.png" width="350px" height="100px" alt=""></a>
                                    </div>
                                </div>
                              
                                   <div class="header-info-right d-flex align-items-center">
                                   <ul>                                          
                                       <li><a href="{{ route('indexadmin') }}">Admin</a></li>
                                       <li><a href="{{ route('penulis.indexPenulis') }}">Penulis</a></li>
                                       <li><a href="{{ route('editor.indexEditor') }}">Editor</a></li>
                                   </ul>
                                   <!-- Social -->
                                   <div class="header-social mt-2">
                                    <ul>
                                    <a href="#" class="twitter"><i class="fab fa-twitter" style="margin-top : 10px;"></i></a>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f" style="margin-top : 10px;"></i></a>
                                    <a href="#" class="instagram"><i class="fab fa-instagram" style="margin-top : 10px;"></i></a>
                                    <a href="#" class="linkedin"><i class="fab fa-linkedin" style="margin-top : 10px;"></i></a>
                                   </div>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky" style="background-color:#EFF5F8; width:100%;">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- logo 2 -->
                                <div class="logo2">
                                    <a href="/"><img src="assets/img/logo/logo.png" alt="" ></a>
                                </div>
                                <!-- logo 3 -->
                                <div class="logo3 d-block d-sm-none">
                                    <a href="/"><img src="assets/img/logo/logo-mobile.png" alt=""></a>
                                </div>
                               <!-- Main-menu -->
                               <div class="main-menu text-center d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">               
                                            <li><a href="/">Home</a></li>  
                                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                            Topik <span class="caret"></span>
                                            </a>
                                        <ul class="dropdown-menu" style="width: 480px;">                                                                                                                    
                                            <li><a href="/lifestyle">Lifestyle</a></li>
                                            <li><a href="/ekonomi">Ekonomi</a></li>
                                            <li><a href="/kesehatan">Kesehatan</a></li>
                                            <li><a href="/teknologi">Teknologi</a></li>
                                            <li><a href="/senbud">Seni dan Kebudayaan</a></li>
                                            <li><a href="/pertanian">Pertanian</a></li>
                                            <li><a href="/kreativitas">Kreativitas</a></li>
                                            <li><a href="/kriminalitas">Kriminalitas</a></li>
                                            
                                            </ul>
                                         </li>
                                        <li><a href="/about">About</a></li>  
                                        <li><a href="/contact">Contact</a></li>  
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                               <!-- <div class="main-menu text-center d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                        <li><a href="/"><h7 style="font-size: 10pxx; font-family: Lucida Console, Courier New, monospace; font-color:#072366;">Home</h7></a></li>
                                        <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                        <h7 style="font-size: 10pxx; font-family: Lucida Console, Courier New, monospace; font-color:#072366;">Topik</h7> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" style="width: 480px;">
                                        <li><a href="/lifestyle">LIFESTYLE</a></li>
                                        <li><a href="/ekonomi">EKONOMI</a></li>
                                        <li><a href="/kesehatan">KESEHATAN</a></li>
                                        <li><a href="/teknologi">TEKNOLOGI</a></li>
                                        <li><a href="/senbud">SENBUD</a></li>
                                        <li><a href="/pertanian">PERTANIAN</a></li>
                                        <li><a href="/kreativitas">KREATIVITAS</a></li>
                                        <li><a href="/kriminalitas">KRIMINAL</a></li>
                                    </ul>
                                </li>
                                        <li><a href="/about"><h7 style="font-size: 10pxx; font-family: Lucida Console, Courier New, monospace; font-color:#072366;">About</h7></a></li></a></li>
                                        <li><a href="/contact"><h7 style="font-size: 10pxx; font-family: Lucida Console, Courier New, monospace; font-color:#072366;">Contact</h7></a></li>
                                        <li><a href="/informasi"><h7 style="font-size: 10pxx; font-family: Lucida Console, Courier New, monospace; font-color:#072366;">Pengumuman</h7></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>  -->
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none" style="width:100%;"></div>
                            </div>
                        </div>
                   
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <br></br> <br></br>
    