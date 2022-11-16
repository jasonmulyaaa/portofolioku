
<?php $__env->startSection('content'); ?>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">Tutorial Posts</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Tutorial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    
    <div class="blog-section blog-single padding-tb section-bg">
        
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-lg-2 col-12">
                    <aside>

                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>All Categories</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                    <?php $__currentLoopData = $subkategoritutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subkategoritutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    <li>
                                        <a href="#0"><?php echo $subkategoritutorial->kategori; ?></a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-10 col-12">
                    <article>
                        <div class="product-details">
                            <div class="row align-items-center">
                                        
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/tutorials/index.blade.php ENDPATH**/ ?>