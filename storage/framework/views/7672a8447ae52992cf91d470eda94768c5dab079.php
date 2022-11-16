<!DOCTYPE html>
<html lang="en">
<?php
use App\Models\Resume;
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../assets/images" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"><span class="text-black fw-bold"><span id="time"></span> <?php echo e(Auth::user()->nama); ?><span></h1>
                <script>
                    const waktu = new Date("October 13, 2014 23:13:00").getHours();
                    let jam;

                    if(waktu < 11){
                        jam = "Selamat Pagi,"
                    }
                    else if(waktu >= 11 && waktu < 15){
                        jam = "Selamat Siang,"
                    }
                    else if(waktu >= 15 && waktu < 19)
                    {
                        jam = "Selamat Sore,"
                    }
                    else if(waktu >= 19)
                    {
                        jam = "Selamat Malam,"
                    }

                    document.getElementById("time").innerHTML = jam;
                </script>
              <?php
                  $resume = Resume::where('user_id', auth()->user()->id)->first();
              ?>
              <?php if(empty($resume)): ?>
              <h3 class="welcome-sub-text">Your performance </h3>
              <?php else: ?>
              <h3 class="welcome-sub-text">Hasil CV Anda: 
                <?php if(Auth::user()->role == 'Pengajar'): ?>
                <a href="<?php echo e(route('cv.show_pengajar', $resume->slug)); ?>" target="__blank" style="text-decoration: none;"><?php echo $resume->nama; ?></a>
                <?php else: ?>
                <a href="<?php echo e(route('cv.show', $resume->slug)); ?>" target="__blank" style="text-decoration: none;"><?php echo $resume->nama; ?></a>
                <?php endif; ?>
              </h3>
              <?php endif; ?>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown ">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="<?php echo e(asset('storage/' . Auth::user()->foto)); ?>" alt="Profile image" onerror="this.onerror=null; this.src='../../assets/images/faces/face8.jpg'">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="<?php echo e(asset('storage/' . Auth::user()->foto)); ?>" alt="Profile image" onerror="this.onerror=null; this.src='../../assets/images/faces/face8.jpg'" style="width: 40px; height: 40px; object-fit:cover;">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo e(Auth::user()->nama); ?></p>
              </div>
              <a href="/" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-home text-primary me-2"></i>Halaman Utama</a>
              <a href="<?php echo e(route('profile.index')); ?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account text-primary me-2"></i>Edit Profil</a>
              <form action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <button class="dropdown-item"><i class="dropdown-item-icon mdi mdi-import text-primary me-2"></i>Sign Out</button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar  sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('leaderboard.index')); ?>">
              <i class="menu-icon mdi mdi mdi-trophy"></i>
              <span class="menu-title">Leaderboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('dashboard.index')); ?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if(auth()->user()->role == 'User' || auth()->user()->role == 'Pengajar'): ?>

          <li class="nav-item nav-category">Resume</li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('resumee.index')); ?>">
              <i class="menu-icon mdi mdi mdi-file-document-box"></i>
              <span class="menu-title">Resume</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('sosial.index')); ?>">
              <i class="menu-icon mdi mdi mdi-share-variant"></i>
              <span class="menu-title">Sosial Media</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('service.index')); ?>">
              <i class="menu-icon mdi mdi mdi-wrench"></i>
              <span class="menu-title">Service</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('skill.index')); ?>">
              <i class="menu-icon mdi mdi mdi-worker"></i>
              <span class="menu-title">Skill</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('working.index')); ?>">
              <i class="menu-icon mdi mdi mdi-briefcase"></i>
              <span class="menu-title">Pengalaman & Sertifikat</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('education.index')); ?>">
              <i class="menu-icon mdi mdi mdi-school"></i>
              <span class="menu-title">Education History</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('client.index')); ?>">
              <i class="menu-icon mdi mdi mdi-lan"></i>
              <span class="menu-title">Clients</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('testimonial.index')); ?>">
              <i class="menu-icon mdi mdi mdi-wechat"></i>
              <span class="menu-title">Testimonial</span>
            </a>
          </li>              
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('portfolio.index')); ?>">
              <i class="menu-icon mdi mdi mdi-library-books"></i>
              <span class="menu-title">Portfolio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('testipengajar.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book"></i>
              <span class="menu-title">Testimonial Pengajar</span>
            </a>
          </li>  

          <?php elseif(auth()->user()->role == 'PKL'): ?>
          <li class="nav-item nav-category">Tutorial</li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('tutorial.index')); ?>">
              <i class="menu-icon mdi mdi mdi-file-document-box"></i>
              <span class="menu-title">Tutorial</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('kategoritutorial.index')); ?>">
              <i class="menu-icon mdi mdi mdi-file-document-box"></i>
              <span class="menu-title">Kategori</span>
            </a>
          </li>
          <li class="nav-item nav-category">Resume</li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('resumee.index')); ?>">
              <i class="menu-icon mdi mdi mdi-file-document-box"></i>
              <span class="menu-title">Resume</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('sosial.index')); ?>">
              <i class="menu-icon mdi mdi mdi-share-variant"></i>
              <span class="menu-title">Sosial Media</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('service.index')); ?>">
              <i class="menu-icon mdi mdi mdi-wrench"></i>
              <span class="menu-title">Service</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('skill.index')); ?>">
              <i class="menu-icon mdi mdi mdi-worker"></i>
              <span class="menu-title">Skill</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('working.index')); ?>">
              <i class="menu-icon mdi mdi mdi-briefcase"></i>
              <span class="menu-title">Pengalaman & Sertifikat</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('education.index')); ?>">
              <i class="menu-icon mdi mdi mdi-school"></i>
              <span class="menu-title">Education History</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('client.index')); ?>">
              <i class="menu-icon mdi mdi mdi-lan"></i>
              <span class="menu-title">Clients</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('testimonial.index')); ?>">
              <i class="menu-icon mdi mdi mdi-wechat"></i>
              <span class="menu-title">Testimonial</span>
            </a>
          </li>              
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('portfolio.index')); ?>">
              <i class="menu-icon mdi mdi mdi-library-books"></i>
              <span class="menu-title">Portfolio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('testipengajar.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book"></i>
              <span class="menu-title">Testimonial Pengajar</span>
            </a>
          </li>  

          <?php elseif(auth()->user()->role == 'superadmin'): ?>
          <li class="nav-item nav-category">Homepage</li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('banner.index')); ?>">
              <i class="menu-icon mdi mdi mdi-image"></i>
              <span class="menu-title">Banner</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('whycourse.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book-open-variant"></i>
              <span class="menu-title">Why Course</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('gambarwhycourse.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book-open-page-variant"></i>
              <span class="menu-title">Gambar Why Course</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('ourcourse.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book-open"></i>
              <span class="menu-title">Our Course</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('kategoricourse.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book-multiple"></i>
              <span class="menu-title">Kategori Course</span>
            </a>
          </li>
          <li class="nav-item nav-category">Konfigurasi</li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('konfigurasi.index')); ?>">
              <i class="menu-icon mdi mdi mdi-settings"></i>
              <span class="menu-title">Konfigurasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('metamanagement.index')); ?>">
              <i class="menu-icon mdi mdi mdi-earth"></i>
              <span class="menu-title">Meta Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pagetitle.index')); ?>">
              <i class="menu-icon mdi mdi mdi-book-open-page-variant"></i>
              <span class="menu-title">Page Title</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('usermanagement.index')); ?>">
              <i class="menu-icon mdi mdi mdi-account-settings"></i>
              <span class="menu-title">User Management</span>
            </a>
          </li>
          <li class="nav-item nav-category">Contact Us Form</li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('contactus.index')); ?>">
              <i class="menu-icon mdi mdi mdi-settings"></i>
              <span class="menu-title">Contact Us Form</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('contactform.index')); ?>">
              <i class="menu-icon mdi mdi mdi-account-card-details"></i>
              <span class="menu-title">Contact Form CV</span>
            </a>
          </li> 
          <?php endif; ?>
        </ul>
      </nav>
      <!-- partial -->
          <?php echo $__env->yieldContent('content'); ?>
    </div>

  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../assets/dist/trix.js"></script>
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../../assets/js/dashboard.js"></script>
  <script src="../../assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedTestimonial").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('testimonial.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedPortfolio").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('portfolio.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedBlog").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('blog.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedEducation").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('education.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedWorking").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('working.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedSkill").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('skill.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedService").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('service.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedSosial").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('sosial.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedTutorial").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"<?php echo e(route('tutorial.deleteSelected')); ?>",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>

<?php /**PATH C:\xampp\htdocs\Resume\resources\views/layout/master1.blade.php ENDPATH**/ ?>