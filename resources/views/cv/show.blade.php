<!doctype html>
<html lang="en">
<head>

    @php
        use App\Models\Portfolio;
    @endphp
<!-- Simple Page Needs
================================================== -->
<title>{{ $konfigurasi[0]->judul }}</title>
<meta charset="UTF-8">
<meta name="description" content="{!! $meta[0]->deskripsi !!}">
<meta name="keywords" content="{!! $meta[0]->keywords !!}">
<meta name="title" content="{!! $konfigurasi[0]->judul !!}" />
<meta name="search engines" content="{!! $meta[0]->search_engine !!}">
<meta name="author" content="{!! $meta[0]->author !!}">
<meta name="website" content="{!! $meta[0]->website !!}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Favicon
================================================== -->  
<link href="{{ asset('storage/' . $konfigurasi[0]->favicon) }}" rel="shortcut icon" type="image/x-icon" />

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../../assets/user/css/bootstrap.css"/>
<link rel="stylesheet" href="../../assets/user/css/reset.css"/>
<link rel="stylesheet" href="../../assets/user/cubeportfolio/css/cubeportfolio.min.css"/>
<link rel="stylesheet" href="../../assets/user/css/owl.theme.css"/> 
<link rel="stylesheet" href="../../assets/user/css/owl.carousel.css"/>
<link rel="stylesheet" href="../../assets/user/css/style.css"/>
<link rel="stylesheet" href="../../assets/user/css/colors/yellow.css" id="color"/>

    
<!-- Google Web fonts
================================================== --> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

<!-- Font Icons
================================================== --> 
<link rel="stylesheet" href="../../assets/user/icon-fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../assets/user/icon-fonts/web-design/flaticon.css" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
 <!-- Preloading -->
<div id="preloader">
    <div class="spinner">
    </div>
</div>  
    
<!-- Wrapper --> 
<div class="wrapper top_60 container">

<div class="row">
     
<!-- Profile Section
================================================== --> 
<div class="col-lg-3 col-md-4">
    <div class="profile">
        <div class="profile-name">
            <span class="name">{!! $resume->nama !!}</span><br>
            <span class="job">{!! $resume->pekerjaan !!}</span>
        </div>
        <figure class="profile-image">
            <img src="{{ asset('storage/' . $resume->foto) }}" alt="{!! $resume->nama !!}" title="{!! $resume->nama !!}">
        </figure> 
        <ul class="profile-information">
            <li></li>
            <li><p><span>Name:</span> {!! $resume->nama !!}</p></li>
            <li><p><span>Birthday:</span> {!! $resume->tanggal_lahir !!}</p></li>
            <li><p><span>Job:</span> {!! $resume->pekerjaan !!}</p></li>
            <li><p><span>Sosial Media:</span>
                <br>
                <br> 
            @foreach ($sosial as $sosial)
                <a href="{!! $sosial->link !!}" target="__blank"><i class="fa fa-{!! $sosial->nama_sosmed !!} fa-2x" style="padding: 0px 4px;"></i></a>
            @endforeach
        </p></li>
        <li>
            <a href="/">Back <i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        </ul>
        <div class="col-md-12">
            <a href="{{ route('cv.download', $resume->user_id) }}" class="site-btn icon">Download Cv <i class="fa fa-download" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- Page Tab Container Div -->   
<div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">
    
