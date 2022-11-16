
<?php $__env->startSection('content'); ?>


<form action="<?php echo e(route('tutorial.update', $tutorial->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tutorial</h4>
                  <p class="card-description">
                    Isi Form Tutorial
                  </p>
                  <form class="forms-sample">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar</strong>
                                <input type="hidden" name="oldImage" value="<?php echo e($tutorial->gambar); ?>">
                                <?php if($tutorial->gambar): ?>
                                    <img src="<?php echo e(asset('storage/' . $tutorial->gambar)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
unset($__errorArgs, $__bag); ?> name="gambar" id="image" onchange="previewImage()" value="<?php echo e(asset('storage/' . $tutorial->gambar)); ?>">
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
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="<?php echo e($tutorial->judul); ?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                              <?php $__currentLoopData = $kategoritutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoritutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($kategoritutorial->id); ?>" <?php if($tutorial->kategori == $kategoritutorial->id): ?> selected <?php endif; ?>><?php echo e($kategoritutorial->kategori); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>                                   
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Sub Kategori</label>
                        <select class="form-control" name="sub_kategori" id="sub_kategori">
                          <?php $__currentLoopData = $subkategoritutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subkategoritutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($subkategoritutorial->id); ?>" <?php if($tutorial->sub_kategori == $subkategoritutorial->id): ?> selected <?php endif; ?>><?php echo e($subkategoritutorial->kategori); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>                                   
                  </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <textarea class="form-control" id="content1" name="keywords"><?php echo e($tutorial->keywords); ?></textarea>
                        <script>
                            CKEDITOR.replace('content1');
                        </script>
                      </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Deskripsi</label>
                            <textarea class="form-control" id="content" name="deskripsi"><?php echo e($tutorial->deskripsi); ?></textarea>
                            <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Tampilkan</label>
                            <br>
                            <input type="radio" id="ya" name="status" value="Aktif" <?php if($tutorial->status == 'Aktif'): ?>checked <?php endif; ?>>
                             <label for="ya">Ya</label><br>
                             <input type="radio" id="tidak" name="status" value="NonAktif" <?php if($tutorial->status == 'NonAktif'): ?>checked <?php endif; ?>>
                             <label for="tidak">Tidak</label><br>                                
                      </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="<?php echo e(route('tutorial.index')); ?>">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</form>
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>


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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/tutorial/edit.blade.php ENDPATH**/ ?>