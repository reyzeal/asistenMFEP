<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/boottstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/fontawesome-all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/iofrm-style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/iofrm-theme4.css')?>">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <img  src="<?php echo base_url('assets/user/img/bg/logolab.png')?>"  alt="">
       
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="<?php echo base_url('assets/user/img/team/graphic1.svg')?>" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                         <p>Lakukan login untuk masuk kedalam sistem</p>
                        <div class="page-links">
                            <a href="#" class="active">Login Reviewer</a>
                        </div>
                        <form action="<?php echo base_url('index.php/loginReviewer/proseslogin');?>" method="post">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url('assets/user/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/user/js/popper.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/user/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/user/js/main.js')?>"></script>
</body>
</html>