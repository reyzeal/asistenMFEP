<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script language="javascript">
    $(function() {
        // TWEAK by reyzeal
        // Fungsi Checkbox Pilih Semua
        $("#pilihsemua").click(function() { // Jika Checkbox Pilih Semua di ceklis maka semua sub checkbox akan diceklis juga
            if(this.checked) $('.pilih').prop('checked',true);
            else $('.pilih').removeAttr('checked');
        });

        // Jika semua sub checkbox diceklis maka Checkbox Pilih Semua akan diceklis juga
        $(".pilih").click(function() {

            if ($(".pilih").length == $(".pilih:checked").length) {
                $("#pilihsemua").prop("checked", "checked");
            } else {
                $("#pilihsemua").removeAttr("checked");
            }

        });
    });

</script>

<body>
    <?php include 'menu.php'; ?>

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Generate Nilai</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
                        <li><a href="#"><span>table</span></a></li>
                        <li class="active"><span>Generate Nilai</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
           
            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pt-0">

                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        
                                        <div id="main" align="center">
                                        <form method="post" action="<?php echo base_url('index.php/admin/generate')?>">
                                           
                                            <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" >
                                               <thead>
													<tr>
														<th  align="center"><input type="checkbox" id="pilihsemua"></th>
														<th>NIM</th>
														<th>Nama Lengkap</th>
														<th>IPK</th>
														<th>Status</th>
														<th>Total Nilai PF</th>
														<th>Total Nilai MF</th>
													</tr>
												</thead>
                                               <tbody>
                                                <tr>
                                                   <?php 
                                                      
                                                        foreach ($pendaftar as $data) {
                                                     
                                                    ?>
                                                    <td><input type="checkbox" class="pilih" name="id_pendaftar[]" value="<?= $data->id_pendaftaran ?>" /></td>
                                                    <td><?php echo $data->nim ?></td>
                                                    <td><?php echo $data->nama_lengkap ?></td>
                                                    <td><?php echo $data->ipk ?></td>
                                                    <td>
                                                        <?php if($data->status_generate == 'Sudah'){
                                                        ?>
														<a href="<?php echo base_url('index.php/admin/detail_perhitungan/'.$data->id_pendaftaran) ?>"><span class='label label-success'>Sudah</span></a>
                                                        
                                                        <?php
                                                    } else{ ?><a href="<?php echo base_url('index.php/admin/detail_perhitungan/'.$data->id_pendaftaran) ?>"><span class='label label-danger'>Belum</span></a>
													<?php } ?>
                                                    </td>
                                                    <td><?php echo  round($data->total_pf,2)?></td>
                                                    <td><?php echo  round($data->total_mf,2)?></td>

                                                </tr>
                                                  <?php } ?>
                                                </tbody>
                                            </table>
                                            <button type="submit" class="btn btn-orange btn-anim"><i class="icon-rocket"></i><span class="btn-text">Generate</span></button>
                                            </form>
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

    <!-- /#wrapper -->

    <?php include 'jquery.php'; ?>

</body>

</html>
