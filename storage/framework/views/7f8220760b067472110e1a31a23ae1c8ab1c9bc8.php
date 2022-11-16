
<?php $__env->startSection('content'); ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url(<?php echo e(asset('storage/'. $konfigurasi[0]->page_header)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white"><?php echo $pagetitle[0]->contact; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- Map & address us Section Section Starts Here -->
    <div class="map-address-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php echo $pagetitle[0]->judul_contact; ?></span>
                <h2 class="title"><?php echo $pagetitle[0]->subjudul_contact; ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="contact-wrapper">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="../../assets/user/homepage/images/icon/01.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Office Address</h6>
                                    <p><?php echo $konfigurasi[0]->alamat; ?></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="../../assets/user/homepage/images/icon/02.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Phone number</h6>
                                    <p>+<?php echo $konfigurasi[0]->no_telp; ?></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="../../assets/user/homepage/images/icon/03.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Send email </h6>
                                    <a href="mailto:<?php echo $konfigurasi[0]->email; ?>"><?php echo $konfigurasi[0]->email; ?></a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="../../assets/user/homepage/images/icon/04.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Our website</h6>
                                    <a href="https://wanteknologi.com">www.wanteknologi.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="map-area">
                            <div class="maps">
                                <?php echo $konfigurasi[0]->map; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map & address us Section Section Ends Here -->

    <!-- Contact us Section Section Starts Here -->
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php echo $pagetitle[0]->subjudul_form; ?></span>
                <h2 class="title"><?php echo $pagetitle[0]->judul_form; ?></h2>
            </div>
            <div class="section-wrapper">
                <form class="contact-form" action="<?php echo e(route('contact.store')); ?>"  method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" name="nama" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Phone" name="no_telp" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Subject" name="subjek" required>
                    </div>
                    <div class="form-group w-100">
                        <textarea rows="8" placeholder="Your Message" name="keterangan" required></textarea>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="lab-btn"><span>Send our Message</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact us Section Section Ends Here -->


    <!-- footer -->
        <!-- Newsletter Section Ending Here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Resume\resources\views/home/contact/index.blade.php ENDPATH**/ ?>