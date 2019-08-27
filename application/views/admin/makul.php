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
					  <h5 class="txt-dark">Syarat Matakuliah</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>syarat-matakuliah</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
                       
                        <div class="panel panel-default card-view">
                            
                            <a href="<?php echo base_url('index.php/admin/addMakul') ?>"><button class="btn btn-orange btn-icon btn-sm left-icon"> <i class="fa fa-plus"></i> <span>Tambah</span></button></a><br><br>
                            
                            </div>
                      
                        </div>
                    
                </div>
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
														<th>Nama Kriteria</th>
														<th>Nama Matakuliah</th>
														<th>Opsi</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>Nama Kriteria</th>
														<th>Nama Matakuliah</th>
														<th>Opsi</th>
													</tr>
												</tfoot>
												<tbody>
                                                    <?php 
                                                      
                                                        foreach ($makul as $data) {
                                                     
                                                    ?>
													<tr>
														<td><?php echo $data->nama_kriteria; ?></td>
														<td><?php echo $data->nama_makul; ?></td>
														<td>
                                                            <a href="<?php echo base_url('index.php/admin/editMakul/'.$data->id_makul) ?>"> <button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></a>
                                                            
                                                            <button class="btn btn-info btn-icon-anim btn-circle" data-href="<?php echo base_url('index.php/admin/hapusMakul/'.$data->id_makul) ?>" data-toggle="modal" data-target="#confirm-delete">
                                                            <i class="icon-trash"></i>
                                                            </button>
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
