<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'head.php'; ?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- header start -->
   <?php include 'menu.php'; ?>
    <!-- header end -->
   <div class="testimonial-area overly-style count-bg ptb-90">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial-active dots-style">
                            <div class="single-testimonial black-text text-center">
                                <div class="testimonial-title">
                                    <span class="icon-quote"></span>
                                    
                                </div>
                                <p><span>"</span>Dengan belajar, anda  bisa mengajar. Dengan mengajar, anda belajar<span>"</span></p>
                                <div class="testimonial-author text-uppercase">
                                    <span>- anonim. </span>
                                </div>
                            </div>
                            <div class="single-testimonial black-text text-center">
                                <div class="testimonial-title">
                                    <span class="icon-quote"></span>
                                    
                                </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-area ptb-90">
        <div class="container">

            <div class="row pt-60">
                <div class="col-md-4">
                    <div class="portfolio-meta">
                        <ul>
                           <li><i class="fa fa-user"></i><span>Sesi Pendftaran:</span> <?php if(empty($sesi->nama_sesi)){ echo "Tidak ada sesi pendaftaran"; } else{ echo $sesi->nama_sesi; }?></li>
                            <?php if(empty($sesi->nama_sesi)){ ?>
                            <li><i class="fa fa-calendar"></i><span>Mulai pendaftaran:</span>-</li>
                            <li><i class="fa fa-calendar"></i><span>Batas pendaftaran:</span>-</li>
                            <?php } else { ?> 
                            <li><i class="fa fa-calendar"></i><span>Mulai pendaftaran:</span>Juni</li>
                            <li><i class="fa fa-calendar"></i><span>Batas pendaftaran:</span>Juni</li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project-desc">
                        <h3>Asisten Laboratorium</h3>
                        <p>Praktikum merupakan sebuah metode pembelajaran yang bertujuan untuk meningkatkan pemahaman mahasiswa. Asisten laboratorium menjadi faktor yang akan sangat berpengaruh dalam proses kegiatan pembelajaran praktikum. <br>Yuk segera daftarkan diri kamu! </p>

                    </div>
                    <div class="post-share">

                        <div class="blog-info">
                           <?php if(empty($sesi->nama_sesi)){ ?>
                            <a href="#">PENDAFTARAN BELUM ADA</a>
                            <?php }else { ?>
                            <a href="<?php echo base_url('index.php/laboratorium/formdaftar')?>">DAFTAR</a>
                            <?php } ?>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="service-area gray-bg border-top pt-85 pb-60">
        <div class="container">
            <div class="section-title text-center">
                <h2>Tahapan Seleksi</h2>
                <p>Seleksi asisten dilakukan melalui empat tahap</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-service white-bg text-center">
                        <i class="icon-laptop"></i>
                        <h3>Administrasi</h3>
                        <p>Peserta melakukan pendaftaran online dan melengkapi syarat sesuai dengan ketentuan</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service white-bg text-center">
                        <i class="icon-pencil"></i>
                        <h3>Kompetensi </h3>
                        <p>Setelah dinyatakan lulus administrasi maka peserta akan melakukan tes kompetensi atau uji tulis</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service white-bg text-center">
                        <i class="icon-genius"></i>
                        <h3>Microteaching</h3>
                        <p>Kemudian, peserta juga akan melakukan tes microteaching atau tes mengajar yang akan dinilai oleh tim reviewer</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service white-bg text-center">
                        <i class="icon-quote"></i>
                        <h3>Wawancara</h3>
                        <p>Terakhir, peserta akan melakukan wawancara dengan Koordinator Lab sebagai tahapan terakhir</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- service-area end -->


    <!-- footer start -->
    <footer class="footer-bg gray-bg ptb-90">
        <div class="footer-area">
            <div class="container">
                <div class="footer-info text-center">
                    <div class="logo logo-style">
                        <a href="index.html">MIAMI</a>
                    </div>
                    <ul>
                        <li>Phone : +889 945 432</li>
                        <li>Email : devitems@gmail.com</li>
                        <li>Address : 123 West Street,Melbourne Victoria</li>
                    </ul>
                    <div class="social-icon mt-20">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-skype"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- start scrollUp  -->
    <div id="toTop">
        <i class="fa fa-chevron-up"></i>
    </div>


    <!-- all js here -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <!-- ajax-mail js -->
    <script src="js/ajax-mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
