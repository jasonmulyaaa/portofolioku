
<?php $__env->startSection('content'); ?>
<div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2 style="color: white"><?php echo $pagetitle[0]->gallery; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: white">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-section padding-tb yellow-color-section">
    <div class="section-header text-center">
        <span class="subtitle yellow-color"><?php echo $pagetitle[0]->subjudul_gallery; ?></span>
        <h3 class="title"><?php echo $pagetitle[0]->judul_gallery; ?></h3>
    </div>
<div class="course-section style-3 padding-tb">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Our Courses</h2>
            <div class="course-filter-group">
                <ul class="lab-ul">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".english"><a href="">English</a></li>
                </ul>
            </div>
        </div>
        
        <div class="section-wrapper">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <div class="col">
                    <div class="post-item style-3">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a><img src="<?php echo e(asset('storage/' . $gallery->gambar)); ?>" alt="<?php echo $gallery->judul; ?>" title="<?php echo $gallery->judul; ?>" style="max-width: 420px; height: 250px; object-fit: contain;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/galleries/show.blade.php ENDPATH**/ ?>