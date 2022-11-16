
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Resume;
?>
    <!-- Page Header section start here -->
    <div class="pageheader-section style-2" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center flex-row-reverse">
                <div class="col-lg-7 col-12">
                    <div class="pageheader-thumb">
                        <img src="<?php echo e(asset('storage/' . $courses->gambar)); ?>" alt="rajibraj91" class="w-100">
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="pageheader-content">
                        <div class="course-category">
                            <a href="#" class="course-cate"><?php echo $courses->kategori; ?></a>
                            <a href="#" class="course-offer">30% Off</a>
                        </div>
                        <h2 class="phs-title" style="color: white"><?php echo $courses->judul; ?></h2>
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
                                    <?php echo $courses->deskripsi; ?>

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
                        <?php
                        $pengajar = Resume::where('nama', $courses->pengajar)->first();
                    ?>
                        <div class="authors">
                            <div class="author-thumb">
                                <img src="<?php echo e(asset('storage/'. $pengajar->foto)); ?>" alt="<?php echo $pengajar->nama; ?>" title="<?php echo $pengajar->nama; ?>">
                            </div>
                            <div class="author-content">

                                <h5><?php echo $pengajar->nama; ?></h5>
                                <span><?php echo $pengajar->pekerjaan; ?></span>
                                <p><?php echo $pengajar->about_me; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- course section ending here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/courses/show.blade.php ENDPATH**/ ?>