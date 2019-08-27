<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>

<body>
    <?php include 'menu.php'; ?>



    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container pt-30">
            <!-- Row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <?php 
                           foreach ($aspek as $data) {
                         ?>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default card-view pa-0">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body pa-0">
                                        <div class="sm-data-box">
                                            <div class="container-fluid">
                                               <a href="<?php echo base_url('index.php/reviewer/peserta/'.$data->id_aspek) ?>">
                                                <div class="row">
                                                    <div class="col-xs-6 data-wrap-left">
                                                        <span class="capitalize-font block">Aspek</span>
                                                        <h4><?php echo $data->nama_aspek; ?></h4>
                                                    </div>
                                                    <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                        <i class="zmdi zmdi-bookmark data-right-rep-icon bg-grad-info"></i>
                                                    </div>
                                                </div>
                                                </a>
                                                <div class="progress-anim">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-grad-success 
															wow animated progress-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel panel-default border-panel-reverse card-reverse card-view bg-grad-danger">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-light">Hot Deal</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="sm-data-box-4 with-icon">
                                            <div class="relative">
                                                <div class="data-wrap-left">
                                                    <i class="icon-fire txt-light font-24"></i>
                                                </div>
                                                <div class="data-wrap-right txt-light">
                                                    <p>Use this deal code to get up to 15000 instant Discount. Hurry off ending soon! </p>
                                                    <div class="pt-15 uppercase-font">
                                                        <span>Use code :</span><span>TRES15</span>
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

        <!-- /Main Content -->

    </div>
    <?php include 'jquery.php'; ?>
</body>

</html>
