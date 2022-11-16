
<?php $__env->startSection('content'); ?>
<?php
use App\Models\User;
?>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white"><?php echo $pagetitle[0]->cv; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">CV</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->
    <div class="course-section style-2 padding-tb section-bg-ash yellow-color-section" id="cv">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle" style="color: #3183f7"><?php echo $pagetitle[0]->subjudul_cv; ?></span>
                <h3 class="title"><?php echo $pagetitle[0]->judul_cv; ?></h3>
            </div>

            <div class="section-wrapper">
                <div class="course-slider p-2">
                    <div class="section-header text-center">
                        <h2 class="title">Pengajar</h2>
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
                    <h2 class="title">Mentor</h2>
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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/cv/index.blade.php ENDPATH**/ ?>