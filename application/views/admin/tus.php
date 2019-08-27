<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Splasher I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Splasher is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Splasher Admin, Splasheradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap table CSS -->
    <link href="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap-table/dist/bootstrap-table.css')?>" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin/demo-1/dist/css/style.css')?>" rel="stylesheet" type="text/css">

</head>

<body>
    <?php include 'menu.php';?>


    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Bootstrap table</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>table</span></a></li>
                        <li class="active"><span>bootstrap table</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->


            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default border-panel card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Table with Checkbox Button</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <table id="table_js_2" data-click-to-select="true" data-select-item-name="myChk">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="stargazers_count" data-sortable="true">Stars</th>
                                                <th data-field="name" data-sortable="true">Name</th>
                                                <th data-field="forks_count" data-sortable="true">Forks</th>
                                                <th data-field="description" data-sortable="true">Description</th>
                                            </tr>
                                        </thead>
                                    </table>
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
                        <p>2018 &copy; Splasher. Pampered by Hencework</p>
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

    <!-- /#wrapper -->

    <!-- JavaScript -->
    <!-- jQuery -->
    <script>
        var data = [{
            "name": "bootstrap-table",
            "stargazers_count": "10",
            "forks_count": "122",
            "description": "An extended Bootstrap table"
        }, {
            "name": "multiple-select",
            "stargazers_count": "288",
            "forks_count": "20",
            "description": "A jQuery plugin to select multiple elements with checkboxes :)"
        }, {
            "name": "bootstrap-table",
            "stargazers_count": "32",
            "forks_count": "11",
            "description": "Show/hide password plugin for twitter bootstrap."
        }, {
            "name": "bootstrap-table",
            "stargazers_count": "1",
            "forks_count": "4",
            "description": "my blog"
        }, {
            "name": "scutech-redmine 1",
            "stargazers_count": "50",
            "forks_count": "3",
            "description": "Redmine notification tools for chrome extension."
        }];

    </script>
    <script src="<?php echo base_url('assets/admin/vendors/bower_components/jquery/dist/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>

    <!-- Bootstrap-table JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendors/bower_components/bootstrap-table/dist/bootstrap-table.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/demo-1/dist/js/bootstrap-table-data.js')?>"></script>

    <!-- Slimscroll JavaScript -->
    <script src="<?php echo base_url('assets/admin/demo-1/dist/js/jquery.slimscroll.js')?>"></script>

    <!-- Owl JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')?>"></script>

    <!-- Switchery JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendors/bower_components/switchery/dist/switchery.min.js')?>"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?php echo base_url('assets/admin/demo-1/dist/js/dropdown-bootstrap-extended.js')?>"></script>

    <!-- Init JavaScript -->
    <script src="<?php echo base_url('assets/admin/demo-1/dist/js/init.js')?>"></script>

</body>

</html>
