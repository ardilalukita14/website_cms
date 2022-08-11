@extends('contents.layouts.app')
    <!-- Preloader Start-->
@include('contents.layouts.header')
@extends('contents.layouts.contents')
@section('content')

    <main>
        <!-- Banner News Area Start -->
        <div class="banner-news">
            <div class="container-fluid p-0">
                <div class="banner-slider-active no-gutters">
                @foreach ($semua as $all)
                        <div class="single-baner-nw mb-30 text-center">
                        <div class="single-news-sliders">
                        <a href="{{route('reader.show_news',$all->id)}}" style="color:black"> 
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="{{asset('foto/'.$all->foto)}}" alt="" style="height:400px; width:400px">
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                   <h3>{{$all->judul}}</a></h3>
                                   </div>
                            </div>
                        </div>
                    </div>
        @endforeach
        </div>
    </div>
</div>


  <!-- Banner News Area End -->
        <!-- Latest Posts Area -->
        <div class="latest-posts pt-30 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>KRIMINALITAS NEWS</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                <!-- Slider -->
                
                        <!-- smoll items -->
                        @foreach ($kriminal as $krim)
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30 ">
                                <a href="{{route('reader.show_news',$krim->id)}}" style="color:black"> 
                                    <div class="banner-img-cap2">
                                        <div class="banner-img">
                                            <img src="{{asset('foto/'.$krim->foto)}}" alt="" style="width:500px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30">
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>KREATIVITAS</p>
                                           <h3>{{$krim->judul}}</a></h3>
                                            <p class="normal">{{substr($krim->isi,0,200)}}...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach
                </div>
    </div>
</div>
<div class="latest-posts pt-30 pb-50">
<div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>LIFESTYLE NEWS</h2>
                        </div>
                    </div>
                </div>
                
            <!-- <div class="container"> -->
            <div class="row">
            @foreach ($lifestyle as $ls)            
                <div class="col-lg-5 col-md-8"> 
                <div class="single-baner-nw2 mb-30">
                <a href="{{route('reader.show_news',$ls->id)}}" style="color:black"> 
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>LIFESTYLE</p>
                                            <h3>{{$ls->judul}}</a></h3>
                                            <p  class="normal">{{substr($ls->isi,0,200)}}...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6"> 
                            <div class="single-baner-nw2 mb-30">
                            <a href="{{route('reader.show_news',$ls->id)}}" style="color:black"> 
                                    <div class="banner-img-cap2">
                                        <div class="banner-img">
                                            <img src="{{asset('foto/'.$ls->foto)}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    @endforeach
                    </div>
    </div>
