<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mlaku.id | Tour Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Mlaku.id</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="places.php" class="nav-link">Destinasi Wisata</a></li>
	          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
	          <li class="nav-item active"><a href="Tour Guide.php" class="nav-link">Tour Guide</a></li>
	          <?php
              session_start();
              // Check if the user is already logged in, if yes then redirect him to welcome page
              if (isset($_SESSION["status"]) && $_SESSION["status"] =='login') {
                  echo  "<li class='nav-item'><a href='logout.php' class='nav-link'>Log out</a></li>";
              } else echo  "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>";
            	?>  
	        </ul>
	      </div>
	    </div> 
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Tour Guide</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">TOUR GUIDE</h1>
          </div>
        </div>
      </div>      
    </div>
 
		
	<section class="ftco-section">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-9">
          	<div class="row">
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Ade.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-link"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">  
				    						<h3><a href="#"> Ade Rachmaliani</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<span>10 Rating</span>
				    						</p>   
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rp 350.000<br><small>/Day</small></span>
		    							</div>
		    						</div>
		    						<p>Memudahkan Liburan Anad</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Malang</span> 
		    							<span class="ml-auto"><a href="MT-hotel.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/febrianto.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-link"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Febrianto Kurniawan</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rp 200.000<br><small>/Day</small></span>
		    							</div>
		    						</div>
		    						<p>Memudahkan liburan anda</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Malang</span> 
		    							<span class="ml-auto"><a href="MT-hotel.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Himawan.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-link"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Himawan Fuadi</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<i class="icon-star-o"></i>
				    							<span>6 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rp 200.000<br><small>/Day</small></span>
		    							</div>
		    						</div>
		    						<p>Memudahkan liburan anda</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Jepara</span> 
		    							<span class="ml-auto"><a href="MT-hotel.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Puja.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-link"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Puja Panindha</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<i class="icon-star-o"></i>
				    							<i class="icon-star-o"></i>
				    							<span>4 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rp 600.000<br><small>/Day</small></span>
		    							</div>
		    						</div>
		    						<p>Memudahkan Liburan anda</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Denpasar</span> 
		    							<span class="ml-auto"><a href="MT-hotel.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Kirana.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-link"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Kirana Zakira</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<i class="icon-star-o"></i>
				    							<span>6 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rp 200.000<br><small>/Day</small></span>
		    							</div>
		    						</div>
		    						<p>Memudahkan liburan anda</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Semarang</span> 
		    							<span class="ml-auto"><a href="MT-hotel.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Ghifari.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-link"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">M Ghifari Najmudin</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<i class="icon-star-o"></i>
				    							<i class="icon-star-o"></i>
				    							<i class="icon-star-o"></i>
				    							<span>2 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">Rp 350.000<br><small>/Day</small></span>
		    							</div>
		    						</div>
		    						<p>Memudahkan liburan anda</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Bandung</span> 
		    							<span class="ml-auto"><a href="MT-hotel.php">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    		</div>

          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li class="active"><a href="Tour Guide.php">&lt;</a></li> 
		                <li><a href="Tour Guide2.php">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section --> 

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mlaku.id</h2>
              <p>Memudahkan Liburan Anda</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          </div> 
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Surabya, Indonesia</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">0355 332750</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">mlaku@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>