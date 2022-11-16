
<?php $__env->startSection('content'); ?>
<!-- partial -->
<?php
use App\Models\Resume;
?>
<div class="content-wrapper bg-white">
          <div class="row">
        <?php
            $resume = Resume::where('user_id', $contactform->user_id)->first();
        ?>          
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Contact Form CV Details</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                        <h4 class="fw-bold">Nama Pengguna CV</h4>
                        <br>
                        <img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="course" onerror="this.onerror=null; this.src='../../assets/images/faces/icon.png'" style="width: 240px; height: 240px; object-fit: cover;">
                        <br>
                        <br>
                        <h5>
                          <b>
                          <?php echo $resume->nama; ?>

                          </b>
                        </h5>
                      </address>
                    </div>
                    <div class="col-md-6">
                      <address>
                        <h4 class="fw-bold">Nama Pengrekrut</h4>
                        <br>
                        <h5 class="fw-bold">
                          Nama
                        </h5>
                        <p class="mb-2">
                          <?php echo $contactform->nama; ?>

                        </p>
                        <h5 class="fw-bold">
                          E-mail
                        </h5>
                        <p class="mb-2">
                          <?php echo $contactform->email; ?>

                        </p>
                        <h5 class="fw-bold">
                          Instansi
                        </h5>
                        <p class="mb-2">
                          <?php echo $contactform->instansi; ?>

                        </p>
                        <h5 class="fw-bold">
                          Jabatan
                        </h5>
                        <p class="mb-2">
                          <?php echo $contactform->jabatan; ?>

                        </p>
                      </address>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Pesan Dari Pengrekrut</h4>
                  <p class="lead">
                      <?php echo $contactform->pesan; ?>

                  </p>
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/contactform/show.blade.php ENDPATH**/ ?>