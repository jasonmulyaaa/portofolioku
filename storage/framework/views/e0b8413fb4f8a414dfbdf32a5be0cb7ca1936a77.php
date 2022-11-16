<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Basic -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $konfigurasi[0]->judul; ?></title>
    <meta name="description" content="<?php echo $meta[0]->deskripsi; ?>">
	<meta name="keywords" content="<?php echo $meta[0]->keywords; ?>">
    <meta name="title" content="<?php echo $konfigurasi[0]->judul; ?>" />
    <meta name="search engines" content="<?php echo $meta[0]->search_engine; ?>">
    <meta name="author" content="<?php echo $meta[0]->author; ?>">
    <meta name="website" content="<?php echo $meta[0]->website; ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('storage/' . $konfigurasi[0]->favicon)); ?>" type="image/x-icon">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- Load Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" href="../../assets/user/pengajar/css/basic.css" />
	<link rel="stylesheet" href="../../assets/user/pengajar/css/layout.css" />
	<link rel="stylesheet" href="../../assets/user/pengajar/css/ionicons.css" />
	<link rel="stylesheet" href="../../assets/user/pengajar/css/owl.carousel.css" />
	<link rel="stylesheet" href="../../assets/user/pengajar/css/magnific-popup.css" />
	<link rel="stylesheet" href="../../assets/user/pengajar/css/animate.css" />
	
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	
</head>

<body>
	
	<!-- Page -->
	<div class="page" id="blog-section">

		<!-- Preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Started Background -->
		<div class="started-bg">
			<div class="slide" style="background-image: url(https://miota.id/wp-content/uploads/2018/08/Building.jpg);"></div>
		</div>

		<!-- Header -->
		<header>
			<div class="top-menu">
				<ul>
					<li>
						<a class="btn_animated" href="<?php echo e(route('cv.show_pengajar', $resume->slug)); ?>"><span class="circle">Home</span></a>
					</li>
				</ul>
				<a href="#" class="menu-btn"><span></span></a>
			</div>
		</header>
		
		<!-- Container -->
		<div class="container">

			<!-- Started -->
			<div class="section started">
				<div class="st-box">
					<div class="st-bts">
						<a href="mailto:smorgan@domain.com" class="btn_animated">
							<span class="circle"><i class="icon ion ion-plus"></i></span>
						</a>
					</div>
					<div class="st-image"><img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="<?php echo $resume->nama; ?>" title="<?php echo $resume->nama; ?>"/></div>
					<div class="st-title"><?php echo $resume->nama; ?></div>
					<div class="st-subtitle"><?php echo $resume->pekerjaan; ?></div>
					<div class="st-soc">
						 <?php $__currentLoopData = $sosial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							 
						<a target="_blank" href="<?php echo $sosial->link; ?>" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-<?php echo $sosial->nama_sosmed; ?>"></i></span>
						</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>

			<!-- Wrapper -->
			<div class="wrapper">

				<div class="blog-single content-box">
					<div class="row">
						<div class="col col-m-12 col-t-12 col-d-12">
							
							<div class="text-box">

								<h1><?php echo $blog->judul; ?></h1>						
								<div class="blog-detail">Posted <span><?php echo $blog->tanggal; ?></span></div>

								<div class="blog-image">
									<img src="<?php echo e(asset('storage/' . $blog->gambar)); ?>" alt="<?php echo $blog->judul; ?>">
								</div>  

								<div class="blog-content">
									<p><?php echo $blog->deskripsi; ?></p>

								</div>

							</div>

						</div>
					</div>
				</div>

			</div>

			<!-- Footer -->
			<footer>
				<div class="copy">© 2016 mCard. All rights reserved.</div>
			</footer>
			
		</div>

	</div>
	
	<!-- jQuery Scripts -->
	<script src="../../assets/user/pengajar/js/jquery.min.js"></script>
	<script src="../../assets/user/pengajar/js/owl.carousel.min.js"></script>
	<script src="../../assets/user/pengajar/js/jquery.validate.js"></script>
	<script src="../../assets/user/pengajar/js/magnific-popup.js"></script>
	<script src="../../assets/user/pengajar/js/masonry.pkgd.js"></script>
	<script src="../../assets/user/pengajar/js/imagesloaded.pkgd.js"></script>
	<script src="../../assets/user/pengajar/js/masonry-filter.js"></script>
	<script src="../../assets/user/pengajar/js/scrollreveal.js"></script>
	<script src="../../assets/user/pengajar/js/jquery.mb.YTPlayer.js"></script>
	<script src="../../assets/user/pengajar/js/particles.js"></script>

	<!-- Google map api -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	
	<!-- Main Scripts -->
	<script src="../../assets/user/pengajar/js/main.js"></script>
	
</body>
</html><?php /**PATH C:\xampp\htdocs\Resume\resources\views/blogs/show_pengajar.blade.php ENDPATH**/ ?>