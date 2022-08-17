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
        @foreach ($pengumuman as $pgm)
        <div class="psot-details pb-80">
            <div class="container" style="background-color:#FDF5E6; box-shadow: 5px 10px #FFE4C4;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-details-cap">
                        <h4 style="font-size:40px;">{{$pgm->judul}}</h4>
                        <h6 style="font-size:14px; font-color:#00000;">{{$pgm->tanggal}}<br></br></h6>
                        </div>
                    </div>
                    
                    <div class="col-lg-10">
                        <div class="about-details-cap">
                        <p class="mb-30">{{$pgm->isi}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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