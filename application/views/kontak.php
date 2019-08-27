<!doctype html>
<html class="no-js" lang="zxx">
   <?php include 'head.php'; ?>
   
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
		<!-- header start -->
		<?php include 'menu.php'; ?>
		<!-- header end -->
		<!-- breadcrumbs start -->
		<section class="breadcrumbs-area gray-bg ptb-100 port bread-card solid-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">Kontak Kami</h2>
                            <ul>
                                <li>
                                    <a class="active" href="#">Beranda</a>
                                </li>
                                <li>Kontak</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- breadcrumbs end -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-area-all">
                            <div id="hastech2"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="conract-area-bottom">
                            <h3 class="main-contact">Hubungi Kami</h3>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-input">
                                            <input name="name" placeholder="Name*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-input mrg-eml mrg-contact">
                                            <input name="email" placeholder="Email*" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="main-input mt-20 mb-20">
                                            <input name="subject" placeholder="Subject*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-leave2">
                                            <textarea name="message" placeholder="Type Your Massage......."></textarea>
                                            <button class="submit" type="submit">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- footer start -->
		<footer class="footer-bg ptb-70 gray-bg">
			<div class="footer-area">
				<div class="container">
					<div class="footer-info text-center">
						<div class="logo logo-style">
							<a href="index.html">MIAMI</a>
						</div>
						<div class="social-icon mt-20">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-skype"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom gray-bg pt-20">
				<div class="container">
					<div class="copyright text-center">
						<p>© 2017 <a href="https://freethemescloud.com/" target="_blank">Free themes Cloud</a>, All Rights Reserved.</p>
					</div>
				</div>
			</div>			
		</footer>
        <!-- footer end -->
        <!-- start scrollUp  -->
        <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div>
       
       
		<!-- all js here -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <!-- ajax-mail js -->
        <script src="js/ajax-mail.js"></script>
        <script src="js/plugins.js"></script>
        <script type="text/javascript">
            // grab an element
            var myElement = document.querySelector(".intelligent-header");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init(); 
        </script>		
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
        <script>
            var myCenter=new google.maps.LatLng(30.249796, -97.754667);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'',
                    map: map,
                  });
                var styles = [
                  {
                    stylers: [
                      { hue: "#c5c5c5" },
                      { saturation: -100 }
                    ]
                  },
                ];
                map.setOptions({styles: styles});
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="js/main.js"></script>
    </body>
</html>
