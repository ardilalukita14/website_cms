@extends('contents.layouts.app')
    <!-- Preloader Start-->
@include('contents.layouts.header')
@extends('contents.layouts.contents')
@section('content')

<!-- breadcrumb End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                <div class="map">
                    <iframe src="https://maps.google.com/maps?q=9GGC+3JQ,%20Kartoharjo,%20Kec.%20Kartoharjo,%20Kota%20Madiun,%20Jawa%20Timur%2063117&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>
    
                </div>
                <br></br><br></br>
                <div class="contact-form spad">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Kritik dan Saran</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{route('saran.store')}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="pesan" id="pesan" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter pesan'" placeholder=" Masukkan pesan" required style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nama" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nama" required style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subjek" id="subjek" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Subjek" required style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Dinas Komunikasi dan Informatika Kota Madiun</h3>
                                <p>Kota Madiun, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3> (0351) 467327</h3>
                                <p>Senin s.d. Jumat 07.30 - 14.30</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>kominfo.madiunkota@gmail.com</h3>
                                <p>Kirimkan pesan Anda melalui email!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                    </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection