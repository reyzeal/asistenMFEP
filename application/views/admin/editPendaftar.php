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
                    <h5 class="txt-dark">edit pendaftar</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
                        <li><a href="#"><span>form</span></a></li>
                        <li class="active"><span>edit-pendaftar</span></li>
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
                                <h6 class="panel-title txt-dark">Form Pendftaran</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/admin/updatependaftar')?>">

                                        <input type="hidden" name="id_sesi" value="<?php echo $pendaftar->id_sesi; ?>">
                                        <input type="text" name="id_pendaftaran" value="<?php echo $pendaftar->id_pendaftaran; ?>">


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">NIM</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="nim" id="example-input-small" class="form-control input-sm" placeholder="NIM" value="<?php echo $pendaftar->nim; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">Nama Lengkap</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="nama_lengkap" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->nama_lengkap; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">Nama Panggilan</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="nama_panggilan" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->nama_panggilan; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">Tempat/ Tanggal Lahir</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="temp_lahir" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->temp_lahir; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="date" name="tgl_lahir" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->tgl_lahir; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">Agama</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="agama" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->agama; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label ">Alamat Rumah</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" name="alamat_rumah"><?php echo $pendaftar->alamat_rumah; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label ">Alamat Kos</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" name="alamat_kos" required><?php echo $pendaftar->alamat_kos; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">No Hp</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="no_hp" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->no_hp; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">Email</label>
                                            <div class="col-sm-6">
                                                <input type="email" name="email" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->email; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">IPK</label>
                                            <div class="col-sm-6">
                                                <input type="text" required name="ipk" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->ipk; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label ">Bahasa Pemrograman</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" name="bahasa_program"><?php echo $pendaftar->bahasa_program; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label ">Bahasa Asing</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" name="bahasa_asing"><?php echo $pendaftar->bahasa_asing; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label ">Organisasi</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" name="organisasi"><?php echo $pendaftar->organisasi; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label ">Pekerjaan</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" name="pekerjaan"><?php echo $pendaftar->pekerjaan; ?></textarea>
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
                                                    <option value="<?php echo $pendaftar->sertifikasi; ?>">
                                                    <?php if($pendaftar->sertifikasi=='Y')
                                                    { echo "Ya"; } else { echo "Tidak";}?></option>
                                                    
                                                    <?php if($pendaftar->sertifikasi=='N')
                                                    {?>
                                                    <option value="Y"> Ya </option><?php } 
                                                       if($pendaftar->sertifikasi=='Y') {?>
                                                    <option value="N"> Tidak </option> <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">Transkrip <font color="red" size="1px"> *PDF, max 300kb</font></label>
                                            <div class="col-sm-6">
                                               <input class="form-control"  type="file" name="transkrip" >
                                                <input type="hidden" name="transkrip" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->transkrip; ?>" required>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small">Foto
                                                <font color="red" size="1px"> *(3x4) jpg, max300kb</font></label>
                                            <div class="col-sm-6">
                                               <input class="form-control"  type="file" name="foto" >
                                                <input type="hidden" name="foto" id="example-input-small" class="form-control input-sm" value="<?php echo $pendaftar->foto; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label " for="example-input-small"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-orange btn-anim"><i class="icon-rocket"></i><span class="btn-text">Simpan</span></button>
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
