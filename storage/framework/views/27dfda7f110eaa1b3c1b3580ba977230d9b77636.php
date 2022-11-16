
<?php $__env->startSection('content'); ?>
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Testimonial Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">Pending</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Add</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-striped">
                          <div class="col-md-4">
                            <form action="<?php echo e(url()->current()); ?>" autocomplete="off" method="get">
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <button class=" btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </form>
                           </div>
                          <thead>
                            <tr>
                            <th>
                              <input type="checkbox" id="chkCheckAll" />
                            </th>
                            <th>
                              Gambar
                            </th>
                              <th>
                                Nama
                              </th>
                              <th>
                                Profesi
                              </th>
                              <th>
                                Deskripsi
                              </th>
                              <th>
                                Action
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td>
                              <input type="checkbox" name="ids" class="checkBoxClass" value="<?php echo e($testimonial->id); ?>" />
                            </td>
                            <td>
                              <div style="width: 100px;">
                                <img src="<?php echo e(asset('storage/' . $testimonial->gambar)); ?>" alt="No Image" class="img-fluid mt-3">
                            </div>
                            </td>
                              <td>
                                <?php echo e($testimonial->nama); ?>

                              </td>
                              <td>
                                <?php echo e($testimonial->profesi); ?>

                              </td>
                              <td class="text-wrap">
                                <?php echo $testimonial->deskripsi; ?>

                              </td>
                              <td>
                                
                              <form action="<?php echo e(route('testimonial.destroy', $testimonial->id)); ?>" method="POST">
    
                              <a class="btn rounded-pill btn-warning" href="<?php echo e(route('testimonial.edit', $testimonial->id)); ?>">Edit</a>
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
    
                              <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                              </td>
                            </tr>
                          </tbody>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo $testimonials->links(); ?>

                        <br>
                        <div class="pull-right">
                          <a href="#" class="btn btn-danger" id="deleteAllSelectedTestimonial" onclick="location.reload()">Delete Selected</a>
                      </div>
                      </div>

                      <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                        <table class="table table-striped">
                          <div class="col-md-4">
                            <form action="<?php echo e(url()->current()); ?>" autocomplete="off" method="get">
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <button class=" btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </form>
                           </div>
                          <thead>
                            <tr>
                            <th>
                              <input type="checkbox" id="chkCheckAll" />
                            </th>
                            <th>
                              Gambar
                            </th>
                              <th>
                                Nama
                              </th>
                              <th>
                                Profesi
                              </th>
                              <th>
                                Deskripsi
                              </th>
                              <th>
                                Action
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $__currentLoopData = $testimonialspendings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonialspending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td>
                              <input type="checkbox" name="ids" class="checkBoxClass" value="<?php echo e($testimonialspending->id); ?>" />
                            </td>
                            <td>
                              <div style="width: 100px;">
                                <img src="<?php echo e(asset('storage/' . $testimonialspending->gambar)); ?>" alt="No Image" class="img-fluid mt-3">
                            </div>
                            </td>
                              <td>
                                <?php echo e($testimonialspending->nama); ?>

                              </td>
                              <td>
                                <?php echo e($testimonialspending->profesi); ?>

                              </td>
                              <td class="text-wrap">
                                <?php echo $testimonialspending->deskripsi; ?>

                              </td>
                              <td>
                                
                              <form action="<?php echo e(route('testimonial.destroy', $testimonialspending->id)); ?>" method="POST">
    
                              <a class="btn rounded-pill btn-success" href="<?php echo e(route('testimonial.status', $testimonialspending->id)); ?>">Success</a>
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
    
                              <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                              </td>
                            </tr>
                          </tbody>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo $testimonials->links(); ?>

                        <br>
                        <div class="pull-right">
                          <a href="#" class="btn btn-danger" id="deleteAllSelectedTestimonial" onclick="location.reload()">Delete Selected</a>
                      </div>
                      </div>

                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <form action="<?php echo e(route('testimonial.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Form Testimonial</h4>
                                  <p class="card-description">
                                    Isi Form Testimonial
                                  </p>
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/testimonial/index.blade.php ENDPATH**/ ?>