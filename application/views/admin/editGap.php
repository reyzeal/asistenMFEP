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
						  <h5 class="txt-dark">edit Gap</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
							<li><a href="#"><span>form</span></a></li>
							<li class="active"><span>edit-gap</span></li>
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
										<h6 class="panel-title txt-dark">Form edit gap</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form role="form" class="form-horizontal" method="post" action="<?php echo base_url('index.php/admin/updateGap')?>">
												                              
                                                <input type="hidden" name="id_gap" value="<?php echo $gap->id_gap; ?>">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Selisih</label>
                                                    <div class="col-sm-6">
                                                    <select name="selisih" class="selectpicker" data-style="form-control btn-default btn-outline" required>
                                                        <option value="<?php echo $gap->selisih; ?>"> <?php echo $gap->selisih; ?> </option>
                                                        <option value="0">  0   </option>
                                                        <option value="1">  1   </option>
                                                        <option value="-1"> -1  </option>
                                                        <option value="2">  2   </option>
                                                        <option value="-2"> -2  </option>
                                                        <option value="3">  3   </option>
                                                        <option value="-3"> -3  </option>
                                                        <option value="4">  4   </option>
                                                        <option value="-4"> -4  </option>
                                                    </select>
												</div>
												</div>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Bobot Nilai</label>
                                                    <div class="col-sm-6">
                                                    <select name="bobot" class="selectpicker" data-style="form-control btn-default btn-outline" required>
                                                       <option value="<?php echo $gap->bobot; ?>"> <?php echo $gap->bobot; ?> </option>
                                                        <option value="5 ">  5   </option>
                                                        <option value="4.5">  4.5   </option>
                                                        <option value="4"> 4  </option>
                                                        <option value="3.5">  3.5   </option>
                                                        <option value="3"> 3  </option>
                                                        <option value="2.5">  2.5   </option>
                                                        <option value="2"> 2  </option>
                                                        <option value="1.5">  1.5   </option>
                                                        <option value="5"> 5  </option>
                                                    </select>
												</div>
												</div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Keterangan</label>
                                                    <div class="col-sm-6">
                                                   <textarea name="keterangan" class="form-control"><?php echo $gap->keterangan; ?></textarea>
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