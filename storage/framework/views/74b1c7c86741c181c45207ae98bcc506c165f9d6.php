
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Tutorial;
?>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white"><?php echo $kategoritutorial->kategori; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white"><?php echo $kategoritutorial->kategori; ?></li>
                                
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

        <div class="category-section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="subtitle"><?php echo $pagetitle->judul_kategori; ?></span>
                    <h2 class="title"><?php echo $pagetitle->subjudul_kategori; ?></h2>
                </div>
                <div class="section-wrapper">
                    <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                        <?php $__currentLoopData = $subkategoritutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subkategoritutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($subkategoritutorial->id_kategori == $kategoritutorial->id): ?>
                        <?php
                        $totaltutorial = Tutorial::where('sub_kategori', $subkategoritutorial->id)->where('status', 'Aktif')->count();
                    ?>
                    <?php if($totaltutorial == 0): ?>
                        
                    <?php else: ?>

                        <div class="col">
                            <div class="category-item text-center">
                                <div class="category-inner">
                                    <div class="category-thumb">
                            <a href="<?php echo e(route('tutorials.intro', $subkategoritutorial->kategori_name)); ?>">
                                <img src="<?php echo e(asset('storage/'. $subkategoritutorial->gambar)); ?>" alt="<?php echo $subkategoritutorial->kategori; ?>" title="<?php echo $subkategoritutorial->kategori; ?>" style="width: 100%; height: 80px;">
                            </a>
                                    </div>
                                    <div class="category-content">
                                        <a href="<?php echo e(route('tutorials.intro', $subkategoritutorial->kategori_name)); ?>"><h6><?php echo $subkategoritutorial->kategori; ?></h6></a>

                                        <span><?php echo $totaltutorial; ?> Tutorial</span>
                                        <?php
                                            $views = Tutorial::where('status', 'Aktif')->where('sub_kategori', $subkategoritutorial->id)->sum('views');
                                        ?>
                                        <span><i class="icofont-eye-alt"></i> <?php echo $views; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/tutorials/show.blade.php ENDPATH**/ ?>