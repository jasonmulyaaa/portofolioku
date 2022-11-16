
<?php $__env->startSection('content'); ?>
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
        
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Testimonial Pengajar Details</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                        <h4 class="fw-bold">Nama Pengajar</h4>
                        <br>
                        <img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="course" onerror="this.onerror=null; this.src='../../assets/images/faces/icon.png'" style="width: 240px; height: 240px; object-fit: cover;">
                        <br>
                        <br>
                        <h5>
                          <b>
                          <?php echo $resume->nama; ?>

                          </b>
                        </h5>
                        <br>
                        <h5>
                          <b>
                          Alamat
                          </b>
                        </h5>
                        <p>
                          <?php echo $resume->alamat; ?>

                        </p>
                      </address>
                    </div>
                    <div class="col-md-6">
                      <address>
                        <br>
                        <h5 class="fw-bold">
                          About Me
                        </h5>
                        <p class="mb-2">
                          <?php echo $resume->about_me; ?>

                        </p>
                        
                      </address>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Pesan Testimonial</h4>
                  <form action="<?php echo e(route('testipengajar.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                        
                            <div class="card-body">
                              <div class="form-group">
                                <strong>Gambar</strong>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="gambar" id="image" onchange="previewImage()">
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
                              <form class="forms-sample">
                                <div class="form-group">
                                  <label for="exampleInputName1">Nama</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="<?php echo e(old('nama')); ?>">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">Profesi</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Profesi" name="profesi" value="<?php echo e(old('profesi')); ?>">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">Deskripsi</label>
                                  <textarea class="form-control" id="content" placeholder="Deskripsi" name="deskripsi"><?php echo e(old('deskripsi')); ?></textarea>
                                  <script>
                                    CKEDITOR.replace('content');
                                </script>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo e($resume->user_id); ?>">
                                <input type="hidden" name="status" value="pending">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                              </form>
                            </div>
                          
            </form>
                </div>
              </div>
            </div>
                
                  
           
            

          
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Halaman ini bersifat rahasia dan hanya boleh diakses oleh pihak yang berwajib</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. PT. PT PTan</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/testipengajar/show.blade.php ENDPATH**/ ?>