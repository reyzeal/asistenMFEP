<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>

<body>
   <?php include 'menu.php'; ?>

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container">
                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">Profil Peserta</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"><span>Profil Peserta</span></li>
                        </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->
 
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-sm-4">
            
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
														<img class="inline-block mb-10" src="<?php echo base_url('assets/'. $pendaftar->foto ) ?>" width="50%"/>
														
													</div>	
													<h5 class="block mt-10 weight-500 capitalize-font txt-dark"><?= $pendaftar->nama_lengkap ?></h5>
													<h6 class="block capitalize-font"><?= $pendaftar->nim ?></h6>
												</div>	
								            </div>
										</div>
									</div>
								</div>
							</div>
							
						
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="panel panel-default border-panel card-view">
                          
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                
                                    <div class="tab-struct custom-tab-2 mt-10">
                                        <ul role="tablist" class="nav nav-tabs" id="myTabs_15">
                                            <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="home_tab_15" href="#home_15">Profil</a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_15" role="tab" href="#profile_15" aria-expanded="false">Nilai Akademik</a></li>
                                            
                                        </ul>
                                        <div class="tab-content" id="myTabContent_15">
                                            <div id="home_15" class="tab-pane fade active in" role="tabpanel">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default border-panel card-view">

                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-xs-12">
                                                                            <div class="form-wrap">
                                                                                <form class="form-horizontal">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Nama Lengkap</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= ($pendaftar->nama_lengkap)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Nama Penggilan</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= ($pendaftar->nama_panggilan)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Tempat Lahir</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= ($pendaftar->temp_lahir)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Tanggal Lahir</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= ($pendaftar->tgl_lahir)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Agama</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= ($pendaftar->agama)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Alamat Rumah</label>
                                                                                        <div class="col-md-9">
                                                                                            <textarea readonly ><?= ($pendaftar->alamat_rumah)?></textarea>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Alamat Kos</label>
                                                                                        <div class="col-md-9">
                                                                                            <textarea readonly ><?= ($pendaftar->alamat_kos)?></textarea>

                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">No Hp</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= ($pendaftar->no_hp)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Email</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= ($pendaftar->email)?>" >

                                                                                        </div>
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
                                            <div id="profile_15" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default border-panel card-view">

                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-xs-12">
                                                                            <div class="form-wrap">
                                                                                <form class="form-horizontal">
                                                                                   <div class="form-group">
                                                                                    <label class="control-label col-md-3">IPK</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= round($pendaftar->ipk,2)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <?php foreach($nilai as $val) {?>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3"><?php echo $val->nama_makul ?></label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?php echo $val->nama_nilai ?>">

                                                                                        </div>
                                                                                    </div>
                                                                                    <?php  } ?>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Sertifikat</label>
                                                                                        <div class="col-sm-offset-0 col-sm-9">
                                                                                            <div class="checkbox checkbox-success">
                                                                                                <input id="checkbox_34" type="checkbox" <?= $pendaftar->sertifikasi=='Y'?'checked':NULL?> >
                                                                                                <label for="checkbox_34"></label>
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
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <br> <button type="button" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->
    <?php include 'jquery.php'; ?>
</body>

</html>
