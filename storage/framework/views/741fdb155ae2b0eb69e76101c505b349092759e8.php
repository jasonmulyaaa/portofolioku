<!doctype html>
<html lang="en">
<head>

    <?php
        use App\Models\Portfolio;
    ?>
<!-- Simple Page Needs
================================================== -->
<title><?php echo e($konfigurasi[0]->judul); ?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $meta[0]->deskripsi; ?>">
<meta name="keywords" content="<?php echo $meta[0]->keywords; ?>">
<meta name="title" content="<?php echo $konfigurasi[0]->judul; ?>" />
<meta name="search engines" content="<?php echo $meta[0]->search_engine; ?>">
<meta name="author" content="<?php echo $meta[0]->author; ?>">
<meta name="website" content="<?php echo $meta[0]->website; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Favicon
================================================== -->  
<link href="<?php echo e(asset('storage/' . $konfigurasi[0]->favicon)); ?>" rel="shortcut icon" type="image/x-icon" />

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
            <img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="<?php echo $resume->nama; ?>" title="<?php echo $resume->nama; ?>">
        </figure> 
        <ul class="profile-information">
            <li></li>
            <li><p><span>Name:</span> <?php echo $resume->nama; ?></p></li>
            <li><p><span>Birthday:</span> <?php echo $resume->tanggal_lahir; ?></p></li>
            <li><p><span>Job:</span> <?php echo $resume->pekerjaan; ?></p></li>
            <li><p><span>Sosial Media:</span>
                <br>
                <br> 
            <?php $__currentLoopData = $sosial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo $sosial->link; ?>" target="__blank"><i class="fa fa-<?php echo $sosial->nama_sosmed; ?> fa-2x" style="padding: 0px 4px;"></i></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p></li>
        <li>
            <a href="/">Back <i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        </ul>
        <div class="col-md-12">
            <a href="<?php echo e(route('cv.download', $resume->user_id)); ?>" class="site-btn icon">Download Cv <i class="fa fa-download" aria-hidden="true"></i></a>
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
                
                    <a href="#contact" class="pull-right site-btn icon hidden-xs">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                    <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="hidden-md social-icons pull-right"> 
                        <?php $__currentLoopData = $sosial1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosial1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="fb" href="<?php echo $sosial1->link; ?>" target="__blank"><i class="fa fa-<?php echo $sosial1->nama_sosmed; ?>" aria-hidden="true"></i></a> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
            <div id="about">
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
                    <div class="section-title bottom_45"><span></span><h2>Kompetensi</h2></div>
                    <div class="row">
                        <!-- a service -->
                        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <img src="<?php echo e(asset('storage/' . $service->gambar)); ?>" alt="<?php echo $service->judul; ?>" title="<?php echo $service->judul; ?>" style="max-height: 60px; max-width: 60px;">
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
                        <div class="section-title bottom_45"><span></span><h2> Skills</h2></div>
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
                                    <li><i class="fa fa-suitcase" aria-hidden="true"></i><h2 class="timeline-title">Experience & Prestasi</h2></li>
                                    <!-- a work -->
                                    <?php $__currentLoopData = $working; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $working): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    <li><h3 class="line-title" style="line-height: 20px;"><?php echo $working->judul; ?></h3>
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
                        <div class="section-title bottom_30"><span></span><h2>Partnership</h2></div>
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
                                <?php if($testimonial->status == 'accept'): ?>
                                    
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="<?php echo e(asset('storage/' . $testimonial->gambar)); ?>" alt="<?php echo $testimonial->nama; ?>" title="<?php echo $testimonial->nama; ?>">
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
                            <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <!-- a item -->
                        </div>
                    </section>
                    <section class="contact-form col-md-12 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Testimonial Form</h2></div>
                        <form class="site-form" action="<?php echo e(route('cv.testi_store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Gambar</span>
                                    <input type="file" class="site-input" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="gambar" placeholder="Name" id="image" onchange="previewImage()">
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-12">
                                    <input class="site-input" placeholder="Name" name="nama" value="<?php echo e(old('nama')); ?>">
                                </div>
                                <div class="col-md-12">
                                    <input class="site-input" placeholder="Profesi" name="profesi" value="<?php echo e(old('profesi')); ?>">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="site-area" placeholder="Message" name="deskripsi"><?php echo e(old('deskripsi')); ?></textarea>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo e($resume->user_id); ?>">
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
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div data-filter=".<?php echo e($kategori->kategori_name); ?>" class="cbp-filter-item">
                                <?php echo $kategori->kategori; ?>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div id="grid-container" class="top_60">
                        <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($portfolio->video): ?>
                            <div class="cbp-item cbp-lightbox <?php echo $portfolio->kategori_name; ?>">
                                <a href="<?php echo $portfolio->video; ?>" class="cbp-lightbox">
                                    <figure>
                                        <div class="icon">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="<?php echo $portfolio->gambar; ?>">                       
                                        <figcaption>
                                            <span class="title"><?php echo $portfolio->judul; ?></span><br/>
                                            <span class="info"><?php echo $portfolio->deskripsi; ?></span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <?php elseif($portfolio->link): ?>
                            <div class="cbp-item <?php echo $portfolio->kategori_name; ?>">
                                <a href="<?php echo $portfolio->link; ?>" target="__blank">
                                    <figure>
                                        <div class="icon">
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                        </div>
                                        <img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="<?php echo $portfolio->gambar; ?>">                       
                                        <figcaption>
                                            <span class="title"><?php echo $portfolio->judul; ?></span><br/>
                                            <span class="info"><?php echo $portfolio->deskripsi; ?></span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <?php else: ?>
                        <div class="cbp-item cbp-lightbox <?php echo $portfolio->kategori_name; ?>">
                            <a href="<?php echo e(asset('storage/' . $portfolio->screenshot)); ?>" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="<?php echo $portfolio->gambar; ?>">                       
                                    <figcaption>
                                        <span class="title"><?php echo $portfolio->judul; ?></span><br/>
                                        <span class="info"><?php echo $portfolio->deskripsi; ?></span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

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
                            <?php $__currentLoopData = $tutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($tutorial->status == 'Aktif'): ?>
                            <div class="cbp-item">
                                <a href="<?php echo e(route('blogs.show', $tutorial->slug)); ?>" class="blog-box">
                                    <div class="blog-img">
                                        <img src="<?php echo e(asset('storage/' . $tutorial->gambar)); ?>" alt="<?php echo $tutorial->judul; ?>" title="<?php echo $tutorial->judul; ?>" style="width: 242px; height: 181px; object-fit: cover;">
                                    </div>
                                    <div class="blog-box-info">
                                        <h2 class="title"><?php echo e($tutorial->judul); ?></h2>
                                        <p class="little-text"><?php echo substr($tutorial->deskripsi, 0, 50); ?></p>
                                        <span class="date"><?php echo $tutorial->tanggal; ?></span>
                                    </div>
                                </a>
                            </div>
                            <?php elseif($tutorial->status == 'NonAktif'): ?>

                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <form class="site-form" action="<?php echo e(route('cv.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Name" name="nama" value="<?php echo e(old('nama')); ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Instansi" name="instansi" value="<?php echo e(old('instansi')); ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Jabatan" name="jabatan" value="<?php echo e(old('jabatan')); ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="No Telp" name="no_telp" value="<?php echo e(old('no_telp')); ?>">
                                </div>
                                <div class="col-md-12">
                                    <input class="site-input" placeholder="E-mail" name="email" value="<?php echo e(old('email')); ?>">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="site-area" placeholder="Message" name="pesan"><?php echo e(old('pesan')); ?></textarea>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo e($resume->user_id); ?>">
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
                            <li><span>Address:</span> <?php echo $konfigurasi[0]->alamat; ?></li>
                            <li><span>Job:</span> <?php echo $resume->pekerjaan; ?></li>
                            <li>
                                <div class="social-icons top_15"> 
                                    <?php $__currentLoopData = $sosial2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosial2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="fb" href="<?php echo $sosial2->link; ?>"><i class="fa fa-<?php echo $sosial2->nama_sosmed; ?>" aria-hidden="true"></i></a> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </li>
                        </ul>
                    </section>
                    
                    <!-- Contact Map -->
                    <section class="contact-map col-md-12 top_15 bottom_15">
                        <div class="section-title bottom_30"><span></span><h2>Contact Map.</h2></div>  
                        <?php echo $resume->contact_map; ?>

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

 
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Resume\resources\views/cv/show.blade.php ENDPATH**/ ?>