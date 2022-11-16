
<?php $__env->startSection('content'); ?>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">Blog Posts</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                   <br>
                   <p class="text-center">Maaf, Hasil tidak ditemukan</p>
              
                   <?php endif; ?>
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="<?php echo e(route('blogs.show', $blog->slug)); ?>"><img src="<?php echo e(asset('storage/' . $blog->gambar)); ?>" alt="<?php echo $blog->judul; ?>" title="<?php echo $blog->judul; ?>" style="max-width: 390px; height: 250px; object-fit: cover;"></a>
                                </div>
                                <div class="post-content">
                                    <a href="<?php echo e(route('blogs.show', $blog->slug)); ?>"><h4><?php echo $blog->judul; ?></h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-calendar"></i><?php echo $blog->created_at; ?></li>
                                        </ul>
                                    </div>
                                    <p><?php echo substr($blog->deskripsi, 0, 50); ?></p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="<?php echo e(route('blogs.show', $blog->slug)); ?>" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <div>
                    <?php echo $blogs->links(); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/blogger/index.blade.php ENDPATH**/ ?>