
<?php $__env->startSection('content'); ?>

<div class="content-wrapper bg-white">
    <div class="row">

      <?php if(empty($resume)): ?>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Resume</h4>
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <form action="<?php echo e(route('resume.store')); ?>" method="POST" enctype="multipart/form-data">
          
              <?php echo csrf_field(); ?>
              
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Resume</h4>
                        <p class="card-description">
                          Isi Form Resume
                        </p>
                        <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Foto</strong>
                            
                            
                                
                            
                                <img class="img-preview img-fluid mb-3">
                            
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="foto" id="image" onchange="previewImage()" >
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
                          <label for="exampleInputName1">Link Google Drive PDF</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Link Google Drive PDF" name="pdf">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Lahir" name="tanggal_lahir">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Pekerjaan</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Pekerjaan" name="pekerjaan">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Email</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email">
                      </div>
                      
                      
                          <div class="form-group">
                            <label for="exampleInputName1">About Me</label>
                            <textarea type="text" class="form-control" id="content" placeholder="About Me" name="about_me"></textarea>
                              <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">No Telp</label>
                          <input type="number" class="form-control" id="exampleInputName1" placeholder="+62123456789" name="no_telp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Map</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Contact Map" name="contact_map">
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
      <?php else: ?>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Resume</h4>
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
          <form action="<?php echo e(route('resume.update', $resume->id)); ?>" method="POST" enctype="multipart/form-data">
          
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Resume</h4>
                        <p class="card-description">
                          Isi Form Resume
                        </p>
                        <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="<?php echo e($resume->nama); ?>">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Foto</strong>
                            <input type="hidden" name="oldImage1" value="<?php echo e($resume->foto); ?>">
                            <?php if($resume->foto): ?>
                                <img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
unset($__errorArgs, $__bag); ?> name="foto" id="image" onchange="previewImage()" >
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
                          <label for="exampleInputName1">Link Google Drive PDF</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Link Google Drive PDF" name="pdf" value="<?php echo e($resume->pdf); ?>">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?php echo e($resume->tanggal_lahir); ?>">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Pekerjaan</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo e($resume->pekerjaan); ?>">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Email</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="<?php echo e($resume->email); ?>">
                      </div>
                      
                      
                          <div class="form-group">
                            <label for="exampleInputName1">About Me</label>
                            <textarea type="text" class="form-control" id="content" placeholder="About Me" name="about_me"><?php echo e($resume->about_me); ?></textarea>
                              <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="<?php echo e($resume->alamat); ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">No Telp</label>
                          <input type="number" class="form-control" id="exampleInputName1" placeholder="+62123456789" name="no_telp" value="<?php echo e($resume->no_telp); ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Map</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Contact Map" name="contact_map" value="<?php echo e($resume->contact_map); ?>">
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
      <?php endif; ?>
      

      

            <script type="text/javascript">
              $('.addservice').on('click', function(){
                addservice();
              });
              var appendQueue1 = 0;
              function addservice(){
                var customer = '<div class="col-xs-12 col-sm-12 col-md-12"><div class="form-group "><strong>Gambar Service</strong><img class="img-preview img-fluid mb-3"><img class="img-preview img-fluid mb-3 col-sm-5"><div class="input-group mb-3"><input type="file" class="form-control" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="service" id="image" onchange="previewImage()" ><?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div></div></div><div class="form-group"><label for="exampleInputName1">Judul Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Service" name="service"></div><div class="form-group"><label for="exampleInputName1">Deskripsi Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi Service" name="service"></div>`)';
                $('.customer').append(`<div class="col-xs-12 col-sm-12 col-md-12"><div class="form-group appendQueue${appendQueue}"><strong>Gambar Service</strong><img class="img-preview img-fluid mb-3"><img class="img-preview img-fluid mb-3 col-sm-5"><div class="input-group mb-3"><input type="file" class="form-control" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="service" id="image" onchange="previewImage()" ><?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div></div></div><div class="form-group appendQueue${appendQueue}"><label for="exampleInputName1">Judul Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Service" name="service"></div><div class="form-group appendQueue${appendQueue}"><label for="exampleInputName1">Deskripsi Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi Service" name="service"></div><span class="remove btn btn-danger">Hapus</span>
`);
                appendQueue += 1
              };
              $(document).on('click', '.remove', function(){
                var id = $(this).data('id')
                $(`.appendQueue${id}`).remove();
              });
              </script>
     
      

    
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/resume/index.blade.php ENDPATH**/ ?>