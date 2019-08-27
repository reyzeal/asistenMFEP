<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Halaman Administrator</title>
	<meta name="description" content="Splasher is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Splasher Admin, Splasheradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Data table CSS -->
	<link href="<?php echo base_url('assets/admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />

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

	<!-- Morris Charts CSS -->
	<link href="<?php echo base_url('assets/admin/vendors/bower_components/morris.js/morris.css') ?>" rel="stylesheet" type="text/css" />

	<!-- Chartist CSS -->
	<link href="<?php echo base_url('assets/admin/vendors/bower_components/chartist/dist/chartist.min.css') ?>" rel="stylesheet" type="text/css" />


	<!-- vector map CSS -->
	<link href="<?php echo base_url('assets/admin/vendors/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet" type="text/css" />

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/admin/demo-1/dist/css/style.css') ?>" rel="stylesheet" type="text/css">

	<!-- Jasny-bootstrap CSS -->
	<link href="<?php echo base_url('assets/admin/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')?>" rel="stylesheet" type="text/css" />


</head>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
			</div>

			<div class="modal-body">
				<p>Yakin akan menghapus?</p>
				<p class="debug-url"></p>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger btn-ok">Ya, Hapus</a>
			</div>
		</div>
	</div>
</div>
