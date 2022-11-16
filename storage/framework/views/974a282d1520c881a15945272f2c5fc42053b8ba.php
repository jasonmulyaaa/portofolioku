
<?php $__env->startSection('header'); ?>
<meta property="og:image" content="<?php echo e(asset('storage/'. $tutorial_detail->gambar)); ?>">
<meta property="og:title" content="<?php echo $tutorial_detail->judul; ?>">
<meta property="og:url" content="<?php echo e(Request::url()); ?>">
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo substr($tutorial_detail->deskripsi, 0, 100); ?>">
<meta property="og:site_name" content="Portofolioku" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="900" />
<meta property="og:image:alt" content="<?php echo $tutorial_detail->judul; ?>" />

<meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@portofolioku" />
        <meta name="twitter:site:id" content="@portofolioku" />
        <meta name="twitter:creator" content="@portofolioku" />
        <meta name="twitter:description" content="<?php echo substr($tutorial_detail->deskripsi, 0, 100); ?>." />
        <meta name="twitter:image" content="<?php echo e(asset('storage/'. $tutorial_detail->gambar)); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Tutorial;
?>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=636c7c8e0e0d03001fe8c3b4&product=sticky-share-buttons&source=platform" async="async"></script>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white"><?php echo $tutorial_detail->judul; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('tutorials.show', $kategoritutorial->kategori_name)); ?>" style="color: rgb(211, 211, 211)">Tutorials</a></li>
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
                        <div class="product-details">
                            <div class="row align-items-center">
                                        <div class="section-wrapper">
                                            <div class="row row-cols-1 justify-content-center g-4">
                                                <div class="col">
                                                    <div class="post-item style-2">
                                                        <div class="sharethis-sticky-share-buttons"></div>

                                                        <div class="post-inner">
                                                            <div class="post-thumb">
                                                                <img src="<?php echo e(asset('storage/' . $tutorial_detail->gambar)); ?>" alt="<?php echo $tutorial_detail->judul; ?>" title="<?php echo $tutorial_detail->judul; ?>" style="width: 100%; height: 450px; object-fit: cover;">
                                                            </div>
                                                            <div class="post-content">
                                                                <h2><?php echo $tutorial_detail->judul; ?></h2>
                                                                <div class="meta-post">
                                                                    <ul class="lab-ul">
                                                                        <li><a href="#"><i class="icofont-calendar"></i><?php echo $tutorial_detail->created_at; ?></a></li>
                                                                        <li><a href="#"><i class="icofont-ui-user"></i><?php echo $tutorial_detail->nama; ?></a></li>
                                                                        <li><a href="#"><i class="icofont-eye-alt"></i><?php echo $tutorial_detail->views; ?></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p><?php echo $tutorial_detail->deskripsi; ?></p>
                
                
                
                
                                                            </div>
                                                        </div>
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

                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>All Categories</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                    <?php $__currentLoopData = $subkategoritutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subkategoritutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($subkategoritutorial->id_kategori == $kategoritutorial->id): ?>
                                        
                                        
                                    <li>
                                        <?php
                                        $totaltutorial = Tutorial::where('status', 'Aktif')->where('sub_kategori', $subkategoritutorial->id)->count();
                                    ?>
                                        <a href="#0"><?php echo $subkategoritutorial->kategori; ?> (<?php echo $totaltutorial; ?>)</a>
                                        <ul class="shop-submenu lab-ul">
                                        <?php
                                            $tutorial = Tutorial::where('status', 'Aktif')->where('sub_kategori', $subkategoritutorial->id)->get();
                                        ?>
                                        <?php $__currentLoopData = $tutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('tutorials.detail', $tutorial->slug)); ?>"><?php echo $tutorial->judul; ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/tutorials/detail.blade.php ENDPATH**/ ?>