<!doctype html>
<html lang="en">
<head>

<!-- Simple Page Needs
================================================== -->
<title><?php echo e($konfigurasi[0]->judul); ?></title>
<meta charset="UTF-8">
<meta name="description" content="Mat - Resume & vCard HTML Template">
<meta name="keywords" content="personal, vcard, portfolio">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Favicon
================================================== -->  
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

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
            <span class="name"><?php echo $resume->nama; ?></span><br>
            <span class="job"><?php echo $resume->pekerjaan; ?></span>
        </div>
        <figure class="profile-image">
            <img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="">
        </figure> 
        <ul class="profile-information">
            <li></li>
            <li><p><span>Name:</span> <?php echo $resume->nama; ?></p></li>
            <li><p><span>Birthday:</span> <?php echo $resume->tanggal_lahir; ?></p></li>
            <li><p><span>Job:</span> <?php echo $resume->pekerjaan; ?></p></li>
            <li><p><span>Email:</span> <?php echo $resume->email; ?></p></li>
            <?php $__currentLoopData = $sosial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><p><span><?php echo $sosial->nama_sosmed; ?>:</span> <?php echo $sosial->link; ?></p></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <div class="col-md-12">
            <button class="site-btn icon">Download Cv <i class="fa fa-download" aria-hidden="true"></i></button>
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
                            <a class="home-btn" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                        <li class="tab"><a href="#resume">RESUME</a></li>
                        <li class="tab"><a href="#portfolio">PORTFOLIO</a></li>
                        <li class="tab"><a href="#blog">BLOG</a></li>
                        <li class="tab"><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-8 dynamic">
                    <button class="pull-right site-btn icon hidden-xs">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="hidden-md social-icons pull-right"> 
                        <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                        <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                        <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                        <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a> 
                    </div>
                </div>
            </div>
        </nav>
    </header>
        
    <!-- Page Content
    ================================================== --> 
    <div class="col-md-12">
        <div id="content" class="panel-container">
          
            <!-- Home Page
            ================================================== -->  
            <div id="home">
                <!-- Text Section -->
                <div class="row">
                    <section class="about-me line col-md-12 padding_30 padbot_45">
                    <div class="section-title"><span></span><h2>About Me</h2></div>
                    <p class="top_30"><?php echo $resume->about_me; ?>

                        <br>
                </section>
                </div>
                <!-- My Services Section -->
                <div class="row">
                    <section class="services line graybg col-md-12 padding_50 padbot_50">
                    <div class="section-title bottom_45"><span></span><h2>My Services</h2></div>
                    <div class="row">
                        <!-- a service -->
                        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-html"></i>
                                </div>
                                <span class="title"><?php echo $service->judul; ?></span>
                                <p class="little-text"><?php echo $service->deskripsi; ?></p>
                            </div>
                        </div>
                        <!-- a service -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </section>
                </div>
                <!-- Skills Section -->
                <div class="row">
                    <section class="design-skills col-md-6 padding_60 padbot_50">
                        <div class="section-title bottom_45"><span></span><h2>Design Skills</h2></div>
                        <ul class="skill-list">
                            <?php $__currentLoopData = $skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <li> 
                                <h3><?php echo $skill->skill; ?></h3>
                                <div class="progress">
                                    <div class="percentage" style="width:<?php echo e($skill->persen); ?>%;"></div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                                    <li><i class="fa fa-suitcase" aria-hidden="true"></i><h2 class="timeline-title">Working History</h2></li>
                                    <!-- a work -->
                                    <?php $__currentLoopData = $working; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $working): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    <li><h3 class="line-title"><?php echo $working->judul; ?></h3>
                                        <span><?php echo $working->tahun_awal; ?> - <?php echo $working->tahun_akhir; ?></span>
                                        <p class="little-text"><?php echo $working->deskripsi; ?></p>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul> 
                            </div>  
                            <!-- Education History -->
                            <div class="education-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i><h2 class="timeline-title">Education History</h2></li>
                                    <!-- a work -->
                                    <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    <li><h3 class="line-title"><?php echo $education->judul; ?></h3>
                                        <span><?php echo $education->tahun_awal; ?> - <?php echo $education->tahun_akhir; ?></span>
                                        <p class="little-text"><?php echo $education->deskripsi; ?></p>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                   <!-- a work -->
                                </ul> 
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Clients Section -->
                <div class="row">
                    <section class="clients col-md-12 graybg padding_45 padbot_45">
                        <div class="section-title bottom_30"><span></span><h2>Clients</h2></div>
                        <div class="row">
                            <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="<?php echo e(asset('storage/' . $client->gambar)); ?>" alt="">
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </section>
                </div>
                <!-- Testimonials -->
                <div class="row">
                    <section class="testimonials bottom_30">
                        <div class="section-title top_60 bottom_30"><span></span><h2>Testimonials</h2></div>
                        <div class="owl-carousel row" data-items="3" data-autoplay="3000" data-pagination="true">
                            <!-- a item -->
                            <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="<?php echo e(asset('storage/' . $testimonial->gambar)); ?>" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name"><?php echo $testimonial->nama; ?></span>
                                            <span class="job"><?php echo $testimonial->profesi; ?></span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p><?php echo $testimonial->deskripsi; ?></p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <!-- a item -->
                        </div>
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
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div data-filter=".<?php echo $kategori->kategori; ?>" class="cbp-filter-item"><?php echo e($kategori->kategori); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div id="grid-container" class="top_60">
                        <!-- a work -->
                        <!-- a video work -->
                        
                        <!-- a image work -->
                        <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <div class="cbp-item cbp-lightbox <?php echo $portfolio->kategori; ?>">
                            <a href="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="">                       
                                    <figcaption>
                                        <span class="title"><?php echo $portfolio->judul; ?></span><br/>
                                        <span class="info"><?php echo $portfolio->deskripsi; ?></span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <!-- a work -->
                       
                    </div>
                    <!-- load more button -->
                    <div id="js-loadMore-agency" class="cbp-l-loadMore-button top_30">
                        <a href="load-more/portfolio.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                            <span class="cbp-l-loadMore-defaultText">Load More (<span class="cbp-l-loadMore-loadItems">3</span>)</span>
                            <span class="cbp-l-loadMore-loadingText">Loading...</span>
                            <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                        </a>
                    </div>
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
                            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <div class="cbp-item">
                                <a href="blog-posts/blog-1.html" class="blog-box">
                                    <div class="blog-img">
                                        <img src="<?php echo e(asset('storage/' . $blog->gambar)); ?>" alt="">
                                    </div>
                                    <div class="blog-box-info">
                                        <h2 class="title"><?php echo e($blog->judul); ?></h2>
                                        <p class="little-text"><?php echo $blog->deskripsi; ?></p>
                                        <span class="date"><?php echo $blog->tanggal; ?></span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- a blog -->
                        </div>
                        <!-- load more button -->
                        <div id="load-posts" class="cbp-l-loadMore-button top_60">
                            <a href="load-more/blog-posts.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                                <span class="cbp-l-loadMore-defaultText">Load More (<span class="cbp-l-loadMore-loadItems">3</span>)</span>
                                <span class="cbp-l-loadMore-loadingText">Loading...</span>
                                <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
                
            <!-- Contact Page
            ================================================== --> 
            <div id="contact">
                <div class="row">
                    <!-- Contact Form -->
                    <section class="contact-form col-md-6 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Contact Form</h2></div>
                        <form class="site-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="E-mail">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="site-area" placeholder="Message"></textarea>
                                </div>
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
                            <li><span>Address:</span> <?php echo $resume->alamat; ?></li>
                            <li><span>Phone:</span> <?php echo $resume->no_telp; ?></li>
                            <li><span>Job:</span> <?php echo $resume->pekerjaan; ?></li>
                            <li><span>E-mail:</span> <?php echo $resume->email; ?></li>
                            <li>
                                <div class="social-icons top_15"> 
                                    <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                                    <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                                    <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                                    <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a> 
                                </div>
                            </li>
                        </ul>
                    </section>
                    <!-- Contact Map -->
                    <section class="contact-map col-md-12 top_15 bottom_15">
                        <div class="section-title bottom_30"><span></span><h2>Contact Map.</h2></div>  
                        <iframe src="<?php echo e($resume->contact_map); ?>" height="350" style="border:0" allowfullscreen></iframe>
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
        <div class="name col-md-4 hidden-md hidden-sm hidden-xs"><?php echo $resume->nama; ?>.</div>
        <div class="copyright col-lg-8 col-md-12">© 2017 All rights reserved. Designed by <a href="https://themeforest.net/user/tavonline">tavonline</a> </div>  
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
<script src="../../assets/user/js/jquery.cookie-1.4.1.min.js"></script>
<script src="../../assets/user/js/Demo.js"></script>
<link rel="stylesheet" href="../../assets/user/css/Demo.min.css" />
 

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Resume\resources\views/resume/show.blade.php ENDPATH**/ ?>