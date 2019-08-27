<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <?php include 'menu.php'; 
    
    ?>

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container pt-30">
            <!-- Row -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view  pa-0">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body  pa-0">
                                        <div class="profile-box">
                                            <div class="profile-cover-pic">

                                                <div class="profile-image-overlay"></div>
                                            </div>
                                            <div class="profile-info text-center mb-15">
                                                <div class="profile-img-wrap">
                                                    <img class="inline-block mb-10" src="<?php echo base_url('assets/'.$pendaftar->foto )?>" alt="user" />

                                                </div>
                                                <h5 class="block mt-10 weight-500 capitalize-font txt-dark"><?php echo $pendaftar->nama_lengkap ?></h5>
                                                <h6 class="block capitalize-font"><?php echo $pendaftar->nim ?></h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--PANEL-->
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view pa-0">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body pb-0">
                                        <div class="tab-struct custom-tab-1">
                                            <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                                                <li class="active" role="presentation"><a data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>data profil</span></a></li>

                                                <li class="presentation" role="tab"><a data-toggle="tab" id="profile_tab_9" role="tab" href="#profile_9" aria-expanded="false"><span>Kemampuan</span></a></li>

                                                <li role="presentation" class="next"><a aria-expanded="true" data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>Nilai Kuliah<span class="inline-block"></span></span></a></li>

                                                <li role="presentation" class=""><a data-toggle="tab" id="earning_tab_8" role="tab" href="#earnings_8" aria-expanded="false"><span>Nilai Kompetensi</span></a></li>

                                            </ul>
                                            <div class="tab-content" id="myTabContent_8">
                                                <div id="profile_8" class="tab-pane fade active in" role="tabpanel">
                                                    <div class="col-md-12">
                                                        <div class="pt-20">
                                                            <div class="streamline user-activity">

                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Nama Lengkap</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->nama_lengkap ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Nama Panggilan</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->nama_panggilan ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">NIM</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->nim ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Tempat, Tanggal Lahir</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->temp_lahir ?>, <?php echo $pendaftar->tgl_lahir ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Agama</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->agama ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">No Telepon</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->no_hp ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Alamat Asal</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->alamat_rumah ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Alamat Domisili</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->alamat_kos ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Email</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->email ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br><br>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="profile_9" class="tab-pane fade" role="tabpanel">
                                                    <div class="col-md-12">
                                                        <div class="pt-20">
                                                            <div class="streamline user-activity">

                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">IPK</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->ipk ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Bahasa Asing</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->bahasa_asing ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Bahasa Pemrograman</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->bahasa_program ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Sertifikat</label>
                                                                            <div class="col-md-8">
                                                                                <?php if($pendaftar->sertifikasi == 'Y'){ echo "Mempunyai Sertifikat Keahlian";}else{
                                                                                    echo "Tidak Mempunyai Sertifikat Keahlian";
                                                                                } ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Organisasi</label>
                                                                            <div class="col-md-8">
                                                                                <?php echo $pendaftar->organisasi ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <br><br>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="follo_8" class="tab-pane fade" role="tabpanel">
                                                <div class="row">

                                                    <div class="col-lg-8">
                                                        <form id="example-advanced-form" action="#">
                                                            <div class="table-wrap">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped display product-overview" id="datable_1">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nama Matakuliah</th>
                                                                                <th>Nilai</th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                           <?php
														foreach($nilai as $data){
														?>
                                                                            <tr>
                                                                                <td><?php echo $data->nama_makul; ?></td>
                                                                                <td><?php echo $data->nama_nilai; ?></td>
                                                                                <?php } ?>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>


                                            <div id="earnings_8" class="tab-pane fade" role="tabpanel">
                                                <!-- Row -->
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <form id="example-advanced-form" action="#">
                                                            <div class="table-wrap">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped display product-overview" id="datable_1">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Pemrograman</th>
                                                                                <th>Jaringan</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    3
                                                                                </td>
                                                                                <td>$400</td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="settings_8" class="tab-pane fade" role="tabpanel">
                                                <!-- Row -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="">
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body pa-0">
                                                                    <div class="col-sm-12 col-xs-12">
                                                                        <div class="form-wrap">
                                                                            <form action="#">
                                                                                <div class="form-body overflow-hide">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10" for="exampleInputuname_01">Name</label>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                                            <input type="text" class="form-control" id="exampleInputuname_01" placeholder="willard bryant">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10" for="exampleInputEmail_01">Email address</label>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                                            <input type="email" class="form-control" id="exampleInputEmail_01" placeholder="xyz@gmail.com">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10" for="exampleInputContact_01">Contact number</label>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                                                            <input type="email" class="form-control" id="exampleInputContact_01" placeholder="+102 9388333">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10" for="exampleInputpwd_01">Password</label>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                                            <input type="password" class="form-control" id="exampleInputpwd_01" placeholder="Enter pwd" value="password">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10">Gender</label>
                                                                                        <div>
                                                                                            <div class="radio">
                                                                                                <input type="radio" name="radio1" id="radio_01" value="option1" checked="">
                                                                                                <label for="radio_01">
                                                                                                    M
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <input type="radio" name="radio1" id="radio_02" value="option2">
                                                                                                <label for="radio_02">
                                                                                                    F
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10">Country</label>
                                                                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                            <option value="Category 1">USA</option>
                                                                                            <option value="Category 2">Austrailia</option>
                                                                                            <option value="Category 3">India</option>
                                                                                            <option value="Category 4">UK</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions mt-10">
                                                                                    <button type="submit" class="btn btn-default mr-10 mb-30">Update profile</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- /Footer -->

    </div>
    <!-- /#wrapper -->
    <?php include 'jquery.php'; ?>
</body>

</html>