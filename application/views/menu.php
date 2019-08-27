 <header>
        <div class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <img src="<?php echo base_url('assets/user/img/bg/logolab.png')?>" class="image-responsive" width="90%">
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="main-menu text-right">
                            <nav>
                                <ul class="menu">
                                    <li><a href="<?php echo base_url('index.php/laboratorium/index')?>">BERANDA</a>
                                    </li>
                                    <li><a href="<?php echo base_url('index.php/laboratorium/pengumuman')?>">PENGUMUMAN</a></li>
                                    <?php if(!empty($sesi->nama_sesi)){?>
                                    <li><a href="<?php echo base_url('index.php/laboratorium/formdaftar')?>">DAFTAR</a>
                                    <?PHP } ?>
                                    <li><a href="<?php echo base_url('index.php/laboratorium/kontak')?>">KONTAK</a></li>
                                    <li><a href="#">Login <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										    <ul>
												<li><a href="<?php echo base_url('index.php/LoginReviewer')?>">Reviewer</a></li>
												<li><a href="<?php echo base_url('index.php/LoginAdmin')?>">Laboran</a></li>
											</ul>
										</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>