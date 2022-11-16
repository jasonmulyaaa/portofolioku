
<?php $__env->startSection('content'); ?>


<form action="<?php echo e(route('gallery.update', $gallery->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Gallery</h4>
                  <p class="card-description">
                    Isi Form Gallery
                  </p>
                  <form class="forms-sample">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar</strong>
                                <input type="hidden" name="oldImage" value="<?php echo e($gallery->gambar); ?>">
                                <?php if($gallery->gambar): ?>
                                    <img src="<?php echo e(asset('storage/' . $gallery->gambar)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
unset($__errorArgs, $__bag); ?> name="gambar" id="image" onchange="previewImage()" value="<?php echo e(asset('storage/' . $gallery->gambar)); ?>">
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
                            <label for="exampleInputName1">Judul</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="<?php echo e($gallery->judul); ?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Kategori Gallery</label>
                            <select class="form-control" name="kategori_gallery">
                              <?php $__currentLoopData = $kategorigallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategorigallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($kategorigallery->kategori); ?>" <?php if($kategorigallery->kategori == $gallery->kategori_gallery): ?> selected <?php endif; ?>><?php echo e($kategorigallery->kategori); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>                                   
                      </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="<?php echo e(route('gallery.index')); ?>">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</form>

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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/gallery/edit.blade.php ENDPATH**/ ?>