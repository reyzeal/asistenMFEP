<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Form Pendaftaran Asisten</title>
    <meta name="description" content="Splasher is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Splasher Admin, Splasheradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


    <!-- select2 CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/select2/dist/css/select2.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- switchery CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/switchery/dist/switchery.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- bootstrap-select CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- bootstrap-tagsinput CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')?>" rel="stylesheet" type="text/css" />

    <!-- bootstrap-touchspin CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- multi-select CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/multiselect/css/multi-select.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Switches CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Datetimepicker CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Jasny-bootstrap CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin/demo-1/dist/css/style.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->
    <div class="wrapper theme-2-active navbar-top-light horizontal-nav">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-wrap">
                <div class="mobile-only-brand pull-left">

                    <a href="index.html">
                        <img class="image-responsive" src="<?php echo base_url('assets/user/img/bg/logolab.png')?>" width="20%" style="padding-left:15px; padding-top:15px" />

                    </a>


                </div>

            </div>
        </nav>
        <!-- /Top Menu Items -->


        <!-- Right Sidebar Menu -->



        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container">



                <!-- Row -->
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel panel-default border-panel card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Form Pendftaran</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="form-wrap">
                                        <form role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/laboratorium/insertdaftar')?>">

                                            <?php 
                                                      foreach ($sesi as $data) {
                                                   ?>
                                            <input type="hidden" name="id_sesi" value="<?php echo $data->id_sesi; ?>">
                                            <?php } ?>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">NIM</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="nim" id="example-input-small" class="form-control input-sm" placeholder="NIM" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">Nama Lengkap</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="nama_lengkap" id="example-input-small" class="form-control input-sm" placeholder="Nama Lengkap" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">Nama Panggilan</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="nama_panggilan" id="example-input-small" class="form-control input-sm" placeholder="Nama Panggilan" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">Tempat/ Tanggal Lahir</label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="temp_lahir" id="example-input-small" class="form-control input-sm" placeholder="Tempat Lahir">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="date" name="tgl_lahir" id="example-input-small" class="form-control input-sm" placeholder="Tempat Lahir" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">Agama</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="agama" id="example-input-small" class="form-control input-sm" placeholder="agama" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label ">Alamat Rumah</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" rows="5" name="alamat_rumah"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label ">Alamat Kos</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" rows="5" name="alamat_kos" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">No Hp</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="no_hp" id="example-input-small" class="form-control input-sm" placeholder="No Hp" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">Email</label>
                                                <div class="col-sm-6">
                                                    <input type="email" name="email" id="example-input-small" class="form-control input-sm" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">IPK</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="ipk" id="example-input-small" class="form-control input-sm" placeholder="IPK" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label ">Bahasa Pemrograman</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" rows="5" name="bahasa_program" placeholder="Bahasa yang diminati atau dikuasai"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label ">Bahasa Asing</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" rows="5" name="bahasa_asing" placeholder="Bahasa yang diminati atau dikuasai"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label ">Organisasi</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" rows="5" name="organisasi"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label ">Pekerjaan</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" rows="5" name="pekerjaan" placeholder=""></textarea>
                                                </div>
                                            </div>

                                            <!--nilai praktikum dan teori-->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label "></label>
                                                <div class="col-sm-6">
                                                    <font color="red" size="1px"> *isi nilai jika sudah mengambil</font>
                                                </div>
                                            </div>

                                            <?php
                                                    foreach($makul as $data) {
                                                ?>
                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"><?php echo $data->nama_makul; ?></label>
                                                <input type="hidden" name="id_makul[<?php echo $data->id_makul; ?>]" value="<?php echo $data->id_makul; ?>">
                                                <div class="col-sm-6">
                                                    <select name="id_masternilai[<?php echo $data->id_makul; ?>]" class="selectpicker" data-style="form-control btn-default btn-outline">
                                                        <option value=""> -Nilai <?php echo $data->nama_makul; ?> - </option>
                                                        <?php 
                                                      
                                                        foreach ($master as $data) {
                                                     
                                                    ?>
                                                        <option value="<?php echo $data->id_masternilai; ?>"> <?php echo $data->nama_nilai; ?> </option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Apakah memiliki sertifikasi ?</label>
                                                <div class="col-sm-6">
                                                    <select name="sertifikasi" class="selectpicker" data-style="form-control btn-default btn-outline" required>
                                                        <option value=""> - Sertifikasi - </option>
                                                        <option value="Y"> Ya </option>
                                                        <option value="N"> Tidak </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">Transkrip <font color="red" size="1px"> *PDF, max 300kb</font></label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="transkrip" id="example-input-small" class="form-control input-sm" placeholder="transkrip" required>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small">Foto
                                                    <font color="red" size="1px"> *(3x4) jpg, max300kb</font></label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="foto" id="example-input-small" class="form-control input-sm" placeholder="foto" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label "></label>
                                                <div class="col-sm-6">
                                                    <font color="red" size="1px"> sebelum mengirim pastikan IPK dan nilai sudah terisi dengan benar, karena akan mempengaruhi ke lulusan administrasi.</font>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label " for="example-input-small"></label>
                                                <div class="col-sm-6">
                                                    <button type="submit" class="btn btn-orange btn-anim"><i class="icon-rocket"></i><span class="btn-text">Kirim</span></button>
                                                    <button type="button" value="Go Back" onclick="history.back(-1)" class="btn btn-default">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

            <!-- Footer -->
            <footer class="footer pl-30 pr-30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>2019 &copy; Jurusan Teknik Informatika UPNVYK</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Follow Us</p>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->

    <?php include 'admin/jquery.php'; ?>
</body>

</html>
