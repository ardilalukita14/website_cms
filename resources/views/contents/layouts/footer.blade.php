   <!-- Want To work -->
   <section class="wantToWork-area gray-bg ">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-7 col-md-10">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Berita Kota Madiun Website</h2>
                                <p><b>BeRiKoMa</b> dikembangkan sebagai salah satu sistem informasi yang bertujuan untuk memberikan berita ter-update di Kota Madiun.</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <form action="{{route('reader.cr_berita')}}" method="post" class="search-box">
                            {{csrf_field()}}
                                <div class="input-form">
                                    <input name="cari" type="search" placeholder="Topik berita">
                                </div>
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit" style="height: 60px">Search</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->

    </main>
    
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top d-lg-block d-none">
                       <div class="container">
                           <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left d-flex justify-content-center">
                                        <!-- Social -->
                                   <div class="header-social mt-2">
                                    <ul>
                                    <a href="#" class="twitter"><i class="fab fa-twitter" style="margin-top : 10px;"></i></a>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f" style="margin-top : 10px;"></i></a>
                                    <a href="#" class="instagram"><i class="fab fa-instagram" style="margin-top : 10px;"></i></a>
                                    <a href="#" class="linkedin"><i class="fab fa-linkedin" style="margin-top : 10px;"></i></a>
                                   </div>
                                    </div>
                                    <div class="header-info-mid">
                                        <!-- logo -->
                                        <div class="logo">
                                            <a href="index.html"><img src="assets/img/logo/logo7a.png" width="350px" height="100px"  alt=""></a>
                                        </div>
                                    </div>
                                    <div class="header-info-right d-flex align-items-center">
                                       <ul>                                          
                                           <li><a href="/">About</a></li>
                                           <li><a href="/contact">Contact</a></li>
                                       </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                   <div class="header-bottom header-bottom2 ">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <!-- Main-menu -->
                                    <div class="main-menu text-center">
                                        <nav>                                                
                                            <ul>                                                                                                                                     
                                            <li><a href="/lifestyle">Lifestyle</a></li>
                                            <li><a href="/ekonomi">Ekonomi</a></li>
                                            <li><a href="/kesehatan">Kesehatan</a></li>
                                            <li><a href="/teknologi">Teknologi</a></li>
                                            <li><a href="/senbud">Seni dan Kebudayaan</a></li>
                                            <li><a href="/pertanian">Pertanian</a></li>
                                            <li><a href="/kreativitas">Kreativitas</a></li>
                                            <li><a href="/kriminalitas">Kriminalitas</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> 
                            </div>
                        </div>
                   </div>
                </div>
           </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Berita | Kota Madiun <i class="fa fa-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>