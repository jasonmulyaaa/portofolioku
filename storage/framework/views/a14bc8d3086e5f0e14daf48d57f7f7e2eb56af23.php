
<?php $__env->startSection('content'); ?>
<div class="content-wrapper bg-white">
    <div class="row">
      
      
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Konfigurasi Table</h4>
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <?php $__currentLoopData = $konfigurasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $konfigurasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form action="<?php echo e(route('konfigurasi.update', $konfigurasi->id)); ?>" method="POST" enctype="multipart/form-data">
          
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Konfigurasi</h4>
                        <p class="card-description">
                          Isi Form Konfigurasi
                        </p>
                        <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Judul</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="<?php echo e($konfigurasi->judul); ?>">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Favicon</strong>
                            <input type="hidden" name="oldImage1" value="<?php echo e($konfigurasi->favicon); ?>">
                            <?php if($konfigurasi->favicon): ?>
                                <img src="<?php echo e(asset('storage/' . $konfigurasi->favicon)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
unset($__errorArgs, $__bag); ?> name="favicon" id="image" onchange="previewImage()" value="<?php echo e(asset('storage/' . $konfigurasi->favicon)); ?>">
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
                              </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>Logo Header</strong>
                              <input type="hidden" name="oldImage2" value="<?php echo e($konfigurasi->logo_header); ?>">
                              <?php if($konfigurasi->logo_header): ?>
                                  <img src="<?php echo e(asset('storage/' . $konfigurasi->logo_header)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
unset($__errorArgs, $__bag); ?> name="logo_header" id="image" onchange="previewImage()" value="<?php echo e(asset('storage/' . $konfigurasi->logo_header)); ?>">
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
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Logo Footer</strong>
                            <input type="hidden" name="oldImage3" value="<?php echo e($konfigurasi->logo_footer); ?>">
                            <?php if($konfigurasi->logo_footer): ?>
                                <img src="<?php echo e(asset('storage/' . $konfigurasi->logo_footer)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
unset($__errorArgs, $__bag); ?> name="logo_footer" id="image" onchange="previewImage()" value="<?php echo e(asset('storage/' . $konfigurasi->logo_footer)); ?>">
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
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <strong>Page Header</strong>
                          <input type="hidden" name="oldImage4" value="<?php echo e($konfigurasi->page_header); ?>">
                          <?php if($konfigurasi->page_header): ?>
                              <img src="<?php echo e(asset('storage/' . $konfigurasi->page_header)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
unset($__errorArgs, $__bag); ?> name="page_header" id="image" onchange="previewImage()" value="<?php echo e(asset('storage/' . $konfigurasi->page_header)); ?>">
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
                    </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Deskripsi</label>
                            <textarea type="text" class="form-control" id="content" placeholder="Deskripsi" name="deskripsi"><?php echo e($konfigurasi->deskripsi); ?></textarea>
                              <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">No Telp</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="No Telp" name="no_telp" value="<?php echo e($konfigurasi->no_telp); ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Alamat</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="<?php echo e($konfigurasi->alamat); ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Instagram</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Instagram" name="instagram" value="<?php echo e($konfigurasi->instagram); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="<?php echo e($konfigurasi->email); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Embed Map</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Embed Map" name="map" value="<?php echo e($konfigurasi->map); ?>">
                </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
          </form>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/konfigurasi/index.blade.php ENDPATH**/ ?>