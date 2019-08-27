<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <?php include 'menu.php'; ?>



    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Penilaian </h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('index.php/reviewer/')?>">Dashboard</a></li>
                        <li><a href="#"><span>form</span></a></li>
                        <li class="active"><span>Penilaian </span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>


            <!-- Row -->
            <div class="row">

                <div class="col-sm-12">
                    <div class="panel panel-default border-panel card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Form Penilaian </h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                  
                                    <form role="form" class="form-horizontal" method="post" action="<?php echo base_url('index.php/reviewer/insertPenilaian')?>">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-normal">Nama Lengkap </label>
                                            <div class="col-sm-6">
                                               <input type="hidden" name="id_reviewer" value=" <?php echo $this->session->userdata('id_reviewer') ?>" >
                                               <input type="hidden" name="id_pendaftaran" value=" <?php echo $pendaftaran->id_pendaftaran;  ?>" >
                                               <input type="hidden" name="id_aspek" value="<?php echo $as->id_aspek;  ?>" >
                                                <input type="text" id="example-input-normal" name="nama_lengkap" class="form-control" value="<?php echo $pendaftaran->nama_lengkap; ?>" required>
                                            </div>
                                        </div>


                                        <?php 
                                             foreach ($aspek as $data) {
                                            ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?php echo $data->nama_kriteria; ?></label>
                                            <div class="col-sm-6">
                                               
                                                <select name="nilai[<?php echo $data->id_kriteria;  ?>]" class="selectpicker" data-style="form-control btn-default btn-outline" required>
                                                    <option value=""> -Nilai- </option>
                                                    <option value="5"> Sangat Baik </option>
                                                    <option value="4"> Baik </option>
                                                    <option value="3"> Cukup Baik </option>
                                                    <option value="2"> Kurang Baik </option>
                                                    <option value="1"> Tidak Baik </option>
                                                </select>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-normal"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary btn-anim"><i class="icon-paper-plane"></i><span class="btn-text">Simpan</span></button>
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

        <?php include 'footer.php'; ?>

    </div>
    <!-- /Main Content -->
    </div>
    <?php include 'jquery.php'; ?>
</body>

</html>
