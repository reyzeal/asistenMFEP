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
						  <h5 class="txt-dark">tambah reviewer</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
							<li><a href="#"><span>form</span></a></li>
							<li class="active"><span>tambah-reviewer</span></li>
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
										<h6 class="panel-title txt-dark">Form tambah reviewer</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form role="form" class="form-horizontal" method="post" action="<?php echo base_url('index.php/admin/insertReviewer')?>">
												
												<div class="form-group">
													<label class="col-sm-3 control-label " for="example-input-normal">Nama Reviewer</label>
													<div class="col-sm-6">
														<input type="text" id="example-input-normal" name="nama" class="form-control" placeholder="Nama Reviewer">
													</div>
												</div>
                                                <div class="form-group">
													<label class="col-sm-3 control-label " for="example-input-normal">Jabatan Reviewer</label>
													<div class="col-sm-6">
														<input type="text" id="example-input-normal" name="jabatan" class="form-control" placeholder="Jabatan Reviewer">
													</div>
												</div>
                                                <div class="form-group">
													<label class="col-sm-3 control-label " for="example-input-normal">Username</label>
													<div class="col-sm-6">
														<input type="text" id="example-input-normal" name="username" class="form-control" placeholder="Username">
													</div>
												</div>
                                                <div class="form-group">
													<label class="col-sm-3 control-label " for="example-input-normal">Password</label>
													<div class="col-sm-6">
														<input type="password" id="example-input-normal" name="password" class="form-control" placeholder="Password">
													</div>
												</div>
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