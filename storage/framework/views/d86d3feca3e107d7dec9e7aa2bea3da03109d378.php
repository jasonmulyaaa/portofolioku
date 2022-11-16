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
	<div class="page" id="home-section">

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
					<li class="active">
						<a class="btn_animated" href="#home-section"><span class="circle">Home</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#about-section"><span class="circle">About</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#skills-section"><span class="circle">Skills</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#experience-section"><span class="circle">Experience</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#service-section"><span class="circle">Services</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#education-section"><span class="circle">Education</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#works-section"><span class="circle">Portfolio</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#clients-section"><span class="circle">Clients</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#blog-section"><span class="circle">Blog</span></a>
					</li>
					<li>
						<a class="btn_animated" href="#contact-section"><span class="circle">Contact Me</span></a>
					</li>
				</ul>
				<a href="#" class="menu-btn"><span></span></a>
			</div>
		</header>
		
		<!-- Container -->
		<div class="container">

			<!-- Wrapper -->
			<div class="wrapper">

				<!-- Section About -->
				<div class="section about started" id="about-section">
					<div class="content-box">
						<div class="row">
							<div class="col col-m-12 col-t-5 col-d-5">
								<div class="st-box mobile">
									<div class="st-title"><?php echo $resume->nama; ?></div>
									<div class="st-subtitle"><?php echo $resume->pekerjaan; ?></div>
									<div class="st-soc">
										<?php $__currentLoopData = $sosial1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosial1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
										<a target="blank" href="<?php echo $sosial1->link; ?>" class="btn_animated">
											<span class="circle"><i class="icon ion ion-social-<?php echo $sosial1->nama_sosmed; ?>"></i></span>
										</a>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
								</div>
								<div class="profile-image">
									<img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="<?php echo $resume->nama; ?>" title="<?php echo $resume->nama; ?>" style="width: 600px; height: 100%; object-fit: cover;"/>
								</div>
								<div class="info-list">
									<ul>
										<li><strong><span>Address:</span></strong> <?php echo $resume->alamat; ?></li>
										<li><strong><span>E-mail:</span></strong> <a href="mailto:<?php echo $resume->email; ?>"><?php echo $resume->email; ?></a></li>
									</ul>
								</div>
							</div>
							<div class="col col-m-12 col-t-7 col-d-7">
								<div class="st-box desctop">
									<div class="st-title"><?php echo $resume->nama; ?></div>
									<div class="st-subtitle"><?php echo $resume->pekerjaan; ?></div>
									<div class="st-soc">
										<?php $__currentLoopData = $sosial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
										<a target="blank" href="<?php echo $sosial->link; ?>" class="btn_animated">
											<span class="circle"><i class="icon ion ion-social-<?php echo $sosial->nama_sosmed; ?>"></i></span>
										</a>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
								</div>
								<div class="text-box">
									<p>
										<?php echo $resume->about_me; ?>

									</p>
								</div>
								<div class="bts">
									<a href="#" class="btn btn_animated"><span class="circle">Download CV</span></a>
									<a href="#" class="btn extra contact-btn btn_animated"><span class="circle">Contact Me</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Section Skills -->
				<div class="section skills" id="skills-section">
					<div class="title">Skills</div>
					<div class="row">
						
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-gear-b"></i></div>
									<div class="name">Skills</div>
								</div>
								<div class="skills">
									<ul>
										<?php $__currentLoopData = $skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
										<li> 
											<div class="name"><?php echo $skill->skill; ?></div>
											<div class="progress">
												<div class="percentage" style="width:<?php echo $skill->persen; ?>%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
							</div>
						
					</div>
				</div>

				<!-- Experience -->
				<div class="section experience" id="experience-section">
					<div class="title">
						Pengalaman & Sertifikat
						<span class="circle"><i class="icon ion ion-ios-briefcase"></i></span>
					</div>
					<div class="cd-timeline">
						<?php $__currentLoopData = $working; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $working): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date"><?php echo $working->tahun_awal; ?>-<?php echo $working->tahun_akhir; ?></div>
									<div class="name"><?php echo $working->judul; ?>.</div>
									<p>
										<?php echo $working->deskripsi; ?>

									</p>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>

				<!-- Service -->
				<div class="section service" id="service-section">
					<div class="title">Kompetensi</div>
					<div class="row">
						<?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon" style="background: white;"><img src="<?php echo e(asset('storage/' . $service->gambar)); ?>" alt="<?php echo $service->judul; ?>" title="<?php echo $service->judul; ?>" style="width: 62px; height: 62px;"></div>
									<div class="name"><?php echo $service->judul; ?></div>
								</div>
								<p>
									<?php echo $service->deskripsi; ?>

								</p>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					<div class="row">

					</div>
				</div>

				<!-- Section Education -->
				<div class="section education" id="education-section">
					<div class="title">
						Education
						<span class="circle"><i class="icon ion ion-university"></i></span>
					</div>
					<div class="cd-timeline">
						<?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date"><?php echo $education->tahun_awal; ?>-<?php echo $education->tahun_akhir; ?></div>
									<div class="name"><?php echo $education->judul; ?></div>
									<p>
										<?php echo $education->deskripsi; ?>

									</p>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>

				<!-- Portfolio -->
				<div class="section works" id="works-section">
					<div class="title">Portfolio</div>
					<div class="filter-menu">
						<div class="filters">
							<div class="btn-group">
								<div class="f_btn btn_animated active">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="box-item" />All</label>
									</div>
								</div>
								<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="f_btn btn_animated">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="f-<?php echo $kategori->kategori_name; ?>" /><?php echo $kategori->kategori; ?></label>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>
					<div class="row box-items">
						<?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
							<?php if($portfolio->video == NULL && $portfolio->link == NULL): ?>  
								
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-<?php echo $portfolio->kategori_name; ?> animated">
							<div class="image">
								<a href="#popup-<?php echo $portfolio->id; ?>" class="has-popup"><img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="<?php echo $portfolio->judul; ?>" title="<?php echo $portfolio->judul; ?>"/></a>
							</div>
							<div class="content-box">
								<div class="category"><?php echo $portfolio->kategori; ?></div>
								<a href="#popup-<?php echo $portfolio->id; ?>" class="name has-popup"><?php echo $portfolio->judul; ?></a>
								<p>
									<?php echo $portfolio->deskripsi; ?>...
								</p>
							</div>
							<div id="popup-<?php echo $portfolio->id; ?>" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="<?php echo e(asset('storage/' . $portfolio->screenshot)); ?>" alt="" alt="<?php echo $portfolio->judul; ?>" title="<?php echo $portfolio->judul; ?>">
									</div>
									<div class="desc">
										<div class="category"><?php echo $portfolio->kategori; ?></div>
										<h4><?php echo $portfolio->judul; ?></h4>
										<p>
											<?php echo $portfolio->deskripsi; ?>

										</p>
										
									</div>
								</div>
							</div>
						</div>

						<?php elseif($portfolio->screenshot == 1 && $portfolio->video == NULL): ?> 

						<div class="col col-m-12 col-t-6 col-d-4 box-item f-<?php echo $portfolio->kategori_name; ?> animated">
							<div class="image">
								<a href="#popup-<?php echo $portfolio->id; ?>" class="has-popup"><img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="<?php echo $portfolio->judul; ?>" title="<?php echo $portfolio->judul; ?>" /></a>
							</div>
							<div class="content-box">
								<div class="category"><?php echo $portfolio->kategori; ?></div>
								<a href="#popup-<?php echo $portfolio->id; ?>" class="name has-popup"><?php echo $portfolio->judul; ?></a>
								<p>
									<?php echo $portfolio->deskripsi; ?>...
								</p>
							</div>
							<div id="popup-<?php echo $portfolio->id; ?>" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="<?php echo $portfolio->judul; ?>" title="<?php echo $portfolio->judul; ?>">
									</div>
									<div class="desc">
										<div class="category"><?php echo $portfolio->kategori; ?></div>
										<h4><?php echo $portfolio->judul; ?></h4>
										<p>
											<?php echo $portfolio->deskripsi; ?>

										</p>
										<a href="<?php echo $portfolio->link; ?>" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>

						<?php else: ?>

						<div class="col col-m-12 col-t-6 col-d-4 box-item f-<?php echo $portfolio->kategori_name; ?> animated">
							<div class="image">
								<a href="#popup-<?php echo $portfolio->id; ?>" class="has-popup"><img src="<?php echo e(asset('storage/' . $portfolio->gambar)); ?>" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category"><?php echo $portfolio->kategori; ?></div>
								<a href="#popup-<?php echo $portfolio->id; ?>" class="name has-popup"><?php echo $portfolio->judul; ?></a>
								<p>
									<?php echo $portfolio->deskripsi; ?>...
								</p>
							</div>
							<div id="popup-<?php echo $portfolio->id; ?>" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<?php echo $portfolio->video; ?>

									</div>
									<div class="desc">
										<div class="category"><?php echo $portfolio->kategori; ?></div>
										<h4><?php echo $portfolio->judul; ?></h4>
										<p>
										
										</p>
									</div>
								</div>
							</div>
						</div>

						<?php endif; ?>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<div class="clear"></div>
				</div>

				<!-- Section Clients -->
				<div class="section clients" id="clients-section">
					<div class="title">Testimonial</div>
					<div class="reviews-carousel animated">
						<div class="owl-carousel">
							<?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($testimonial->status == "accept"): ?>
									
							<div class="item">
								<div class="content-box">
									<div class="reviews-item">
										<div class="image"><img src="<?php echo e(asset('storage/' . $testimonial->gambar)); ?>" alt="<?php echo $testimonial->nama; ?>" title="<?php echo $testimonial->nama; ?>"/></div>
										<div class="name">— <?php echo $testimonial->nama; ?>, <?php echo $testimonial->profesi; ?></div>
										<p>
											<?php echo $testimonial->deskripsi; ?>

										</p>
									</div>
								</div>
							</div>
							<?php endif; ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>

				<!-- Section Pricing -->

				<!-- Blog -->
				<div class="section blog" id="blog-section">
					<div class="title">Blog</div>
					<div class="row">
						<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="blog_item animated">
								<div class="image">
									<a href="<?php echo e(route('blogs.blog_pengajar', $blog->slug)); ?>"><img src="<?php echo e(asset('storage/' . $blog->gambar)); ?>" alt="<?php echo $blog->judul; ?>" title="<?php echo $blog->judul; ?>"/></a>
								</div>
								<div class="content-box">
									<div class="i_title">
										<div class="icon"><strong>27</strong> July</div>
									</div>
									<a href="<?php echo e(route('blogs.blog_pengajar', $blog->slug)); ?>" class="name"><?php echo $blog->judul; ?></a>
									<p>
										<?php echo $blog->deskripsi; ?>

									</p>
									<a href="blog-page.html" class="btn btn_animated"><span class="circle">Read more</span></a>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
					</div>
					<div class="row">
						
					</div>
					<div class="bts align-center">
						
					</div>
				</div>

				<!-- Section Text -->

				<!-- Section Contacts -->
				<div class="section contacts" id="contact-section">
					<div class="title">Contact Me</div>
					<div class="row">
						
						<div class="col col-m-12 col-t-12 col-d-12">
							<div class="content-box animated">
								<h4>Contact Form:</h4>
								<div class="contact-form">
									<form action="<?php echo e(route('cv.store')); ?>" method="post" enctype="multipart/form-data">
										<?php echo csrf_field(); ?>
										<div class="group-val">
											<input type="text" name="nama" placeholder="Your Name" value="<?php echo e(old('nama')); ?>"/>
										</div>
										<div class="group-val">
											<input type="text" name="email" placeholder="Your Email" value="<?php echo e(old('email')); ?>"/>
										</div>
										<div class="group-val">
											<input type="text" name="instansi" placeholder="Your Instansi" value="<?php echo e(old('instansi')); ?>"/>
										</div>
										<div class="group-val">
											<input type="text" name="jabatan" placeholder="Your Jabatan" value="<?php echo e(old('jabatan')); ?>"/>
										</div>
										<div class="group-val">
											<input type="number" name="no_telp" placeholder="No Telp" value="<?php echo e(old('no_telp')); ?>"/>
										</div>
										<div class="group-val ct-gr">
											<textarea name="pesan" placeholder="Message"><?php echo e(old('pesan')); ?></textarea>
										</div>
										<input type="hidden" name="user_id" value="<?php echo e($resume->user_id); ?>">
										<button type="submit" class="btn btn_animated" ><span class="circle">Kirim Pesan</span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer -->
			<footer>
				<div class="copy">© 2022 all right reserved. <a href="https://wanteknologi.com">Wan Teknologi</a></div>
			</footer>
			
		</div>

	</div>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
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
</html><?php /**PATH C:\xampp\htdocs\Resume\resources\views/cv/show_pengajar.blade.php ENDPATH**/ ?>