<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $meta[0]->deskripsi; ?>">
	<meta name="keywords" content="<?php echo $meta[0]->keywords; ?>">
    <meta name="title" content="<?php echo $konfigurasi[0]->judul; ?>" />
    <meta name="search engines" content="<?php echo $meta[0]->search_engine; ?>">
    <meta name="author" content="<?php echo $meta[0]->author; ?>">
    <meta name="website" content="<?php echo $meta[0]->website; ?>">
    <title><?php echo e($konfigurasi[0]->judul); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('storage/' . $konfigurasi[0]->favicon)); ?>" type="image/x-icon">

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
                            <i class="icofont-ui-call"></i> <span>+<?php echo $konfigurasi[0]->no_telp; ?></span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> <?php echo $konfigurasi[0]->alamat; ?>

                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li><p>Find us on : </p></li>
                        <li><a href="<?php echo $konfigurasi[0]->instagram; ?>" target="__blank" class="twitter"><i class="icofont-instagram"></i></a></li>
                        <li><a href="https://wa.me/<?php echo $konfigurasi[0]->no_telp; ?>" target="__blank" class="vimeo"><i class="icofont-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>  
        <div class="header-bottom" style=" background: linear-gradient(116.85deg, #108ACB, #108ACB );">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="/"><img src="<?php echo e(asset('storage/' . $konfigurasi[0]->logo_header)); ?>" alt="<?php echo $konfigurasi[0]->judul; ?>" title="<?php echo $konfigurasi[0]->judul; ?>"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="#home">Home</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo e(route('courses.index')); ?>">Courses</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('cv.index')); ?>">CV</a>
                                </li>
                                <li>
                                    <a href="#0">Tutorials</a>
                                    <ul class="lab-ul">
                                        <?php $__currentLoopData = $kategoritutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoritutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        <li>
                                            <a href="<?php echo e(route('tutorials.show', $kategoritutorial->kategori_name)); ?>"><?php echo $kategoritutorial->kategori; ?></a>
                                            
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('galleries.index')); ?>">Gallery</a>
                                </li>
                                <li><a href="<?php echo e(route('contact.index')); ?>">Contact Us</a></li>
                                <?php if(auth()->check()): ?>
                                
                                <li><a href="<?php echo e(route('profile.index')); ?>" class="signup" style="background: #2c2c2c;"><i class="icofont-user"></i>Profile</a></li>

                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php if(!auth()->check()): ?>
                                
                        <a href="<?php echo e(route('login')); ?>" class="signup" style="background: #2c2c2c;"><i class="icofont-user"></i> <span>LOG IN</span> </a>

                        <?php endif; ?>

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
    <section class="banner-section style-7" id="home" style="background-image: url(<?php echo e(asset('storage/' . $banner[0]->gambar)); ?>);">
        <div class="container">
            <div class="section-wrapper">
                <div class="banner-top">
                    <div class="row justify-content-center">
                        <div class="offset-xl-7 col-xl-6">
                            <div class="banner-content">
                                <h2 class="title"><?php echo $banner[0]->judul; ?></h2>
                                <p class="desc"><?php echo $banner[0]->deskripsi; ?></p>
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
                <span class="subtitle" style="color: #3183f7"><?php echo $pagetitle[0]->subjudul_cv; ?></span>
                <h3 class="title"><?php echo $pagetitle[0]->judul_cv; ?></h3>
            </div>

            <div class="section-wrapper">
                <div class="course-slider p-2">
                    <div class="section-header text-center">
                        <h2 class="title">Mentor</h2>
                    </div>
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $resume1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resume1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $pengajar = User::where('id', $resume1->user_id)->first();
                            ?>
                            <?php if($pengajar->role == 'Pengajar'): ?>
                        <div class="swiper-slide">
                            <div class="instructor-item style-2">
                                <div class="instructor-inner">
                                    <div class="instructor-thumb">
                                        <a href="<?php echo e(route('cv.show_pengajar', $resume1->slug)); ?>" target="__blank"><img src="<?php echo e(asset('storage/' . $resume1->foto)); ?>" alt="<?php echo $resume1->nama; ?>" title="<?php echo $resume1->nama; ?>" style="width: 365px;"></a>
                                    </div>
                                    <div class="instructor-content">
                                        <a href="<?php echo e(route('cv.show_pengajar', $resume1->slug)); ?>" target="__blank"><b><?php echo $resume1->nama; ?></b></a>
                                        <span class="d-block"><?php echo $resume1->pekerjaan; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                    <?php $__currentLoopData = $resume; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resume): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $pelajar = User::where('id', $resume->user_id)->first();
                    ?>
                    <?php if($pelajar->role == 'PKL' || $pelajar->role == 'User'): ?>
                        
                    <div class="col">
                        <div class="course-item style-5">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <a href="<?php echo e(route('cv.show', $resume->slug)); ?>" target="__blank"><img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="<?php echo $resume->nama; ?>" title="<?php echo $resume->nama; ?>" style="width: 365px; height: 198px; object-fit: cover;"></a>
                                </div>
                                <div class="course-content">
                                    <a href="<?php echo e(route('cv.show', $resume->slug)); ?>" target="__blank"><b><?php if( strlen($resume->nama) >= 30 ): ?><?php echo substr($resume->nama, 0, 30); ?>... <?php else: ?> <?php echo $resume->nama; ?> <?php endif; ?></b></a>
                                    <span class="course-cate"><?php if(strlen($resume->pekerjaan) >= 15): ?><?php echo substr($resume->pekerjaan, 0, 15); ?>... <?php else: ?> <?php echo $resume->pekerjaan; ?> <?php endif; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <br> 
                </div>
                <br>
                <br>
                <div class="section-header text-center">
                    <a href="<?php echo e(route('cv.index')); ?>" class="lab-btn text-center" style="background: #3183f7;"><span>See More</span></a>
                </div>
            
            </div>
        </div>
    </div>

    <!-- course section start here -->
    
    <!-- course section ending here -->

    <!-- Features Start Here -->
    <section class="feature-section style-2 style-4 padding-tb pb-0">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle yellow-color">Choose Any One Course</span>
                <h3 class="title"><?php echo $gambarwhycourse[0]->judul; ?></h3>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-lg-4 col-sm-6 col-12 order-lg-1">
                        <div class="feature-thumb">
                            <div class="abs-thumb">
                                <img src="<?php echo e(asset('storage/' . $gambarwhycourse[0]->gambar)); ?>" alt="<?php echo $gambarwhycourse[0]->judul; ?>" title="<?php echo $gambarwhycourse[0]->judul; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 order-lg-0">
                        <div class="left text-lg-end">
                            <?php $__currentLoopData = $whycourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whycourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <div class="feature-item">
                                <div class="feature-inner flex-lg-row-reverse">
                                    <div class="feature-icon">
                                        <i class="icofont-<?php echo $whycourse->icon; ?>"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5><?php echo $whycourse->judul; ?></h5>
                                        <p><?php echo $whycourse->deskripsi; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 order-lg-2">
                        <div class="right">
                            <?php $__currentLoopData = $whycourse1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whycourse1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="feature-item">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <i class="icofont-<?php echo $whycourse1->icon; ?>"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5><?php echo $whycourse1->judul; ?></h5>
                                        <p><?php echo $whycourse1->deskripsi; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <span class="subtitle yellow-color"><?php echo $pagetitle[0]->subjudul_tutorial; ?></span>
                <div class="sponsor-section">
                    <div class="container">
                        <div class="section-wrapper">
                            <div class="sponsor-slider">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $partner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    <div class="swiper-slide">
                                        <div class="sponsor-iten">
                                            <div class="sponsor-thumb">
                                                <img src="<?php echo e(asset('storage/'. $partner->logo)); ?>" alt="<?php echo $partner->judul; ?>" title="<?php echo $partner->judul; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="title"><?php echo $pagetitle[0]->judul_tutorial; ?></h3>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <div class="col">
                        <div class="post-item style-3">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="<?php echo e(route('blogger.show', $blog->slug)); ?>"><img src="<?php echo e(asset('storage/' . $blog->gambar)); ?>" alt="<?php echo $blog->judul; ?>" title="<?php echo $blog->judul; ?>" style="max-width: 420px; height: 250px; object-fit: cover;"></a>
                                </div>
                                <div class="post-content">
                                    <a href=""><h4><?php echo $blog->judul; ?></h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i><?php echo $blog->nama; ?></li>
                                            <li><i class="icofont-calendar"></i><?php echo $blog->created_at; ?></li>
                                        </ul>
                                    </div>
                                    <p><?php echo substr($blog->deskripsi, 0, 80); ?></p>
                                    <a href="" class="lab-btn"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                                        <img src="<?php echo e(asset('storage/' . $konfigurasi[0]->logo_footer)); ?>" alt="<?php echo $konfigurasi[0]->judul; ?>" title="<?php echo $konfigurasi[0]->judul; ?>">
                                    </div>
                                    <div class="content">
                                        <p><?php echo $konfigurasi[0]->deskripsi; ?></p>
                                        <ul class="lab-ul office-address">
                                            <li><i class="icofont-google-map"></i><?php echo $konfigurasi[0]->alamat; ?></li>
                                            <li><i class="icofont-phone"></i>+<?php echo $konfigurasi[0]->no_telp; ?></li>
                                            <li><i class="icofont-envelope"></i><?php echo $konfigurasi[0]->email; ?></li>
                                        </ul>
                                        <ul class="lab-ul social-icons">
                                            <li>
                                                <a href="<?php echo e($konfigurasi[0]->instagram); ?>" class="instagram"><i class="icofont-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wa.me/<?php echo $konfigurasi[0]->no_telp; ?>" class="whatsapp"><i class="icofont-whatsapp"></i></a>
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
                                            <?php $__currentLoopData = $ourcourse1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ourcourse1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('courses.show', $ourcourse1->slug)); ?>"><?php echo $ourcourse1->judul; ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <?php $__currentLoopData = $tutorial1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tutorial1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <li>
                                                <i class="icofont-paper"></i>
                                                <p><?php echo $tutorial1->nama; ?><br><a href="<?php echo e(route('tutorials.show', $tutorial1->slug)); ?>"><?php echo $tutorial1->judul; ?></a><br><?php echo $tutorial1->created_at; ?></p>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
</html><?php /**PATH C:\xampp\htdocs\Resume\resources\views/welcome.blade.php ENDPATH**/ ?>