<!-- Header
================================================== --> 
<div class="row">
    <header class="col-md-12">
        <nav>
            <div class="row">
                <!-- navigation bar -->
                <div class="col-md-8 col-sm-8 col-xs-4">
                    <a class="home-btn" href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
                    <ul class="tabs">
                        <li class="tab"><a href="#about">ABOUT ME</a></li>
                        <li class="tab"><a href="#resume">RESUME</a></li>
                        <li class="tab"><a href="#portfolio">PORTFOLIO</a></li>
                        <li class="tab"><a href="#blog">BLOG</a></li>
                        <li class="tab"><a href="#contact">CONTACT</a></li>
                    </ul>

                </div>
                {{-- <div class="col-md-4 col-sm-4 col-xs-8 dynamic"> --}}
                    <a href="#contact" class="pull-right site-btn icon hidden-xs">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                    <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="hidden-md social-icons pull-right"> 
                        @foreach ($sosial1 as $sosial1)
                        <a class="fb" href="{!! $sosial1->link !!}" target="__blank"><i class="fa fa-{!! $sosial1->nama_sosmed !!}" aria-hidden="true"></i></a> 
                        @endforeach

                    </div>
                {{-- </div> --}}
            </div>
        </nav>
    </header>
        
    <!-- Page Content
    ================================================== --> 
    <div class="col-md-12">
        <div id="content" class="panel-container">
          
            <!-- Home Page
            ================================================== -->  
            <div id="about">
                <!-- Text Section -->
                <div class="row">
                    <section class="about-me line col-md-12 padding_30 padbot_45">
                    <div class="section-title"><span></span><h2>About Me</h2></div>
                    <p class="top_30">{!! $resume->about_me !!}
                        <br>
                </section>
                </div>
                <!-- My Services Section -->
                <div class="row">
                    <section class="services line graybg col-md-12 padding_50 padbot_50">
                    <div class="section-title bottom_45"><span></span><h2>Kompetensi</h2></div>
                    <div class="row">
                        <!-- a service -->
                        @foreach ($service as $service)
                            
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <img src="{{ asset('storage/' . $service->gambar) }}" alt="{!! $service->judul !!}" title="{!! $service->judul !!}" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <span class="title">{!! $service->judul !!}</span>
                                <p class="little-text">{!! $service->deskripsi !!}</p>
                            </div>
                        </div>
                        <!-- a service -->
                        @endforeach
                        
                    </div>
                </section>
                </div>
                <!-- Skills Section -->
                <div class="row">
                    <section class="design-skills col-md-6 padding_60 padbot_50">
                        <div class="section-title bottom_45"><span></span><h2> Skills</h2></div>
                        <ul class="skill-list">
                            @foreach ($skill as $skill)
                                
                            <li> 
                                <h3>{!! $skill->skill !!}</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:{{ $skill->persen }}%;"></div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </section>
                </div>
            </div>
            
            <!-- Resume Page
            ================================================== --> 
            <div id="resume">
                <!-- Resume Section -->
                <div class="row">
                    <section class="education">
                    <div class="section-title top_30"><span></span><h2>Resume</h2></div>
                        <div class="row">
                            <!-- Working History -->
                            <div class="working-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li><i class="fa fa-suitcase" aria-hidden="true"></i><h2 class="timeline-title">Experience & Prestasi</h2></li>
                                    <!-- a work -->
                                    @foreach ($working as $working)
                                        
                                    <li><h3 class="line-title" style="line-height: 20px;">{!! $working->judul !!}</h3>
                                        <span>{!! $working->tahun_awal !!} - {!! $working->tahun_akhir !!}</span>
                                        <p class="little-text">{!! $working->deskripsi !!}</p>
                                    </li>
                                    @endforeach

                                </ul> 
                            </div>  
                            <!-- Education History -->
                            <div class="education-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i><h2 class="timeline-title">Education History</h2></li>
                                    <!-- a work -->
                                    @foreach ($education as $education)
                                        
                                    <li><h3 class="line-title">{!! $education->judul !!}</h3>
                                        <span>{!! $education->tahun_awal !!} - {!! $education->tahun_akhir !!}</span>
                                        <p class="little-text">{!! $education->deskripsi !!}</p>
                                    </li>
                                    @endforeach

                                   <!-- a work -->
                                </ul> 
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Clients Section -->
                <div class="row">
                    <section class="clients col-md-12 graybg padding_45 padbot_45">
                        <div class="section-title bottom_30"><span></span><h2>Partnership</h2></div>
                        <div class="row">
                            @foreach ($client as $client)
                                
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="{{ asset('storage/' . $client->gambar) }}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <!-- Testimonials -->
                <div class="row">
                    <section class="testimonials bottom_30">
                        <div class="section-title top_60 bottom_30"><span></span><h2>Testimonials</h2></div>
                        <div class="owl-carousel row" data-items="3" data-autoplay="3000" data-pagination="true">
                            <!-- a item -->
                            @foreach ($testimonial as $testimonial)
                                @if ($testimonial->status == 'accept')
                                    
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('storage/' . $testimonial->gambar) }}" alt="{!! $testimonial->nama !!}" title="{!! $testimonial->nama !!}">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">{!! $testimonial->nama !!}</span>
                                            <span class="job">{!! $testimonial->profesi !!}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>{!! $testimonial->deskripsi !!}</p>
                                </div>
                            </div>
                            @endif

                            @endforeach

                            <!-- a item -->
                        </div>
                    </section>
                    <section class="contact-form col-md-12 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Testimonial Form</h2></div>
                        <form class="site-form" action="{{ route('cv.testi_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Gambar</span>
                                    <input type="file" class="site-input" @error('image') is-invalid @enderror name="gambar" placeholder="Name" id="image" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input class="site-input" placeholder="Name" name="nama" value="{{ old('nama') }}">
                                </div>
                                <div class="col-md-12">
                                    <input class="site-input" placeholder="Profesi" name="profesi" value="{{ old('profesi') }}">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="site-area" placeholder="Message" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                </div>
                                <input type="hidden" name="user_id" value="{{ $resume->user_id }}">
                                <input type="hidden" name="status" value="pending">
                                <div class="col-md-12 top_15 bottom_30">
                                    <button class="site-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>  
                    </section>
                </div>
                
            </div>
            <!-- Portfolio Page
            ================================================== --> 
            <div id="portfolio" class="row bottom_45">
                <section class="col-md-12">
                    <div class="col-md-12 content-header bottom_15">
                        <div class="section-title top_30 bottom_30"><span></span><h2>Portfolio</h2></div>
                        <div id="filters-container">
                            <!-- '*' means shows all item elements -->
                            <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">All</div>
                            @foreach ($kategori as $kategori)
                            <div data-filter=".{{  $kategori->kategori_name }}" class="cbp-filter-item">
                                {!!$kategori->kategori!!}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="grid-container" class="top_60">
                        @foreach ($portfolio as $portfolio)
                            @if ($portfolio->video)
                            <div class="cbp-item cbp-lightbox {!! $portfolio->kategori_name !!}">
                                <a href="{!! $portfolio->video !!}" class="cbp-lightbox">
                                    <figure>
                                        <div class="icon">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="{!! $portfolio->gambar !!}">                       
                                        <figcaption>
                                            <span class="title">{!! $portfolio->judul !!}</span><br/>
                                            <span class="info">{!! $portfolio->deskripsi !!}</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            @elseif($portfolio->link)
                            <div class="cbp-item {!! $portfolio->kategori_name !!}">
                                <a href="{!! $portfolio->link !!}" target="__blank">
                                    <figure>
                                        <div class="icon">
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                        </div>
                                        <img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="{!! $portfolio->gambar !!}">                       
                                        <figcaption>
                                            <span class="title">{!! $portfolio->judul !!}</span><br/>
                                            <span class="info">{!! $portfolio->deskripsi !!}</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            @else
                        <div class="cbp-item cbp-lightbox {!! $portfolio->kategori_name !!}">
                            <a href="{{ asset('storage/' . $portfolio->screenshot) }}" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="{!! $portfolio->gambar !!}">                       
                                    <figcaption>
                                        <span class="title">{!! $portfolio->judul !!}</span><br/>
                                        <span class="info">{!! $portfolio->deskripsi !!}</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                            @endif
                        @endforeach
                        

                        <!-- a work -->
                       
                    </div>
                    <!-- load more button -->
                </section>
            </div>
                
            <!-- Blog Page
            ================================================== --> 
            <div id="blog">
                <div class="row">
                    <section class="blog col-md-12 bottom_30">
                        <div class="col-md-12 content-header">
                            <div class="section-title top_30 bottom_15"><span></span><h2>Blog Posts</h2></div>
                        </div>
                        <div id="grid-blog" class="row">
                            <!-- a blog -->
                            @foreach ($tutorial as $tutorial)
                                @if ($tutorial->status == 'Aktif')
                            <div class="cbp-item">
                                <a href="{{ route('blogs.show', $tutorial->slug) }}" class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset('storage/' . $tutorial->gambar) }}" alt="{!! $tutorial->judul !!}" title="{!! $tutorial->judul !!}" style="width: 242px; height: 181px; object-fit: cover;">
                                    </div>
                                    <div class="blog-box-info">
                                        <h2 class="title">{{ $tutorial->judul }}</h2>
                                        <p class="little-text">{!! substr($tutorial->deskripsi, 0, 50) !!}</p>
                                        <span class="date">{!! $tutorial->tanggal !!}</span>
                                    </div>
                                </a>
                            </div>
                            @elseif($tutorial->status == 'NonAktif')

                            @endif
                            @endforeach
                            <!-- a blog -->
                        </div>
                        <!-- load more button -->
                    </section>
                </div>
            </div>
                
            <!-- Contact Page
            ================================================== --> 
            <div id="contact">
                <div class="row">
                    <!-- Contact Form -->
                    <section class="contact-form col-md-6 padding_30 padbot_45" id="contact1">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Contact Form</h2></div>
                        <form class="site-form" action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Name" name="nama" value="{{ old('nama') }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Instansi" name="instansi" value="{{ old('instansi') }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Jabatan" name="jabatan" value="{{ old('jabatan') }}">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="No Telp" name="no_telp" value="{{ old('no_telp') }}">
                                </div>
                                <div class="col-md-12">
                                    <input class="site-input" placeholder="E-mail" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="site-area" placeholder="Message" name="pesan">{{ old('pesan') }}</textarea>
                                </div>
                                <input type="hidden" name="user_id" value="{{ $resume->user_id }}">
                                <div class="col-md-12 top_15 bottom_30">
                                    <button class="site-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>  
                    </section>
                    
                    <!-- Contact Informations -->
                    <section class="contact-info col-md-6 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Contact Informations</h2></div>
                        <ul>
                            <li><span>Address:</span> {!! $konfigurasi[0]->alamat !!}</li>
                            <li><span>Job:</span> {!! $resume->pekerjaan !!}</li>
                            <li>
                                <div class="social-icons top_15"> 
                                    @foreach ($sosial2 as $sosial2)
                                    <a class="fb" href="{!! $sosial2->link !!}"><i class="fa fa-{!! $sosial2->nama_sosmed !!}" aria-hidden="true"></i></a> 
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </section>
                    
                    <!-- Contact Map -->
                    <section class="contact-map col-md-12 top_15 bottom_15">
                        <div class="section-title bottom_30"><span></span><h2>Contact Map.</h2></div>  
                        {!! $resume->contact_map !!}
                    </section>
                </div>
            </div>
            
        </div><!-- Content - End -->
     </div> <!-- col-md-12 end -->
</div><!-- row end -->
<!-- Footer
================================================== --> 
<footer>
    <div class="footer col-md-12 top_30 bottom_30">
        <div class="name col-md-4 hidden-md hidden-sm hidden-xs">{!! $resume->nama !!}.</div>
        <div class="copyright col-lg-8 col-md-12">© 2022 all right reserved. <a href="https://wanteknologi.com">Wan Teknologi</a> </div>  
    </div>
</footer>
    
</div> <!-- Tab Container - End -->
</div> <!-- Row - End --> 
</div> <!-- Wrapper - End -->   

<!-- Javascripts
================================================== -->  
<script src="../../assets/user/js/jquery-2.1.4.min.js"></script> 
<script src="../../assets/user/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="../../assets/user/js/bootstrap.min.js"></script> 
<script src="../../assets/user/js/jquery.easytabs.min.js"></script>
<script src="../../assets/user/js/owl.carousel.min.js"></script> 
<script src="../../assets/user/js/main.js"></script>
<!-- for color alternatives -->
{{-- <script src="../../assets/user/js/jquery.cookie-1.4.1.min.js"></script>
<script src="../../assets/user/js/Demo.js"></script>
<link rel="stylesheet" href="../../assets/user/css/Demo.min.css" /> --}}
 
@include('sweetalert::alert')

</body>
</html>
