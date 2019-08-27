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
                        <h5 class="txt-dark">Rincian Perhitungan</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"><span>rincian perhitungan</span></li>
                        </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->
 
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-1 col-sm-12">
                    </div>
                    <div class="col-lg-10 col-sm-12">
                        <div class="panel panel-default border-panel card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Custom Tab 2</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p class="text-muted"> Nama Peserta : <code><?= $pendaftar->nama_lengkap.' ('.$pendaftar->nim.')' ?></code>  </p>
                                    <div class="tab-struct custom-tab-2 mt-40">
                                        <ul role="tablist" class="nav nav-tabs" id="myTabs_15">
                                            <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="home_tab_15" href="#home_15">Administrasi</a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_15" role="tab" href="#profile_15" aria-expanded="false">Kompetensi</a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_15" role="tab" href="#konversi" aria-expanded="false">Konversi</a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_15" role="tab" href="#bobot" aria-expanded="false">Bobot</a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_15" role="tab" href="#hasil" aria-expanded="false">Hasil</a></li>
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
                                                                                        <label class="control-label col-md-3">IPK</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= round($pendaftar->ipk,2)?>" >

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Nilai</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= $nilai[0]->nilai?>">

                                                                                        </div>
                                                                                    </div>
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
                                                                                        <label class="control-label col-md-3">Pemrograman</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= empty($kompetensi->pemrograman)?0:round($kompetensi->pemrograman,2)?>">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Jaringan</label>
                                                                                        <div class="col-md-9">
                                                                                            <input readonly type="text" class="form-control" value="<?= empty($kompetensi->jaringan)?0:round($kompetensi->jaringan,2)?>">

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
                                            <div id="konversi" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default border-panel card-view">

                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-xs-12">
                                                                            <div class="form-wrap">
                                                                                <form class="form-horizontal">
                                                                                    <?php foreach ($aspek as $a){ ?>
                                                                                        <h6 class="txt-dark capitalize-font"><?= $a->nama_aspek?></h6>
                                                                                        <hr class="light-grey-hr">
                                                                                        <?php foreach ($a->kriteria as $k){ ?>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3"><?= $k['nama_kriteria']?></label>
                                                                                                <div class="col-md-9">
                                                                                                    <input readonly type="text" class="form-control" value="<?= $k['konversi'] ?>">
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php } ?>
                                                                                    <?php } ?>
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
                                            <div id="bobot" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default border-panel card-view">

                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-xs-12">
                                                                            <div class="form-wrap">
                                                                                <form class="form-horizontal">
                                                                                     <!--administrasi-->
                                                                                   <?php foreach ($aspek as $a){ ?>
                                                                                       <h6 class="txt-dark capitalize-font"><?= $a->nama_aspek?></h6>
                                                                                       <hr class="light-grey-hr">
                                                                                       <?php foreach ($a->kriteria as $k){ ?>
                                                                                           <div class="form-group">
                                                                                               <label class="control-label col-md-3"><?= $k['nama_kriteria']?></label>
                                                                                               <div class="col-md-9">
                                                                                                   <input readonly type="text" class="form-control" value="<?= "$k[konversi] * $k[eval] = $k[bobot]"?>">
                                                                                               </div>
                                                                                           </div>
                                                                                       <?php } ?>
                                                                                   <?php } ?>
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

                                            <div id="hasil" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default border-panel card-view">

                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-xs-12">
                                                                            <div class="form-wrap row">
                                                                                <div class="col-lg-4"></div>
                                                                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-15">
                                                                                <div class="panel panel-pricing mb-0">
                                                                                    <div class="panel-heading bg-orange-light-4">
                                                                                        <i class=" ti-bookmark-alt"></i>
                                                                                        <h6>Hasil </h6>
                                                                                        <span class="panel-price"><?= round($hasil,2)?></span>
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
