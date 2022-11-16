
<?php $__env->startSection('content'); ?>
<!-- partial -->
<?php
use App\Models\KategoriTutorial;
?>
<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tutorial Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Add</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><table class="table table-striped">
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
                              Judul
                            </th>
                            <th>
                              Kategori
                            </th>
                            <th>
                              Views
                            </th>
                            <th>
                              Status
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $tutorials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                          <td>
                            <input type="checkbox" name="ids" class="checkBoxClass" value="<?php echo e($tutorial->id); ?>" />
                          </td>
                            <td>
                            <div style="width: 100px;">
                              <img src="<?php echo e(asset('storage/' . $tutorial->gambar)); ?>" alt="No Image" class="img-fluid mt-3">
                          </div>
                            </td>
                            <td>
                              <?php echo e($tutorial->judul); ?>

                            </td>
                            <?php
                                $kategori = KategoriTutorial::where('id', $tutorial->kategori)->first();
                            ?>
                            <td>
                              <?php echo e($kategori->kategori); ?>

                            </td>
                            <td>
                              <?php echo e($tutorial->views); ?>x
                            </td>
                            <td>
                              <div <?php if($tutorial->status == 'Aktif'): ?> class="badge badge-opacity-success" <?php elseif($tutorial->status == 'NonAktif'): ?> class="badge badge-opacity-warning" <?php endif; ?>><?php echo e($tutorial->status); ?></div>
                            </td>
                            <td>
                            <form action="<?php echo e(route('tutorial.destroy', $tutorial->id)); ?>" method="POST">
  
                            <a class="btn rounded-pill btn-warning" href="<?php echo e(route('tutorial.edit', $tutorial->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
  
                            <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                            </td>
                          </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
                      <?php echo $tutorials->links(); ?>

                      <br>
                      <div class="pull-right">
                        <a href="#" class="btn btn-danger" id="deleteAllSelectedTutorial" onclick="location.reload()">Delete Selected</a>
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
                <form action="<?php echo e(route('tutorial.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
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
                                        </div>
                                        <div class="form-group">
                                      <label for="exampleInputName1">Judul</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="<?php echo e(old('judul')); ?>">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Kategori</label>
                                      <select class="form-control" name="kategori" id="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <?php $__currentLoopData = $kategoritutorial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoritutorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kategoritutorial->id); ?>"><?php echo e($kategoritutorial->kategori); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>                                   
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">Sub Kategori</label>
                                  <select class="form-control" name="sub_kategori" id="sub_kategori">
                                </select>                                   
                            </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Keywords</label>
                                      <textarea class="form-control" id="content1" name="keywords"><?php echo e(old('keywords')); ?></textarea>
                                      <script>
                                          CKEDITOR.replace('content1');
                                      </script>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Deskripsi</label>
                                      <textarea class="form-control" id="content" name="deskripsi"><?php echo e(old('deskripsi')); ?></textarea>
                                      <script>
                                          CKEDITOR.replace('content');
                                      </script>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Tampilkan</label>
                                      <br>
                                      <input type="radio" id="ya" name="status" value="Aktif">
                                       <label for="ya">Ya</label><br>
                                       <input type="radio" id="tidak" name="status" value="NonAktif">
                                       <label for="tidak">Tidak</label><br>                                
                                </div>
                                <div class="form-group">
                                  <input type="hidden" class="form-control" id="exampleInputName1" name="views" value="0">
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
            <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
            <script type='text/javascript'>
              $(document).ready(function(){
           
                $('#kategori').change(function(){
                   // Department id
                   var id = $(this).val();
           
                   // Empty the dropdown
                   $('#sub_kategori').find('option').remove();
           
                   // AJAX request 
                   $.ajax({
                     url: 'getSubKategori/'+id,
                     type: 'get',
                     dataType: 'json',
                     success: function(response){
                          var len = 0;
                          if(response['data'] != null){
                              len = response['data'].length;
                          }
           
                          if(len > 0){
                              // Read data and create <option >
                              for(var i=0; i<len; i++){
                                  var id = response['data'][i].id;
                                  var kategori = response['data'][i].kategori;
                                  var option = "<option value='"+id+"'>"+kategori+"</option>"; 
                                  $("#sub_kategori").append(option); 
                              }
                          }
                     }
                  });
                });
              });
          </script>
                  
           
            

          
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/tutorial/index.blade.php ENDPATH**/ ?>