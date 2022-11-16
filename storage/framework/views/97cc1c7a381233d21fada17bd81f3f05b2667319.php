
<?php $__env->startSection('content'); ?>
<div class="content-wrapper bg-white">
    <div class="row">
      
      
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Profile</h4>
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo e($error); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                  </div>
              <?php endif; ?>
          <form action="<?php echo e(route('profile.update', $profile->id)); ?>" method="POST" enctype="multipart/form-data">
          
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Profile</h4>
                        <p class="card-description">
                          Isi Form Profile
                        </p>
                        <form class="forms-sample">
                          <div class="form-group">
                            <strong>Foto</strong>
                            <input type="hidden" name="oldImage" value="<?php echo e($profile->foto); ?>">
                            <?php if($profile->foto): ?>
                                <img src="<?php echo e(asset('storage/' . $profile->foto)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block" onerror="this.onerror=null; this.src='../../assets/images/faces/icon.png'">
                            <?php else: ?>
                                <img class="img-preview img-fluid mb-3">
                            <?php endif; ?>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="foto" id="image" onchange="previewImage()" value="<?php echo e(asset('storage/' . $profile->foto)); ?>">
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="<?php echo e($profile->nama); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">UserName</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="UserName" name="name" value="<?php echo e($profile->name); ?>">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="<?php echo e($profile->email); ?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Password</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Password" name="password" value="">
                          </div>
                          <input type="hidden" name="oldPass" value="<?php echo e($profile->password); ?>">
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
          </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          
            
     
      

    
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Halaman ini bersifat rahasia dan hanya boleh diakses oleh pihak yang berwajib</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022.</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/profile/index.blade.php ENDPATH**/ ?>