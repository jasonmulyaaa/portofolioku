
<?php $__env->startSection('content'); ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white"><?php echo $blog->judul; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('blogger.index')); ?>" style="color: rgb(211, 211, 211)">Tutorials</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Tutorial Details</li>
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
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            <div class="post-thumb">
                                                <img src="<?php echo e(asset('storage/' . $blog->gambar)); ?>" alt="<?php echo $blog->judul; ?>" title="<?php echo $blog->judul; ?>" class="w-100">
                                            </div>
                                            <div class="post-content">
                                                <h2><?php echo $blog->judul; ?></h2>
                                                <div class="meta-post">
                                                    <ul class="lab-ul">
                                                        <li><a href="#"><i class="icofont-calendar"></i><?php echo $blog->created_at; ?></a></li>
                                                    </ul>
                                                </div>
                                                <p><?php echo $blog->deskripsi; ?></p>




                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <aside>
                        <div class="widget widget-search">
                            <form action="<?php echo e(route('blogger.index')); ?>" class="search-wrapper" method="get" autocomplete="off">
                                <input type="search" name="search" placeholder="Search...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>
    
                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5 class="title">Most Popular Post</h5>
                            </div>
                            <ul class="widget-wrapper">
                                <?php $__currentLoopData = $blog3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('blogs.show', $blog3->slug)); ?>"><img src="<?php echo e(asset('storage/' . $blog3->gambar)); ?>" alt="<?php echo $blog3->judul; ?>" title="<?php echo $blog3->judul; ?>" style="object-fit: cover;"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="<?php echo e(route('blogs.show', $blog3->slug)); ?>"><h6><?php echo $blog3->judul; ?></h6></a>
                                        <p><?php echo $blog3->created_at; ?></p>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/blogger/show.blade.php ENDPATH**/ ?>