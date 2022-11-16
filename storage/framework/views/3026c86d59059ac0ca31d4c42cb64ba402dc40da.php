
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Gallery;
?>
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
        </div>
<div class="course-section style-3">
    <div class="course-shape one"><img src="<?php echo e(asset('')); ?>assets/user/homepage/images/shape-img/icon/01.png" alt="education"></div>
    <div class="course-shape two"><img src="<?php echo e(asset('')); ?>assets/user/homepage/images/shape-img/icon/02.png" alt="education"></div>
    <div class="container">
        <div class="section-header">
            <h2 class="title"><?php echo $pagetitle[0]->judul_gallery; ?></h2>
            <div class="course-filter-group">
                <ul class="lab-ul">
                    <li class="active" data-filter="*">All</li>
                    <?php $__currentLoopData = $kategorigallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategorigallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $count = Gallery::where('kategori_name', $kategorigallery->slug)->get('judul');
                    ?>
                    <li data-filter=".<?php echo $kategorigallery->slug; ?>"><?php echo $kategorigallery->kategori; ?> (<?php echo $count; ?>)</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>
        </div>
        <div class="section-wrapper">
            <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">
                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <div class="col <?php echo $gallery->kategori_name; ?>">
                    <div class="course-item style-4">
                        <div class="course-inner">
                            <div class="course-thumb">
                                <img src="<?php echo e(asset('storage/'. $gallery->gambar)); ?>" alt="course">
                            </div>
                            <div class="course-content">
                                <a href="course-single.html"><h5><?php echo $gallery->judul; ?></h5></a>
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

<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/galleries/index.blade.php ENDPATH**/ ?>