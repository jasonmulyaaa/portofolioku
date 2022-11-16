<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Basic -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{!! $konfigurasi[0]->judul !!}</title>
    <meta name="description" content="{!! $meta[0]->deskripsi !!}">
	<meta name="keywords" content="{!! $meta[0]->keywords !!}">
    <meta name="title" content="{!! $konfigurasi[0]->judul !!}" />
    <meta name="search engines" content="{!! $meta[0]->search_engine !!}">
    <meta name="author" content="{!! $meta[0]->author !!}">
    <meta name="website" content="{!! $meta[0]->website !!}">
    <link rel="shortcut icon" href="{{ asset('storage/' . $konfigurasi[0]->favicon) }}" type="image/x-icon">
	
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
									<div class="st-title">{!! $resume->nama !!}</div>
									<div class="st-subtitle">{!! $resume->pekerjaan !!}</div>
									<div class="st-soc">
										@foreach ($sosial1 as $sosial1)
											
										<a target="blank" href="{!! $sosial1->link !!}" class="btn_animated">
											<span class="circle"><i class="icon ion ion-social-{!! $sosial1->nama_sosmed !!}"></i></span>
										</a>
										@endforeach
									</div>
								</div>
								<div class="profile-image">
									<img src="{{ asset('storage/' . $resume->foto) }}" alt="{!! $resume->nama !!}" title="{!! $resume->nama !!}" style="width: 600px; height: 100%; object-fit: cover;"/>
								</div>
								<div class="info-list">
									<ul>
										<li><strong><span>Address:</span></strong> {!! $resume->alamat !!}</li>
										<li><strong><span>E-mail:</span></strong> <a href="mailto:{!! $resume->email !!}">{!! $resume->email !!}</a></li>
									</ul>
								</div>
							</div>
							<div class="col col-m-12 col-t-7 col-d-7">
								<div class="st-box desctop">
									<div class="st-title">{!! $resume->nama !!}</div>
									<div class="st-subtitle">{!! $resume->pekerjaan !!}</div>
									<div class="st-soc">
										@foreach ($sosial as $sosial)
											
										<a target="blank" href="{!! $sosial->link !!}" class="btn_animated">
											<span class="circle"><i class="icon ion ion-social-{!! $sosial->nama_sosmed !!}"></i></span>
										</a>
										@endforeach
									</div>
								</div>
								<div class="text-box">
									<p>
										{!! $resume->about_me !!}
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
						{{-- <div class="col col-m-12 col-t-6 col-d-6"> --}}
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-gear-b"></i></div>
									<div class="name">Skills</div>
								</div>
								<div class="skills">
									<ul>
										@foreach ($skill as $skill)
											
										<li> 
											<div class="name">{!! $skill->skill !!}</div>
											<div class="progress">
												<div class="percentage" style="width:{!! $skill->persen !!}%;">
													<span class="percent"><i class="icon ion ion-ios-checkmark-empty"></i></span>
												</div>
											</div>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						{{-- </div> --}}
					</div>
				</div>

				<!-- Experience -->
				<div class="section experience" id="experience-section">
					<div class="title">
						Pengalaman & Sertifikat
						<span class="circle"><i class="icon ion ion-ios-briefcase"></i></span>
					</div>
					<div class="cd-timeline">
						@foreach ($working as $working)
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date">{!! $working->tahun_awal !!}-{!! $working->tahun_akhir !!}</div>
									<div class="name">{!! $working->judul !!}.</div>
									<p>
										{!! $working->deskripsi !!}
									</p>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>

				<!-- Service -->
				<div class="section service" id="service-section">
					<div class="title">Kompetensi</div>
					<div class="row">
						@foreach ($service as $service)
							
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon" style="background: white;"><img src="{{ asset('storage/' . $service->gambar) }}" alt="{!! $service->judul !!}" title="{!! $service->judul !!}" style="width: 62px; height: 62px;"></div>
									<div class="name">{!! $service->judul !!}</div>
								</div>
								<p>
									{!! $service->deskripsi !!}
								</p>
							</div>
						</div>
						@endforeach

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
						@foreach ($education as $education)
							
						<div class="cd-timeline-block animated">
							<div class="cd-timeline-point">
								<i class="icon ion ion-ios-checkmark-empty"></i>
							</div>
							<div class="cd-timeline-content">
								<div class="content-box">
									<div class="date">{!! $education->tahun_awal !!}-{!! $education->tahun_akhir !!}</div>
									<div class="name">{!! $education->judul !!}</div>
									<p>
										{!! $education->deskripsi !!}
									</p>
								</div>
							</div>
						</div>
						@endforeach
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
								@foreach ($kategori as $kategori)
								<div class="f_btn btn_animated">
									<div class="circle">
										<label><input type="radio" name="fl_radio" value="f-{!! $kategori->kategori_name !!}" />{!! $kategori->kategori !!}</label>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="row box-items">
						@foreach ($portfolio as $portfolio)
						
							@if ($portfolio->video == NULL && $portfolio->link == NULL)  {{-- screenshot --}}
								
						<div class="col col-m-12 col-t-6 col-d-4 box-item f-{!! $portfolio->kategori_name !!} animated">
							<div class="image">
								<a href="#popup-{!! $portfolio->id !!}" class="has-popup"><img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="{!! $portfolio->judul !!}" title="{!! $portfolio->judul !!}"/></a>
							</div>
							<div class="content-box">
								<div class="category">{!! $portfolio->kategori !!}</div>
								<a href="#popup-{!! $portfolio->id !!}" class="name has-popup">{!! $portfolio->judul !!}</a>
								<p>
									{!! $portfolio->deskripsi !!}...
								</p>
							</div>
							<div id="popup-{!! $portfolio->id !!}" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="{{ asset('storage/' . $portfolio->screenshot) }}" alt="" alt="{!! $portfolio->judul !!}" title="{!! $portfolio->judul !!}">
									</div>
									<div class="desc">
										<div class="category">{!! $portfolio->kategori !!}</div>
										<h4>{!! $portfolio->judul !!}</h4>
										<p>
											{!! $portfolio->deskripsi !!}
										</p>
										{{-- <a href="{!! $portfolio->link !!}" class="btn btn_animated"><span class="circle">View Project</span></a> --}}
									</div>
								</div>
							</div>
						</div>

						@elseif ($portfolio->screenshot == 1 && $portfolio->video == NULL) {{-- link --}}

						<div class="col col-m-12 col-t-6 col-d-4 box-item f-{!! $portfolio->kategori_name !!} animated">
							<div class="image">
								<a href="#popup-{!! $portfolio->id !!}" class="has-popup"><img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="{!! $portfolio->judul !!}" title="{!! $portfolio->judul !!}" /></a>
							</div>
							<div class="content-box">
								<div class="category">{!! $portfolio->kategori !!}</div>
								<a href="#popup-{!! $portfolio->id !!}" class="name has-popup">{!! $portfolio->judul !!}</a>
								<p>
									{!! $portfolio->deskripsi !!}...
								</p>
							</div>
							<div id="popup-{!! $portfolio->id !!}" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										<img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="{!! $portfolio->judul !!}" title="{!! $portfolio->judul !!}">
									</div>
									<div class="desc">
										<div class="category">{!! $portfolio->kategori !!}</div>
										<h4>{!! $portfolio->judul !!}</h4>
										<p>
											{!! $portfolio->deskripsi !!}
										</p>
										<a href="{!! $portfolio->link !!}" class="btn btn_animated"><span class="circle">View Project</span></a>
									</div>
								</div>
							</div>
						</div>

						@else

						<div class="col col-m-12 col-t-6 col-d-4 box-item f-{!! $portfolio->kategori_name !!} animated">
							<div class="image">
								<a href="#popup-{!! $portfolio->id !!}" class="has-popup"><img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="" /></a>
							</div>
							<div class="content-box">
								<div class="category">{!! $portfolio->kategori !!}</div>
								<a href="#popup-{!! $portfolio->id !!}" class="name has-popup">{!! $portfolio->judul !!}</a>
								<p>
									{!! $portfolio->deskripsi !!}...
								</p>
							</div>
							<div id="popup-{!! $portfolio->id !!}" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image">
										{!! $portfolio->video !!}
									</div>
									<div class="desc">
										<div class="category">{!! $portfolio->kategori !!}</div>
										<h4>{!! $portfolio->judul !!}</h4>
										<p>
										{{-- <a href="{!! $portfolio->link !!}" class="btn btn_animated"><span class="circle">View Project</span></a> --}}
										</p>
									</div>
								</div>
							</div>
						</div>

						@endif

						@endforeach
					</div>
					<div class="clear"></div>
				</div>

				<!-- Section Clients -->
				<div class="section clients" id="clients-section">
					<div class="title">Testimonial</div>
					<div class="reviews-carousel animated">
						<div class="owl-carousel">
							@foreach ($testimonial as $testimonial)
								@if ($testimonial->status == "accept")
									
							<div class="item">
								<div class="content-box">
									<div class="reviews-item">
										<div class="image"><img src="{{ asset('storage/' . $testimonial->gambar) }}" alt="{!! $testimonial->nama !!}" title="{!! $testimonial->nama !!}"/></div>
										<div class="name">— {!! $testimonial->nama !!}, {!! $testimonial->profesi !!}</div>
										<p>
											{!! $testimonial->deskripsi !!}
										</p>
									</div>
								</div>
							</div>
							@endif

							@endforeach
						</div>
					</div>
				</div>

				<!-- Section Pricing -->

				<!-- Blog -->
				<div class="section blog" id="blog-section">
					<div class="title">Blog</div>
					<div class="row">
						@foreach ($blog as $blog)
							
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="blog_item animated">
								<div class="image">
									<a href="{{ route('blogs.blog_pengajar', $blog->slug) }}"><img src="{{ asset('storage/' . $blog->gambar) }}" alt="{!! $blog->judul !!}" title="{!! $blog->judul !!}"/></a>
								</div>
								<div class="content-box">
									<div class="i_title">
										<div class="icon"><strong>27</strong> July</div>
									</div>
									<a href="{{ route('blogs.blog_pengajar', $blog->slug) }}" class="name">{!! $blog->judul !!}</a>
									<p>
										{!! $blog->deskripsi !!}
									</p>
									<a href="blog-page.html" class="btn btn_animated"><span class="circle">Read more</span></a>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
					<div class="row">
						
					</div>
					<div class="bts align-center">
						{{-- <a href="blog.html" class="btn btn_animated"><span class="circle">View Blog</span></a> --}}
					</div>
				</div>

				<!-- Section Text -->

				<!-- Section Contacts -->
				<div class="section contacts" id="contact-section">
					<div class="title">Contact Me</div>
					<div class="row">
						{{-- <div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated" style="height: 657px;">
								<h4>Testimonial Form:</h4>
								<div class="contact-form">
									<form action="{{ route('cv.testi_store') }}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="group-val">
											<div class="col-md-12">
												<span>Gambar</span>
												<input type="file" class="site-input" @error('image') is-invalid @enderror name="gambar" placeholder="Name" id="image" onchange="previewImage()">
												@error('image')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>
										</div>
										<div class="group-val">
											<input type="text" name="nama" placeholder="Your Name" value="{{ old('nama') }}"/>
										</div>
										<div class="group-val">
											<input type="text" name="profesi" placeholder="Your Profesi" value="{{ old('profesi') }}"/>
										</div>
										<div class="group-val ct-gr">
											<textarea name="deskripsi" placeholder="Pesan">{{ old('deskripsi') }}</textarea>
										</div>
										<input type="hidden" name="user_id" value="{{ $resume->user_id }}">
										<input type="hidden" name="status" value="pending">
										<button type="submit" class="btn btn_animated" style="margin-top: 150px;"><span class="circle">Kirim Pesan</span></button>
									</form>
								</div>
							</div>
						</div> --}}
						<div class="col col-m-12 col-t-12 col-d-12">
							<div class="content-box animated">
								<h4>Contact Form:</h4>
								<div class="contact-form">
									<form action="{{ route('cv.store') }}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="group-val">
											<input type="text" name="nama" placeholder="Your Name" value="{{ old('nama') }}"/>
										</div>
										<div class="group-val">
											<input type="text" name="email" placeholder="Your Email" value="{{ old('email') }}"/>
										</div>
										<div class="group-val">
											<input type="text" name="instansi" placeholder="Your Instansi" value="{{ old('instansi') }}"/>
										</div>
										<div class="group-val">
											<input type="text" name="jabatan" placeholder="Your Jabatan" value="{{ old('jabatan') }}"/>
										</div>
										<div class="group-val">
											<input type="number" name="no_telp" placeholder="No Telp" value="{{ old('no_telp') }}"/>
										</div>
										<div class="group-val ct-gr">
											<textarea name="pesan" placeholder="Message">{{ old('pesan') }}</textarea>
										</div>
										<input type="hidden" name="user_id" value="{{ $resume->user_id }}">
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
@include('sweetalert::alert')
	
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
</html>