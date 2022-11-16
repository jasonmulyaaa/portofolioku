<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        .menu > ul > li > a {
  color: white;
  font-size: 1rem;
  font-weight: 700;
  padding: 15px 22px;
  text-transform: capitalize;
}
.header-section.style-7 .menu-item-has-children > a::after, .header-section.style-7 .menu-item-has-children > a::before{
    background: white;
}
    </style>
</head>
<body>
    <?php
    use App\Models\User;
    use App\Models\Tutorial;
    ?>

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
                            <i class="icofont-ui-call"></i> <span>+{!! $konfigurasi[0]->no_telp !!}</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> {!! $konfigurasi[0]->alamat !!}
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li><p>Find us on : </p></li>
                        <li><a href="{!! $konfigurasi[0]->instagram !!}" target="__blank" class="twitter"><i class="icofont-instagram"></i></a></li>
                        <li><a href="https://wa.me/{!! $konfigurasi[0]->no_telp !!}" target="__blank" class="vimeo"><i class="icofont-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>  
        <div class="header-bottom" style=" background: linear-gradient(116.85deg, #108ACB, #108ACB );">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('storage/' . $konfigurasi[0]->logo_header) }}" alt="{!! $konfigurasi[0]->judul !!}" title="{!! $konfigurasi[0]->judul !!}"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="#home">Home</a>
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
                                
                                <li><a href="{{ route('profile.index') }}" class="signup" style="background: #2c2c2c;"><i class="icofont-user"></i>Profile</a></li>

                                @endif
                            </ul>
                        </div>
                        @if (!auth()->check())
                                
                        <a href="{{ route('login') }}" class="signup" style="background: #2c2c2c;"><i class="icofont-user"></i> <span>LOG IN</span> </a>

                        @endif

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
    <!-- header section ending here -->

    <!-- banner section start here -->
    <section class="banner-section style-7" id="home" style="background-image: url({{ asset('storage/' . $banner[0]->gambar) }});">
        <div class="container">
            <div class="section-wrapper">
                <div class="banner-top">
                    <div class="row justify-content-center">
                        <div class="offset-xl-7 col-xl-6">
                            <div class="banner-content">
                                <h2 class="title">{!! $banner[0]->judul !!}</h2>
                                <p class="desc">{!! $banner[0]->deskripsi !!}</p>
                                <a href="#cv" class="lab-btn"><span style="color: white;">Get Started Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section ending here -->
    <div class="course-section style-2 padding-tb section-bg-ash yellow-color-section" id="cv">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle" style="color: #3183f7">{!! $pagetitle[0]->subjudul_cv !!}</span>
                <h3 class="title">{!! $pagetitle[0]->judul_cv !!}</h3>
            </div>

            <div class="section-wrapper">
                <div class="course-slider p-2">
                    <div class="section-header text-center">
                        <h2 class="title">Mentor</h2>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($resume1 as $resume1)
                            @php
                            $pengajar = User::where('id', $resume1->user_id)->first();
                            @endphp
                            @if($pengajar->role == 'Pengajar')
                        <div class="swiper-slide">
                            <div class="instructor-item style-2">
                                <div class="instructor-inner">
                                    <div class="instructor-thumb">
                                        <a href="{{ route('cv.show_pengajar', $resume1->slug) }}" target="__blank"><img src="{{ asset('storage/' . $resume1->foto) }}" alt="{!! $resume1->nama !!}" title="{!! $resume1->nama !!}" style="width: 365px;"></a>
                                    </div>
                                    <div class="instructor-content">
                                        <a href="{{ route('cv.show_pengajar', $resume1->slug) }}" target="__blank"><b>{!! $resume1->nama !!}</b></a>
                                        <span class="d-block">{!! $resume1->pekerjaan !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="section-header text-center">
                    <h2 class="title">Pengajar</h2>
                </div>
                <div class="instructor-bottom">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="posts">
                    @foreach ($resume as $resume)
                    @php
                    $pelajar = User::where('id', $resume->user_id)->first();
                    @endphp
                    @if ($pelajar->role == 'PKL' || $pelajar->role == 'User')
                        
                    <div class="col">
                        <div class="course-item style-5">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <a href="{{ route('cv.show', $resume->slug) }}" target="__blank"><img src="{{ asset('storage/' . $resume->foto) }}" alt="{!! $resume->nama !!}" title="{!! $resume->nama !!}" style="width: 365px; height: 198px; object-fit: cover;"></a>
                                </div>
                                <div class="course-content">
                                    <a href="{{ route('cv.show', $resume->slug) }}" target="__blank"><b>@if( strlen($resume->nama) >= 30 ){!! substr($resume->nama, 0, 30) !!}... @else {!! $resume->nama !!} @endif</b></a>
                                    <span class="course-cate">@if(strlen($resume->pekerjaan) >= 15){!! substr($resume->pekerjaan, 0, 15) !!}... @else {!! $resume->pekerjaan !!} @endif</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <br> 
                </div>
                <br>
                <br>
                <div class="section-header text-center">
                    <a href="{{ route('cv.index') }}" class="lab-btn text-center" style="background: #3183f7;"><span>See More</span></a>
                </div>
            
            </div>
        </div>
    </div>

    <!-- course section start here -->
    {{-- <div class="course-section style-3 padding-tb" id="courses">
        <div class="course-shape one"><img src="../../assets/user/homepage/images/shape-img/icon/01.png" alt="education"></div>
        <div class="course-shape two"><img src="../../assets/user/homepage/images/shape-img/icon/02.png" alt="education"></div>
        <div class="container">
            <div class="section-header">
                <h2 class="title">Our Courses</h2>
                <div class="course-filter-group">
                    <ul class="lab-ul">
                        <li class="active" data-filter="*">All</li>
                        @foreach ($kategoricourse as $kategoricourse)
                            
                        <li data-filter=".{!! $kategoricourse->kategori !!}">{!! $kategoricourse->kategori !!}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">
                    @foreach ($ourcourse as $ourcourse)
                        
                    <div class="col {{ $ourcourse->kategori }}">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="{{ asset('storage/' . $ourcourse->gambar) }}" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="{{ route('courses.show', $ourcourse->slug) }}">{!! $ourcourse->kategori !!}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="{{ route('courses.show', $ourcourse->slug) }}"><h5>{!! $ourcourse->judul !!}</h5></a>
                                    <div class="course-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div> --}}
    <!-- course section ending here -->

    <!-- Features Start Here -->
    <section class="feature-section style-2 style-4 padding-tb pb-0">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle yellow-color">Choose Any One Course</span>
                <h3 class="title">{!! $gambarwhycourse[0]->judul !!}</h3>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-lg-4 col-sm-6 col-12 order-lg-1">
                        <div class="feature-thumb">
                            <div class="abs-thumb">
                                <img src="{{ asset('storage/' . $gambarwhycourse[0]->gambar) }}" alt="{!! $gambarwhycourse[0]->judul !!}" title="{!! $gambarwhycourse[0]->judul !!}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 order-lg-0">
                        <div class="left text-lg-end">
                            @foreach ($whycourse as $whycourse)
                                
                            <div class="feature-item">
                                <div class="feature-inner flex-lg-row-reverse">
                                    <div class="feature-icon">
                                        <i class="icofont-{!! $whycourse->icon !!}"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>{!! $whycourse->judul !!}</h5>
                                        <p>{!! $whycourse->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 order-lg-2">
                        <div class="right">
                            @foreach ($whycourse1 as $whycourse1)
                            <div class="feature-item">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <i class="icofont-{!! $whycourse1->icon !!}"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>{!! $whycourse1->judul !!}</h5>
                                        <p>{!! $whycourse1->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Features End Here -->

    
    <!-- Offer Section Start Here -->
    <!-- Offer Section Ending Here -->


    <!-- Instructors Section Start Here -->

    <!-- Instructors Section Ending Here -->


    <!-- Blog Section Start Here -->
    <div class="blog-section padding-tb yellow-color-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle yellow-color">{!! $pagetitle[0]->subjudul_tutorial !!}</span>
                <div class="sponsor-section">
                    <div class="container">
                        <div class="section-wrapper">
                            <div class="sponsor-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($partner as $partner)
                                        
                                    <div class="swiper-slide">
                                        <div class="sponsor-iten">
                                            <div class="sponsor-thumb">
                                                <img src="{{ asset('storage/'. $partner->logo) }}" alt="{!! $partner->judul !!}" title="{!! $partner->judul !!}">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="title">{!! $pagetitle[0]->judul_tutorial !!}</h3>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    @foreach ($blog as $blog)
                        
                    <div class="col">
                        <div class="post-item style-3">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="{{ route('blogger.show', $blog->slug) }}"><img src="{{ asset('storage/' . $blog->gambar) }}" alt="{!! $blog->judul !!}" title="{!! $blog->judul !!}" style="max-width: 420px; height: 250px; object-fit: cover;"></a>
                                </div>
                                <div class="post-content">
                                    <a href=""><h4>{!! $blog->judul !!}</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>{!! $blog->nama !!}</li>
                                            <li><i class="icofont-calendar"></i>{!! $blog->created_at !!}</li>
                                        </ul>
                                    </div>
                                    <p>{!! substr($blog->deskripsi, 0, 80) !!}</p>
                                    <a href="" class="lab-btn"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section Ending Here -->

    <!-- Newsletters Section Start Here -->
    <!-- Newsletters Section Ending Here -->



    <!-- Footer Section Start Here -->
    <footer class="style-2 yellow-color-section">
        <div class="footer-top padding-tb">
            <div class="container">
                <div class="row g-4 row-cols-xl-3 row-cols-sm-2 row-cols-1 justify-content-center">
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
                    {{-- <div class="col">

                    </div> --}}
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