</div>
    <div class="container">
       <div class="row">
            <div class="col-12">
                <div class="section-tittle mb-35">
                            <h2>GENERAL NEWS</h2>
                        </div>
                    </div>
                </div>
                
                <!-- Slider -->
            <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                                </div>
                            </div>
                        </div>
                   
                    <div class="row">
                         @foreach ($kesehatan as $ksh)
                         <div class="col-lg-4 col-md-8">      
                        <div class="single-baner-nw2 mb-30 text-center">
                        <a href="{{route('reader.show_news',$ksh->id)}}" style="color:black"> 
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="{{asset('foto/'.$ksh->foto)}}" alt="" style="height:300px;">
                                </div>
                                <div class="banner-cap2">
                                    <p>KESEHATAN</p>
                                    <h3>{{$ksh->judul}}</a></h3>
                                    <p  class="normal">{{substr($ksh->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                        </div>
                    </div>

                    </div>

            <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                                </div>
                            </div>
                        </div>
                   
                    <div class="row">
                    @foreach ($teknologi as $tekno)
                         <div class="col-lg-4 col-md-8">      
                        <div class="single-baner-nw2 mb-30 text-center">
                        <a href="{{route('reader.show_news',$tekno->id)}}" style="color:black"> 
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                <img src="{{asset('foto/'.$tekno->foto)}}" alt="" style="height:300px">
                                </div>
                                <div class="banner-cap2">
                                    <p>TEKNOLOGI</p>
                                    <h3>{{$tekno->judul}}</a></h3>
                                    <p  class="normal">{{substr($tekno->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                                </div>
                            </div>
                        </div>
                   
                    <div class="row">
                    @foreach ($ekonomi as $eko)
                         <div class="col-lg-4 col-md-8">      
                        <div class="single-baner-nw2 mb-30 text-center">
                        <a href="{{route('reader.show_news',$eko->id)}}" style="color:black"> 
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                <img src="{{asset('foto/'.$eko->foto)}}" alt="" style="height:300px">
                                </div>
                                <div class="banner-cap2">
                                    <p>EKONOMI</p>
                                    <h3>{{$eko->judul}}</a></h3>
                                    <p  class="normal">{{substr($eko->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                                </div>
                            </div>
                        </div>
                   
                    <div class="row">
                    @foreach ($senbud as $sb)
                         <div class="col-lg-4 col-md-8">      
                        <div class="single-baner-nw2 mb-30 text-center">
                        <a href="{{route('reader.show_news',$sb->id)}}" style="color:black"> 
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                <img src="{{asset('foto/'.$sb->foto)}}" alt="" style="height:300px">
                                </div>
                                <div class="banner-cap2">
                                    <p>SENI DAN KEBUDAYAAN</p>
                                    <h3>{{$sb->judul}}</a></h3>
                                    <p  class="normal">{{substr($sb->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                                </div>
                            </div>
                        </div>
                   
                    <div class="row">
                    @foreach ($pertanian as $pr)
                         <div class="col-lg-4 col-md-8">      
                        <div class="single-baner-nw2 mb-30 text-center">
                        <a href="{{route('reader.show_news',$pr->id)}}" style="color:black"> 
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                <img src="{{asset('foto/'.$pr->foto)}}" alt="" style="height:300px">
                                </div>
                                <div class="banner-cap2">
                                    <p>PERTANIAN</p>
                                    <h3>{{$pr->judul}}</a></h3>
                                    <p  class="normal">{{substr($pr->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                                </div>
                            </div>
                        </div>
                   
                    <div class="row">
                    @foreach ($kreatif as $kr)
                         <div class="col-lg-4 col-md-8">      
                        <div class="single-baner-nw2 mb-30 text-center">
                        <a href="{{route('reader.show_news',$kr->id)}}" style="color:black"> 
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                <img src="{{asset('foto/'.$kr->foto)}}" alt="" style="height:300px">
                                </div>
                                <div class="banner-cap2">
                                    <p>KREATIVITAS</p>
                                    <h3>{{$kr->judul}}</a></h3>
                                    <p  class="normal">{{substr($kr->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
            

        <!-- Latest Posts End-->
        <!-- Video Area Start -->
        <div class="video-area">
            <div class="container-fluid">
                <div class="video-wrapper">
                    <div class="left-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle2 mb-35">
                                    <h2 class="mb-10">Videos</h2>
                                    <p>TOP OF THE WEEK PLAYLIST</p>
                                    <p class="video-cap">
                                        Calling time on<br> irresponsible junk<br> food advertising
                                    </p>
                                    <small>Business / 5.0m</small>
                                </div>
                            </div>
                            <!--Left Single -->
                            <div class="col-lg-6 col-md-6">
                                <div class="single-baner-nw4 mb-30">
                                    <div class="banner-img-cap4">
                                        <div class="banner-img4">
                                            <img src="assets/img/gallery/video_img1.png" alt="">
                                            <!--video iocn -->
                                            <div class="video-icon video-icon2">
                                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="banner-cap4">
                                            <h3><a href="/post_details">Editors with strong points  of view</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-baner-nw4 mb-30">
                                    <div class="banner-img-cap4">
                                        <div class="banner-img4">
                                            <img src="assets/img/gallery/video_img2.png" alt="">
                                            <!--video iocn -->
                                            <div class="video-icon video-icon2">
                                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="banner-cap4">
                                            <h3><a href="/post_details">Dill is part of an unexpected groundswell</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-content">
                        <div class="video-img">
                            <img src="assets/img/gallery/video_bg.png" alt="">
                            <!--video iocn -->
                            <div class="video-icon video-icon2">
                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area End -->
        <!-- Nwes slider Start -->
        <div class="nes-slider-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-slider-active">
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider2.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nwes slider End -->
        <!-- Top Posts Start -->
        <div class="top-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Top Posts</h2>
                        </div>
                    </div>
                </div>

                @foreach ($tops as $tp)
                <div class="row justify-content-lg-between">
                    <div class="col-lg-8 col-md-8">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                            <a href="{{route('reader.show_news',$tp->id)}}" style="color:black"> 
                                <div class="company-img">
                                    <img src="{{asset('foto/'.$tp->foto)}}" alt="" style="width:100px; height:100px">
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <h4 style="width:600px">{{$tp->judul}}</a></h4>
                                    <p style="width:600px">{{substr($tp->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="col-lg-3 col-md-3">
                        <div class="google-add mb-40">
                            <img src="assets/img/gallery/Ad.png" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
      
        <!-- Top Posts End -->
        <!-- Latest Posts Area -->
        <div class="latest-posts pt-30 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Latest Posts</h2>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="row">
                @foreach ($latest as $lts)
                <div class="col-lg-4 col-md-8">
                        <div class="single-baner-nw2 mb-30">
                        <a href="{{route('reader.show_news',$lts->id)}}" style="color:black"> 
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="{{asset('foto/'.$lts->foto)}}" alt="" style="height:200px; width:300px">
                                </div>
                                <div class="banner-cap2">
                                    <p>Technology</p>
                                   <h3>{{$lts->judul}}</a></h3>
                                   <h3 style="font-size:12px;">{{$lts->author}}, ({{$lts->tanggal}})</h10>
                                    <p class="blog-text" style="text-transform: normal !important;">{{substr($lts->isi,0,100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
        <!-- Latest Posts End-->


    </main>
@endsection