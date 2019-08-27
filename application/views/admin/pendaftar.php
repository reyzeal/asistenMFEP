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
					<h5 class="txt-dark">Data Pendaftar</h5>
				</div>
				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>Data Pendaftar</span></li>
					</ol>
				</div>
				<!-- /Breadcrumb -->
			</div>
			<!-- /Title -->

			<!-- Row -->
			<div class="row">
				<div class="col-sm-12">

					<div class="panel panel-default card-view">

						<a href="<?php echo base_url('index.php/admin/addPendaftar') ?>"><button class="btn btn-orange btn-icon btn-sm left-icon"> <i class="fa fa-plus"></i> <span>Tambah</span></button></a><br><br>

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
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <?php echo $this->session->flashdata('err'); ?>
										</div> <br>

										<?php } ?>
										<table id="example" class="table table-hover display  pb-30">
											<thead>
												<tr>
													<th>NIM</th>
													<th>Nama Lengkap</th>
													<th>IPK</th>
													<th>Bahasa Pemrograman</th>
													<th>Sertifikasi</th>
													<th>Keterangan</th>
													<th>Opsi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>NIM</th>
													<th>Nama Lengkap</th>
													<th>IPK</th>
													<th>Bahasa Pemrograman</th>
													<th>Sertifikasi</th>
													<th>Keterangan</th>
													<th>Opsi</th>
												</tr>
											</tfoot>
											<tbody>
												<?php 
                                                      
                                                        foreach ($pendaftar as $data) {
                                                     
                                                    ?>
												<tr>
													<td><?php echo $data->nim; ?></td>
													<td><?php echo $data->nama_lengkap; ?></td>
													<td><?php echo $data->ipk; ?></td>
													<td><?php echo $data->bahasa_program; ?></td>
													<td><?php if($data->sertifikasi == 'Y'){echo "Ada";}else {echo "Tidak Ada";} ?></td>
													<td><?php if($data->status == 'Lolos'){
                                                        ?>
														<a href="<?php echo base_url('index.php/admin/detail_perhitungan/'.$data->id_pendaftaran) ?>"><span class='label label-success'>Lolos</span></a>
                                                        
                                                        <?php
                                                    } else{ echo "<span class='label label-danger'>Tidak Lolos</span>";
													}?></td>
													<td>
														<a href="<?php echo base_url('index.php/admin/detailpendaftaran/'.$data->id_pendaftaran) ?>"> <button class="btn btn-warning btn-icon-anim btn-circle"><i class="fa fa-list"></i></button></a>

														<a href="<?php echo base_url('index.php/admin/editPendaftar/'.$data->id_pendaftaran) ?>"> <button class="btn btn-primary btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></a>

														<button class="btn btn-info btn-icon-anim btn-circle" data-href="<?php echo base_url('index.php/admin/hapusPendaftarn/'.$data->id_pendaftaran) ?>" data-toggle="modal" data-target="#confirm-delete">
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
