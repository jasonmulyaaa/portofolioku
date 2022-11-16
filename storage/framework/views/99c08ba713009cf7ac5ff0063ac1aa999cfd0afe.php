
<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="background-color: white;">
    <div class="row">

      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                      <h4 class="card-title card-title-dash">Artikel Terbanyak Hari ini</h4>
                    </div>
                  </div>
                  <div class="mt-3">
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                      <div class="d-flex">
                        <img class="img-sm rounded-10" src="<?php echo e(asset('storage/' . $user->foto)); ?>" alt="profile" style="object-fit: cover;" onerror="this.onerror=null; this.src='../../assets/images/faces/icon.png'">
                        <div class="wrapper ms-3">
                          <p class="ms-1 mb-1 fw-bold"><?php echo $user->nama; ?></p>
                          <small class="text-muted mb-0"><?php echo $tutorialtoday; ?></small>
                        </div>
                      </div>
                      <div class="text-muted text-small">
                        1h ago
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                      <h4 class="card-title card-title-dash">Views Artikel Terbanyak Hari ini</h4>
                    </div>
                  </div>
                  <div class="mt-3">
                    
                    <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                      <div class="d-flex">
                        <img class="img-sm rounded-10" src="" alt="profile" style="object-fit: cover;" onerror="this.onerror=null; this.src='../../assets/images/faces/icon.png'">
                        <div class="wrapper ms-3">
                          <p class="ms-1 mb-1 fw-bold"></p>
                          <small class="text-muted mb-0"></small>
                        </div>
                      </div>
                      <div class="text-muted text-small">
                        1h ago
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/leaderboard.blade.php ENDPATH**/ ?>