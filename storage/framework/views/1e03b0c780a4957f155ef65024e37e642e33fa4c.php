
<?php $__env->startSection('content'); ?>
<?php
use App\Models\Tutorial;
$i = 0;
?>
<div class="content-wrapper" style="background-color: white;">
    <div class="row">
<?php if(auth()->user()->role == 'superadmin'): ?>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Visit</h4>
      <div class="media">
        <i class="mdi mdi-compare icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text"><?php echo e($visittotal); ?> Visitor</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Today Visitor</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text"><?php echo e($visittoday); ?> Visitors</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Uniqe Visitor</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text"><?php echo e($visituniqe); ?> Visitors</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total CV</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text"><?php echo e($totalcv); ?> CV</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">CV Table</h4>
      <div class="col-md-4">
        <form action="<?php echo e(url()->current()); ?>" autocomplete="off" method="get">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="Cari Nama" name="search">
                <button class=" btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
            </div>
        </form>
       </div>
<table class="table table-striped">
  <thead>
    <tr>
    <th>
      No.
    </th>
    <th>
      Gambar
    </th>
    <th>
      Nama Pengguna CV
    </th>
    <th>
      Pekerjaan
    </th>
      <th>
        Total Kunjungan
      </th>
      <th>
        Total Blog
      </th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $resumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resume): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td>
        <?php echo ++$i; ?>

      </td>
      <td>
        <div style="width: 100px;">
          <img src="<?php echo e(asset('storage/' . $resume->foto)); ?>" alt="No Image" class="img-fluid mt-3">
      </div>
      </td>
      <td>
        <?php echo $resume->nama; ?>

      </td>
      <td>
        <?php echo $resume->pekerjaan; ?>

      </td>
      <td>
        <?php echo $resume->views; ?>x
      </td>
      <td>
        <?php
            $totalblog = Tutorial::where('user_id', $resume->user_id)->count();
        ?>
        <?php echo $totalblog; ?>x
      </td>
      <td>
      
      </td>
    </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<br>
<?php echo $resumes->links(); ?>

  </div>
</div>
</div>
<?php elseif(auth()->user()->role == 'PKL'): ?>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Tutorials</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text"> <b><?php echo $tutorial; ?></b> Tutorials</h5>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Sosial Media</h4>
  <div class="media">
    <i class="mdi mdi-share-variant icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $sosial; ?></b> Sosial Media</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Service</h4>
  <div class="media">
    <i class="mdi mdi-wrench icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $service; ?></b> Service</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Skill</h4>
  <div class="media">
    <i class="mdi mdi-worker icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $skill; ?></b> Skill</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Working History</h4>
  <div class="media">
    <i class="mdi mdi-briefcase icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $working; ?></b> Working History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Education History</h4>
  <div class="media">
    <i class="mdi mdi-school icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $education; ?></b> Education History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Clients</h4>
  <div class="media">
    <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $client; ?></b> Clients</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Testimonial</h4>
  <div class="media">
    <i class="mdi mdi-wechat icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $testimonial; ?></b> Testimonial</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Portfolio</h4>
  <div class="media">
    <i class="mdi mdi-library-books icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $portfolio; ?></b> Portfolio</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Blog</h4>
  <div class="media">
    <i class="mdi mdi-book icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $blog; ?></b> Blog</h5>
    </div>
  </div>
</div>
</div>
<?php elseif(auth()->user()->role == 'User' || auth()->user()->role == 'Pengajar'): ?>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Sosial Media</h4>
  <div class="media">
    <i class="mdi mdi-share-variant icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $sosial; ?></b> Sosial Media</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Service</h4>
  <div class="media">
    <i class="mdi mdi-wrench icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $service; ?></b> Service</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Skill</h4>
  <div class="media">
    <i class="mdi mdi-worker icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $skill; ?></b> Skill</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Working History</h4>
  <div class="media">
    <i class="mdi mdi-briefcase icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $working; ?></b> Working History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Education History</h4>
  <div class="media">
    <i class="mdi mdi-school icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $education; ?></b> Education History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Clients</h4>
  <div class="media">
    <i class="mdi mdi-lan icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $client; ?></b> Clients</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Testimonial</h4>
  <div class="media">
    <i class="mdi mdi-wechat icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $testimonial; ?></b> Testimonial</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Portfolio</h4>
  <div class="media">
    <i class="mdi mdi-library-books icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $portfolio; ?></b> Portfolio</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Blog</h4>
  <div class="media">
    <i class="mdi mdi-book icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b><?php echo $blog; ?></b> Blog</h5>
    </div>
  </div>
</div>
</div>
<?php endif; ?>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/dashboard.blade.php ENDPATH**/ ?>