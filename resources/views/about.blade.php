@extends('contents.layouts.app')
    <!-- Preloader Start-->
@include('contents.layouts.header')
@extends('contents.layouts.contents')
@section('content')
    <main>
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/about">about</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->
        <!-- About Details -->
        <div class="psot-details pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="about-details-cap">
                        <h2>BERITA KOTA MADIUN (BeRiKoMa)</h2>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="about-details-cap">
                        <p class="mb-30">Berita Kota Madiun(BeRiKoMa) merupakan sebuah website yang berisi informasi - informasi atau berita - berita menarik yang tengah ramai diperbincangkan oleh masyarakat sekitar. </p>

                        <p class="mb-30">BeRiKoMa sendiri memiliki beberapa topik pembicaraan untuk disampaikan kepada para pembacanya, yaitu informasi atau berita terkait lifestyle, ekonomi, kesehatan, kreativitas, pertanian, teknologi, seni dan kebudayaan, hingga kriminalitas. </p>
                        <p class="mb-50">BeRiKoMa dikembangkan guna memberikan kemudahan bagi masyarakat untuk bisa membaca dan memperoleh informasi terkini melalui media digital, yang artinya tidak terbatas ruang dan waktu.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-details-cap">
                            <h3>Kenapa BeRiKoMa ?</h3>
                            <p>BeRiKoMa selain diambil dari akronim "Berita Kota Madiun", ia juga memiliki filosofi. Bahwasanya dalam memberikan sebuah berita kami juga harus memberikan koma atau jeda bagi pembaca, agar semua informasi yang tersampaikan melalui kata demi kata dapat tercerna dengan lugas. </p>
                            <div class="details-img">
                                <img class="img-fluid mb-15" src="assets/img/logo/logo5.png" alt="">
                                <p>BeRiKoMa juga menjadi harapan untuk terus mengudara tanpa jeda yang panjang, layaknya sebuah tanda baca koma(,).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Details End -->
        <!-- Nwes slider Start -->
        <div class="nes-slider-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-slider-active">
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <img src="assets/img/gallery/news-slider1.png" alt="">
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <img src="assets/img/gallery/news-slider2.png" alt="">
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <img src="assets/img/gallery/news-slider3.png" alt="">
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <img src="assets/img/gallery/news-slider4.png" alt="">
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <img src="assets/img/gallery/news-slider1.png" alt="">
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <img src="assets/img/gallery/news-slider2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nwes slider End -->
    </main>
 @endsection