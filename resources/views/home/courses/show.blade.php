@extends('layout.home')
@section('content')
<?php
use App\Models\Resume;
?>
    <!-- Page Header section start here -->
    <div class="pageheader-section style-2" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center flex-row-reverse">
                <div class="col-lg-7 col-12">
                    <div class="pageheader-thumb">
                        <img src="{{ asset('storage/' . $courses->gambar) }}" alt="rajibraj91" class="w-100">
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="pageheader-content">
                        <div class="course-category">
                            <a href="#" class="course-cate">{!! $courses->kategori !!}</a>
                            <a href="#" class="course-offer">30% Off</a>
                        </div>
                        <h2 class="phs-title" style="color: white">{!! $courses->judul !!}</h2>
                        <p class="phs-desc" style="color: white">The most impressive is collection of share me online college courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- course section start here -->
    <div class="course-single-section padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-part">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-content">
                                    {!! $courses->deskripsi !!}
                                </div>
                            </div>
                        </div>

                        <div class="course-video">
                            <div class="course-video-title">
                                <h4>Course Content</h4>
                            </div>
                            <div class="course-video-content">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accordion01">
                                            <button class="d-flex flex-wrap justify-content-between" data-bs-toggle="collapse" data-bs-target="#videolist1" aria-expanded="true" aria-controls="videolist1"><span>1.Introduction</span> <span>5lessons, 17:37</span> </button>
                                        </div>
                                        <div id="videolist1" class="accordion-collapse collapse show" aria-labelledby="accordion01" data-bs-parent="#accordionExample">
                                            <ul class="lab-ul video-item-list">
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">1.1 Welcome to the course 02:30 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">1.2 How to set up your photoshop workspace  08:33 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">1.3 Essential Photoshop Tools 03:38 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">1.4 Finding inspiration 02:30 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">1.5 Choosing Your Format 03:48 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accordion02">
                                            <button class="d-flex flex-wrap justify-content-between" data-bs-toggle="collapse" data-bs-target="#videolist2" aria-expanded="true" aria-controls="videolist2"> <span>2.How to Create Mixed Media Art in Adobe Photoshop</span> <span>5 lessons, 52:15</span> </button>
                                        </div>
                                        <div id="videolist2" class="accordion-collapse collapse" aria-labelledby="accordion02" data-bs-parent="#accordionExample">
                                            <ul class="lab-ul video-item-list">
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">2.1 Using Adjustment Layers 06:20 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">2.2 Building the composition 07:33 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">2.3 Photoshop Lighting effects 06:30 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">2.4 Digital Painting using photoshop brushes 08:34 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">2.5 Finalizing the details 10:30 minutes</div>
                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        $pengajar = Resume::where('nama', $courses->pengajar)->first();
                    @endphp
                        <div class="authors">
                            <div class="author-thumb">
                                <img src="{{ asset('storage/'. $pengajar->foto) }}" alt="{!! $pengajar->nama !!}" title="{!! $pengajar->nama !!}">
                            </div>
                            <div class="author-content">

                                <h5>{!! $pengajar->nama !!}</h5>
                                <span>{!! $pengajar->pekerjaan !!}</span>
                                <p>{!! $pengajar->about_me !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="sidebar-part">
                        <div class="course-side-detail">
                            <div class="csd-title">
                                <div class="csdt-left">
                                    <h4 class="mb-0"><sup>$</sup>38</h4>
                                </div>
                                <div class="csdt-right">
                                    <p class="mb-0"><i class="icofont-clock-time"></i>Limited time offer</p>
                                </div>
                            </div>
                            <div class="csd-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                        <li>
                                            <div class="csdc-left"><i class="icofont-ui-alarm"></i>Course level</div>
                                            <div class="csdc-right">Beginner</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-book-alt"></i>Course Duration</div>
                                            <div class="csdc-right">10 week</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-signal"></i>Online Class</div>
                                            <div class="csdc-right">08</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-video-alt"></i>Lessions</div>
                                            <div class="csdc-right">18x</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-abacus-alt"></i>Quizzes</div>
                                            <div class="csdc-right">0</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-hour-glass"></i>Pass parcentages</div>
                                            <div class="csdc-right">80</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-certificate"></i>Certificate</div>
                                            <div class="csdc-right">Yes</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-globe"></i>Language</div>
                                            <div class="csdc-right">English</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-payment">
                                    <div class="sp-title">
                                        <h6>Secure Payment:</h6>
                                    </div>
                                    <div class="sp-thumb">
                                        <img src="assets/images/pyment/01.jpg" alt="CodexCoder">
                                    </div>
                                </div>
                                <div class="sidebar-social">
                                    <div class="ss-title">
                                        <h6>Share This Course:</h6>
                                    </div>
                                    <div class="ss-content">
                                        <ul class="lab-ul">
                                            <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#" class="rss"><i class="icofont-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-enroll">
                                    <a href="#" class="lab-btn"><span>Enrolled Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="course-side-cetagory">
                            <div class="csc-title">
                                <h5 class="mb-0">Course Categories</h5>
                            </div>
                            <div class="csc-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                        <li>
                                            <div class="csdc-left"><a href="#">Personal Development</a></div>
                                            <div class="csdc-right">30</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Photography</a></div>
                                            <div class="csdc-right">20</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Teaching and Academics</a></div>
                                            <div class="csdc-right">93</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Art and Design</a></div>
                                            <div class="csdc-right">32</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Business</a></div>
                                            <div class="csdc-right">26</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Data Science</a></div>
                                            <div class="csdc-right">27</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Development</a></div>
                                            <div class="csdc-right">28</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Finance</a></div>
                                            <div class="csdc-right">36</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Health & Fitness</a></div>
                                            <div class="csdc-right">39</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Lifestyle</a></div>
                                            <div class="csdc-right">37</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Marketing</a></div>
                                            <div class="csdc-right">18</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Music</a></div>
                                            <div class="csdc-right">20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- course section ending here -->
@endsection