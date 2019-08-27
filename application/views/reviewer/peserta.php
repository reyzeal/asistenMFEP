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

                        <h6>Penilaian <?php
                                
                                echo $aspek->nama_aspek
                            ?>
                        </h6>
                        <br>
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
                                        <table id="example" class="table table-responsive table-hover display  pb-30">
                                            <thead>
                                                <tr>
                                                    <th>NIM</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>IPK</th>
                                                    <th>Mikro</th>
                                                    <th>Wawancara</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>NIM</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>IPK</th>
                                                    <th>Mikro</th>
                                                    <th>Wawancara</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                      
                                                        foreach ($pendaftar as $data) {
                                                     
                                                    ?>
                                                <tr>
                                                    <td><?php echo $data->nim; ?></td>
                                                    <td width="30%"><?php echo $data->nama_lengkap; ?></td>
                                                    <td width="20%"><?php echo $data->ipk; ?></td>
                                                    <td width="10%"><?php 
                                                            
                                                         if($data->microteaching != 0){
                                                             ?>
                                                             <span class='label label-success'>Sudah</span>
                                                             <?php
                                                         }else{
                                                             ?>
                                                            <span class='label label-danger'>Belum</span>

                                                             <?php
                                                         }
                                                        
                                                        ?></td>
                                                    <td width="10%"><?php 
                                                        if($data->wawancara != 0){
                                                             ?>
                                                             <span class='label label-success'>Sudah</span>
                                                             <?php
                                                         }else{
                                                             ?>
                                                            <span class='label label-danger'>Belum</span>

                                                             <?php
                                                         }
                                                        ?></td>
                                                    <td>
                                                        <?php
                                                            
                                                          
                                                            
                                                            if($aspek->id_aspek != 4 && $aspek->id_aspek !=5)
                                                            {
                                                                
                                                                $b_style = 'warning';
                                                                $b_text = 'Penilaian';
                                                                $url = 'index.php/reviewer/penilaian';
                                                                
                                                                  if($aspek->id_aspek == 6)
                                                                  {
                                                                        if($data->microteaching != 0)
                                                                        {
                                                                            $b_style = 'success';
                                                                            $b_text = 'Sudah';
                                                                            $url = 'index.php/reviewer/editPenilaian';
                                                                        }
                                                                }elseif($aspek->id_aspek == 7)
                                                                        {
                                                                            if($data->wawancara != 0)
                                                                        {
                                                                            $b_style = 'success';
                                                                            $b_text = 'Sudah';
                                                                            $url = 'index.php/reviewer/editPenilaian';
                                                                        }
                                                                        }
                                                                
                                                                
                                                              ?>  
                                                                
                                                                
                                                               
                                                        <a href="<?php echo base_url($url.'/'.$data->id_pendaftaran.'/'.$aspek->id_aspek) ?>"><button class="btn btn-<?=$b_style?> btn-anim btn-sm"><i class="fa fa-pencil"></i><span class="btn-text"><?=$b_text?></span></button></a>
                                                            <?php
                                                            }
                                                        
                                                            ?>
                                                       
                                                        <a href="<?php echo base_url('index.php/reviewer/detailpendaftaran/'.$data->id_pendaftaran) ?>"><button class="btn btn-info btn-anim btn-sm"><i class="fa fa-list"></i><span class="btn-text">Detail</span></button></a>
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
