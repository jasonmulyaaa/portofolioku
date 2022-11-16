<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('header')
    <meta name="description" content="{!! $meta[0]->deskripsi !!}">
	<meta name="keywords" content="{!! $meta[0]->keywords !!}">
    <meta name="title" content="{!! $konfigurasi[0]->judul !!}" />
    <meta name="search engines" content="{!! $meta[0]->search_engine !!}">
    <meta name="author" content="{!! $meta[0]->author !!}">
    <meta name="website" content="{!! $meta[0]->website !!}">
    <title>{{ $konfigurasi[0]->judul }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/' . $konfigurasi[0]->favicon) }}" type="image/x-icon">

    <link rel="stylesheet" href="../../assets/user/homepage/css/animate.css">
    <link rel="stylesheet" href="../../assets/user/homepage/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/user/homepage/css/icofont.min.css">
    <link rel="stylesheet" href="../../assets/user/homepage/css/swiper.min.css">
    <link rel="stylesheet" href="../../assets/user/homepage/css/lightcase.css">
    <link rel="stylesheet" href="../../assets/user/homepage/css/style.css">
</head>
<body>
@php
    use App\Models\Tutorial;
    use App\Models\KategoriTutorial;

    $kategoritutorial = KategoriTutorial::all();
@endphp
    <!-- preloader start here -->
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop yellow-color"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- menu-search-form start here -->
    <div class="menu-search-form">
        <form>
          <input type="text" name="search" placeholder="Search here...">
          <button type="submit"><i class="icofont-search"></i></button>
        </form>
    </div>
    <!-- menu-search-form ending here -->


    <!-- header section start here -->
    <header class="header-section style-7">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <i class="icofont-ui-call" style="color: white"></i> <span style="color: white">+{!! $konfigurasi[0]->no_telp !!}</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin" style="color: white"></i> <span style="color: white">{!! $konfigurasi[0]->alamat !!}</span>
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li><p style="color: white">Find us on : </p></li>
                        <li><a href="{!! $konfigurasi[0]->instagram !!}" target="__blank" class="twitter"><i class="icofont-instagram" style="color: white"></i></a></li>
                        <li><a href="https://wa.me/{!! $konfigurasi[0]->no_telp !!}" target="__blank" class="vimeo"><i class="icofont-whatsapp" style="color: white"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href=""><img src="{{ asset('storage/' . $konfigurasi[0]->logo_header) }}" alt="{!! $konfigurasi[0]->judul !!}" title="{!! $konfigurasi[0]->judul !!}" ></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('courses.index') }}">Courses</a>
                                </li>
                                <li>
                                    <a href="{{ route('cv.index') }}">CV</a>
                                </li>
                                <li>
                                    <a href="#0">Tutorials</a>
                                    <ul class="lab-ul">
                                        @foreach ($kategoritutorial as $kategoritutorial)
                                            
                                        <li>
                                            <a href="{{ route('tutorials.show', $kategoritutorial->kategori_name) }}">{!! $kategoritutorial->kategori !!}</a>
                                            {{-- <ul class="lab-ul">
                                                @php
                                                    $tutorials = Tutorial::where('kategori', $kategoritutorial->kategori)->get();
                                                @endphp
                                                @foreach ($tutorials as $tutorials)
                                                    
                                                <li><a href="{{ route('tutorials.show', $tutorials->slug) }}">{!! $tutorials->judul !!}</a></li>
                                                @endforeach
                                            </ul> --}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('galleries.index') }}">Gallery</a>
                                </li>
                                <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                @if (auth()->check())
                                
                                <li><a href="{{ route('profile.index') }}" class="signup" style="background: #2c2c2c;"><i class="icofont-user"></i> Profile</a></li>

                                @endif
                            </ul>
                        </div>
                        @if (!auth()->check())
                                
                        <a href="{{ route('login') }}" class="signup" style="background: #2c2c2c;"><i class="icofont-user"></i> <span>LOG IN</span> </a>

                        @endif
                            </ul>
                        </div>
                        
                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('content')

    <footer class="style-2 yellow-color-section">
        <div class="footer-top padding-tb">
            <div class="container">
                <div class="row g-4 row-cols-xl-4 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="footer-item our-address">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <img src="{{ asset('storage/' . $konfigurasi[0]->logo_footer) }}" alt="{!! $konfigurasi[0]->judul !!}" title="{!! $konfigurasi[0]->judul !!}">
                                    </div>
                                    <div class="content">
                                        <p>{!! $konfigurasi[0]->deskripsi !!}</p>
                                        <ul class="lab-ul office-address">
                                            <li><i class="icofont-google-map"></i>{!! $konfigurasi[0]->alamat !!}</li>
                                            <li><i class="icofont-phone"></i>+{!! $konfigurasi[0]->no_telp !!}</li>
                                            <li><i class="icofont-envelope"></i>{!! $konfigurasi[0]->email !!}</li>
                                        </ul>
                                        <ul class="lab-ul social-icons">
                                            <li>
                                                <a href="{{ $konfigurasi[0]->instagram }}" class="instagram"><i class="icofont-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wa.me/{!! $konfigurasi[0]->no_telp !!}" class="whatsapp"><i class="icofont-whatsapp"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-item">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h4>Courses</h4>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            @foreach ($ourcourse1 as $ourcourse1)
                                            <li><a href="{{ route('courses.show', $ourcourse1->slug) }}">{!! $ourcourse1->judul !!}</a></li>
                                            @endforeach                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-item">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h4>Akses Cepat</h4>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/.#courses">Courses</a></li>
                                            <li><a href="{{ route('cv.index') }}">CV</a></li>
                                            <li><a href="{{ route('tutorials.index') }}">Tutorial</a></li>
                                            <li><a href="{{ route('galleries.index') }}">Gallery</a></li>
                                            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-item twitter-post">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h4>Tutorial Terbaru</h4>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            @foreach ($tutorial1 as $tutorial1)
                                                
                                            <li>
                                                <i class="icofont-paper"></i>
                                                <p>{!! $tutorial1->nama !!}<br><a href="{{ route('tutorials.show', $tutorial1->slug) }}">{!! $tutorial1->judul !!}</a><br>{!! $tutorial1->created_at !!}</p>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="section-wrapper">
                    <p>&copy; 2021 Created by <a href="https://wanteknologi.com" target="_blank">WAN Teknologi</a> </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ending Here -->


    


    <script src="../../assets/user/homepage/js/jquery.js"></script>
    <script src="../../assets/user/homepage/js/bootstrap.min.js"></script>
    <script src="../../assets/user/homepage/js/swiper.min.js"></script>
    <script src="../../assets/user/homepage/js/progress.js"></script>
    <script src="../../assets/user/homepage/js/lightcase.js"></script>
    <script src="../../assets/user/homepage/js/counter-up.js"></script>
    <script src="../../assets/user/homepage/js/isotope.pkgd.js"></script>
    <script src="../../assets/user/homepage/js/functions.js"></script>
</body>
</html>