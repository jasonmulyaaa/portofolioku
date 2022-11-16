
<?php $__env->startSection('content'); ?>
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Contact Us Form Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="wid-tab" data-bs-toggle="tab" data-bs-target="#wid" type="button" role="tab" aria-controls="wid" aria-selected="true">Table</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="wid" role="tabpanel" aria-labelledby="wid-tab"><table class="table table-striped">
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
                              Nama
                            </th>
                            <th>
                              No Telp
                            </th>
                            <th>
                              Subjek
                            </th>
                            <th>
                              Keterangan
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $contactuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="ids" class="checkBoxClass" value="<?php echo e($contactus->id); ?>" />
                            </td>
                            <td>
                              <?php echo e($contactus->nama); ?>

                            </td>
                            <td>
                              <?php echo e($contactus->no_telp); ?>

                            </td>
                            <td>
                              <?php echo e($contactus->subjek); ?>

                            </td>
                            <td>
                              <?php echo e($contactus->keterangan); ?>

                            </td>
                            <td>
                            <form action="<?php echo e(route('contactus.destroy', $contactus->id)); ?>" method="POST">
                              <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
  
                            <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                            </td>
                          </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
                      <?php echo $contactuss->links(); ?>

                      <br>
                      <div class="pull-right">
                        <a href="#" class="btn btn-danger" id="deleteAllSelectedContact" onclick="location.reload()">Delete Selected</a>
                    </div>

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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/contactus/index.blade.php ENDPATH**/ ?>