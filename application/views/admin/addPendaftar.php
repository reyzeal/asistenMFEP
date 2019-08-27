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
						  <h5 class="txt-dark">tambah pendaftar</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="<?php echo base_url('index.php/admin/')?>">Dashboard</a></li>
							<li><a href="#"><span>form</span></a></li>
							<li class="active"><span>tambah-pendaftar</span></li>
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
									<h6 class="panel-title txt-dark">Form Pendftaran</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="form-wrap">
										<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/Laboratorium/insertdaftar')?>">

											<?php 
                                                      foreach ($sesi as $data) {
                                                   ?>
											<input type="hidden" name="id_sesi" value="<?php echo $data->id_sesi; ?>">
											<?php } ?>

											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">NIM</label>
												<div class="col-sm-6">
													<input type="text" name="nim" id="example-input-small" class="form-control input-sm" placeholder="NIM" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">Nama Lengkap</label>
												<div class="col-sm-6">
													<input type="text" name="nama_lengkap" id="example-input-small" class="form-control input-sm" placeholder="Nama Lengkap" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">Nama Panggilan</label>
												<div class="col-sm-6">
													<input type="text" name="nama_panggilan" id="example-input-small" class="form-control input-sm" placeholder="Nama Panggilan" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">Tempat/ Tanggal Lahir</label>
												<div class="col-sm-3">
													<input type="text" name="temp_lahir" id="example-input-small" class="form-control input-sm" placeholder="Tempat Lahir">
												</div>
												<div class="col-sm-3">
													<input type="date" name="tgl_lahir" id="example-input-small" class="form-control input-sm" placeholder="Tempat Lahir" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">Agama</label>
												<div class="col-sm-6">
													<input type="text" name="agama" id="example-input-small" class="form-control input-sm" placeholder="agama" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label ">Alamat Rumah</label>
												<div class="col-sm-6">
													<textarea class="form-control" rows="5" name="alamat_rumah"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label ">Alamat Kos</label>
												<div class="col-sm-6">
													<textarea class="form-control" rows="5" name="alamat_kos" required></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">No Hp</label>
												<div class="col-sm-6">
													<input type="text" name="no_hp" id="example-input-small" class="form-control input-sm" placeholder="No Hp" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">Email</label>
												<div class="col-sm-6">
													<input type="email" name="email" id="example-input-small" class="form-control input-sm" placeholder="Email">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">IPK</label>
												<div class="col-sm-6">
													<input type="text" required name="ipk" id="example-input-small" class="form-control input-sm" placeholder="IPK" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label ">Bahasa Pemrograman</label>
												<div class="col-sm-6">
													<textarea class="form-control" rows="5" name="bahasa_program" placeholder="Bahasa yang diminati atau dikuasai" ></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label ">Bahasa Asing</label>
												<div class="col-sm-6">
													<textarea class="form-control" rows="5" name="bahasa_asing" placeholder="Bahasa yang diminati atau dikuasai"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label ">Organisasi</label>
												<div class="col-sm-6">
													<textarea class="form-control" rows="5" name="organisasi"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label ">Pekerjaan</label>
												<div class="col-sm-6">
													<textarea class="form-control" rows="5" name="pekerjaan" placeholder=""></textarea>
												</div>
											</div>

											<!--nilai praktikum dan teori-->
											<div class="form-group">
												<label class="col-sm-3 control-label "></label>
												<div class="col-sm-6">
													<font color="red" size="1px"> *isi nilai jika sudah mengambil</font>
												</div>
											</div>

											<?php
                                                    foreach($makul as $data) {
                                                ?>
											<div class="form-group">

												<label class="col-sm-3 control-label"><?php echo $data->nama_makul; ?></label>
												<input type="hidden" name="id_makul[<?php echo $data->id_makul; ?>]" value="<?php echo $data->id_makul; ?>">
												<div class="col-sm-6">
													<select name="id_masternilai[<?php echo $data->id_makul; ?>]" class="selectpicker" data-style="form-control btn-default btn-outline">
														<option value=""> -Nilai <?php echo $data->nama_makul; ?> - </option>
														<?php 
                                                      
                                                        foreach ($master as $data) {
                                                     
                                                    ?>
														<option value="<?php echo $data->id_masternilai; ?>"> <?php echo $data->nama_nilai; ?> </option>
														<?php } ?>

													</select>
												</div>
											</div>
											<?php } ?>
											<div class="form-group">

												<label class="col-sm-3 control-label">Apakah memiliki sertifikasi ?</label>
												<div class="col-sm-6">
													<select name="sertifikasi" class="selectpicker" data-style="form-control btn-default btn-outline" required>
														<option value=""> - Sertifikasi - </option>
														<option value="Y"> Ya </option>
														<option value="N"> Tidak </option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">Transkrip <font color="red" size="1px"> *PDF, max 300kb</font></label>
												<div class="col-sm-6">
													<input type="file" name="transkrip" id="example-input-small" class="form-control input-sm" placeholder="transkrip" required>

												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small">Foto
													<font color="red" size="1px"> *(3x4) jpg, max300kb</font></label>
												<div class="col-sm-6">
													<input type="file" name="foto" id="example-input-small" class="form-control input-sm" placeholder="foto" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label " for="example-input-small"></label>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-orange btn-anim"><i class="icon-rocket"></i><span class="btn-text">Simpan</span></button>
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