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
                    <h5 class="txt-dark">Nilai Kompetensi</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>Data Pendaftar</span></a></li>
                        <li class="active"><span>Nilai Kompetensi</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->



            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default border-panel card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Form Nilai Kompetensi</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                         <form method="POST" action="<?php echo base_url('index.php/admin/insertKompetensi')?>">
                                        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">Nama Lengkap
                                                    </th>
                                                    <th class="th-sm">IPK
                                                    </th>
                                                    <th class="th-sm">Pemrograman
                                                    </th>
                                                    <th class="th-sm">Jaringan
                                                    </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                       foreach ($kompetensi as $data) {
                                                ?>
                                               
                                                <tr>
                                                    <td><?php echo $data->nama_lengkap; ?></td>
                                                    <td><?php echo $data->ipk; ?></td>
                                                    <td><input type="hidden" name="id_pendaftaran[<?php echo $data->id_pendaftaran; ?>]" value="<?php echo $data->id_pendaftaran; ?>"/>
                                                        <input type="text" name="pemrograman[]" 
                                                        <?php if($data->pemrograman =='NULL'){ ?> value="0" <?php }else{ ?> value="<?php echo $data->pemrograman; ?>" <?php } ?>/></td>
                                                    <td><input type="text" name="jaringan[]" <?php if($data->jaringan =='NULL'){ ?> value="0" <?php }else{ ?> value="<?php echo $data->jaringan; ?>" <?php } ?>/></td>
                                                    <?php } ?>
                                                </tr>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama Lengkap
                                                    </th>
                                                    <th>IPK
                                                    </th>
                                                    <th>Pemrograman
                                                    </th>
                                                    <th>Jaringan
                                                    </th>
                                                    
                                                </tr>
                                            </tfoot>
                                        </table>
                                              <button type="submit" class="btn btn-orange btn-anim"><i class="icon-rocket"></i><span class="btn-text">Simpan</span></button>
                                              <button type="button" value="Go Back" onclick="history.back(-1)" class="btn btn-default">Batal</button>
                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- Row -->

            <!-- /Row -->
        </div>

        <?php include 'footer.php';?>

    </div>
    <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <?php include 'jquery.php'; ?>
    <script>
        $(document).ready(function() {
            $('#dtVerticalScrollExample').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
            });
            $('.dataTables_length').addClass('bs-select');
        });

        $(document).ready(function() {
            $('#dtDynamicVerticalScrollExample').DataTable({
                "scrollY": "50vh",
                "scrollCollapse": true,
            });
            $('.dataTables_length').addClass('bs-select');
        });

    </script>

</body>

</html>
