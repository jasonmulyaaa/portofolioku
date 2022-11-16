
<?php $__env->startSection('content'); ?>
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pengalaman & Sertifikat Table</h4>
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
                        <thead>
                          <tr>
                          <th>
                            <input type="checkbox" id="chkCheckAll" />
                          </th>
                            <th>
                              Judul
                            </th>
                            <th>
                              Tahun Awal
                            </th>
                            <th>
                              Tahun Akhir
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $workings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $working): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                          <td>
                            <input type="checkbox" name="ids" class="checkBoxClass" value="<?php echo e($working->id); ?>" />
                          </td>
                            <td>
                              <?php echo e($working->judul); ?>

                            </td>
                            <td>
                              <?php echo e($working->tahun_awal); ?>

                            </td>
                            <td>
                              <?php echo e($working->tahun_akhir); ?>

                            </td>
                            <td>
                            <form action="<?php echo e(route('working.destroy', $working->id)); ?>" method="POST">
  
                            <a class="btn rounded-pill btn-warning" href="<?php echo e(route('working.edit', $working->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
  
                            <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                            </td>
                          </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
                      <?php echo $workings->links(); ?>

                      <br>
                      <div class="pull-right">
                        <a href="#" class="btn btn-danger" id="deleteAllSelectedAkun" onclick="location.reload()">Delete Selected</a>
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
                <form action="<?php echo e(route('working.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Pengalaman & Sertifikat</h4>
                                  <p class="card-description">
                                    Isi Form Pengalaman & Sertifikat
                                  </p>
                                  <form class="forms-sample">
                                    <div class="form-group">
                                      <label for="exampleInputName1">Nama Perusahaan\Sertifikat\Kegiatan</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Perusahaan\Sertifikat\Kegiatan" name="judul">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Tahun Awal</label>
                                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Tahun Awal" name="tahun_awal">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Tahun Akhir</label>
                                      <input type="number" class="form-control" id="exampleInputName1" placeholder="ahun Akhir" name="tahun_akhir">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Deskripsi</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi" name="deskripsi">
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/working/index.blade.php ENDPATH**/ ?>