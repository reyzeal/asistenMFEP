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
					  <h5 class="txt-dark">Aspek</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>aspek</span></li>
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
                                            <?php 
                                               if($this->session->flashdata('true')){
                                             ?>
                                                    <div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <?php  echo $this->session->flashdata('true'); ?>
                                                    </div>

                                                     <br>
                                            <?php }   
                                            else if($this->session->flashdata('err')){
                                            ?>
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  <?php echo $this->session->flashdata('err'); ?>
                                                    </div>     <br>

                                            <?php } ?>
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Nama Aspek</th>
														<th>Opsi</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>Nama Aspek</th>
														<th>Opsi</th>
													</tr>
												</tfoot>
												<tbody>
                                                    <?php 
                                                      
                                                        foreach ($aspek as $data) {
                                                     
                                                    ?>
													<tr>
														<td><?php echo $data->nama_aspek; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('index.php/admin/editAspek/'.$data->id_aspek) ?>"> <button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></a>
                                                            
                                                            
                                                        </td>
                                                        <?php } ?>
														</tr>
												</tbody>
											</table>
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
