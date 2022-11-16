<!doctype html>
<html lang="en">
<head>

<!-- Simple Page Needs
================================================== -->
<title>{{ $konfigurasi[0]->judul }}</title>
<meta charset="UTF-8">
<meta name="description" content="{!! $meta[0]->deskripsi !!}">
<meta name="title" content="{!! $konfigurasi[0]->judul !!}" />
<meta name="search engines" content="{!! $meta[0]->search_engine !!}">
<meta name="author" content="{!! $meta[0]->author !!}">
<meta name="website" content="{!! $meta[0]->website !!}">
<meta name="keywords" content="{!! $tutorial->keywords !!}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Favicon
================================================== -->  
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../../assets/user/css/bootstrap.css"/>
<link rel="stylesheet" href="../../assets/user/css/reset.css"/>
<link rel="stylesheet" href="../../assets/user/cubeportfolio/css/cubeportfolio.min.css"/>
<link rel="stylesheet" href="../../assets/user/css/style.css"/>
<link rel="stylesheet" href="../../assets/user/css/colors/yellow.css" id="color" />
    
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
            <li><img src="../images/glasses.png" alt=""></li>
            <li><p><span>Name:</span> {!! $resume->nama !!}</p></li>
            <li><p><span>Birthday:</span> {!! $resume->tanggal_lahir !!}</p></li>
            <li><p><span>Job:</span> {!! $resume->pekerjaan !!}</p></li>
            <li><p><span>Sosial Media:</span>
                <br>
                <br> 
            @foreach ($sosial as $sosial)
                <a href=""><i class="fa fa-{!! $sosial->nama_sosmed !!} fa-2x"></i></a>
            @endforeach
        </p></li>

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
                    <ul class="tabs">
                        <li class="tab">
                            <a class="home-btn" href="{{ route('cv.show', $resume->slug) }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                        <li class="tab"><a href="{{ route('cv.show', $resume->slug) }}">BACK TO BLOG PAGE</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-8 dynamic">
                    <a href="https://wa.me/{{ $resume->no_telp }}" class="pull-right site-btn icon hidden-xs">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                    <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="hidden-md social-icons pull-right"> 
                        @foreach ($sosial1 as $sosial1)
                        <a class="fb" href="{!! $sosial1->link !!}"><i class="fa fa-{!! $sosial1->nama_sosmed !!}" aria-hidden="true"></i></a> 
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>   
<!-- Page Content
================================================== --> 
<div id="content" class="panel-container col-md-12">
  
    <!-- Blog Page
    ================================================== --> 
    <div id="blog-post">
        <div class="row">
            <!--Blog Post-->
            <div class="col-md-8 post">
                <div class="blog-image">
                    <img src="{{ asset('storage/' . $tutorial->gambar) }}" alt="{!! $tutorial->judul !!}" title="{!! $tutorial->judul !!}">
                </div>
                 <div class="post-content">
                    <h1 class="blog-title bottom_30 top_30">{!! $tutorial->judul !!}</h1>
                    <p>{!! $tutorial->deskripsi !!} </p>

                </div>
                <!-- Related Post -->
                <!-- Post Comments -->

            </div> <!-- post end -->
            <!--Sidebar-->
            <div class="col-md-4 blog-sidebar">
                <!-- Category List -->

                <!-- Popular Post -->
                <div class="post-list">
                    <div class="section-title bottom_15 top_60"><span></span><h3>Related Posts</h3></div>
                    <ul>
                        <!-- a post -->
                        @foreach ($tutorial1 as $tutorial1)
                            
                        <li>
                            <a href="{{ route('blogs.show', $tutorial1->slug) }}">
                                <div class="info"> <span>{!! $tutorial1->created_at !!}</span></div>
                                <p class="little-text">{!! $tutorial1->judul !!}</p>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <!-- Advertisement -->

            </div> 
        </div>
    </div>
    
</div><!-- Content - End -->
 
<!-- Footer
================================================== --> 
<footer>
    <div class="footer col-md-12 top_30 bottom_30">
        <div class="name col-md-4 hidden-md hidden-sm hidden-xs">{!! $resume->nama !!}</div>
        <div class="copyright col-md-8">© 2022 all right reserved. <a href="https://wanteknologi.com">Wan Teknologi</a>  </div>  
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
<script src="../../assets/user/js/main.js"></script>
<!-- for color alternatives -->
<script src="../../assets/user/js/jquery.cookie-1.4.1.min.js"></script>
<script src="../../assets/user/js/subpage-demo.js"></script>
<link rel="stylesheet" href="../../assets/user/css/Demo.min.css" />

</body>
</html>
