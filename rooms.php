<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Harborlights - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">

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

	<?php require('admin\inc\essentials.php'); ?>
    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\db_config.php');?>

  </head>
  <body>

	<nav class="navbar navbar-expand-lg  navbar-light" id="ftco-navbar" style="margin-top: -20px;">
		<div class="container"style="background-color: transparent; backdrop-filter: blur(1.5px);">
			  <a class="navbar-brand" href="index.html" ><span></span>
			  <div class="brand-logo-wrapper custom-logo">
				  <img class="taj-image" 
				  src="frontend photos/taj logo.png" 
				  alt="Taj Hotels logo" 
				  style="margin-top: 12px; width: 95px; height: 35px; background-color: transparent; backdrop-filter: blur(1.5px); flex: 0 0 100%; max-width: 50%; object-fit: contain;"> 
			    </div>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>
  
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="index.html" class="nav-link" style="margin-top: 15px; "><b>Home</b></a></li>
						<li class="nav-item"><a href="rooms.php" class="nav-link" style="margin-top: 15px;"><b>Our Rooms</b></a></a></li>
						<li class="nav-item"><a href="restaurant.html" class="nav-link" style="margin-top: 15px;"><b>Special Accomodation</b></a></li>
						<li class="nav-item"><a href="about.php" class="nav-link" style="margin-top: 15px;"><b>About Us</b></a></li>
						<li class="nav-item"><a href="blog.html" class="nav-link" style="margin-top: 15px;"><b>Blog</b></a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link" style="margin-top: 15px;"><b>Contact</b></a></li>
					</ul>
					<div class="flex-container d-flex">
						<button type="button" class="btn btn-primary rounded shadow-none me-lg-3 me-2" onclick="window.location.href='login.html'"  style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751); margin-top: 15px; padding: 0 0.875rem; margin-left: 10px; height: 34px;">
							Login
						</button>
						<button type="button" class="btn btn-outline-light  rounded shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal" style="color:white;background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751); margin-top: 15px; padding: 0 0.875rem; margin-left: 20px; height:34px;">
							Register
						</button>
					</div>
				</div>
			</div>
		</div>
	</nav>

    <!-- END nav -->
		<div class="hero-wrap" style="background-image: url('frontend\ photos/or2.jpg');">
			<div class="container">
				<div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
					<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
						<div class="text">
							<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Restaurant</span></p>
							<h1 class="mb-4 bread" >Rooms</h1>
						</div>
					</div>
				</div>
      		</div>
    	</div>

		<?php 
			$contact_q="SELECT * FROM `contact_details` WHERE `sr_no`=?";
			$values=[1];
			$contact_r=mysqli_fetch_assoc(select($contact_q,$values,'i'));
			// print_r($contact_r);
		?>

		<section class="ftco-section ftco-no-pb ftco-room">
			<div class="container-fluid px-0">
				<div class="row no-gutters justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading"style="color:#D29751;">Taj Rooms</span>
						<h2 class="mb-4">Hotel Rooms</h2>
					</div>
				</div>  
				<div class="row no-gutters">
					<div class="col-lg-6">
						<div class="room-wrap d-md-flex ftco-animate" style="background-color: #efd9bf;">
							<a href="#" class="img" style="background-image: url(frontend\ photos/rrom1.jpg);"></a>
								<div class="half left-arrow d-flex align-items-center">
									<div class="text p-4 text-center">
										<p class="star mb-0"style="color:#D29751;"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
										<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
										<h3 class="mb-3"><a href="rooms.html">King Room</a></h3>
										<!-- <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p> -->
										<a href="rooms-single.php" class="btn-custom px-3 py-2 rounded" style="background-color:#D29751;color:white;" >Book Now</a>

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="room-wrap d-md-flex ftco-animate">
								<a href="#" class="img" style="background-image: url(frontend\ photos/room4.jpg);"></a>
								<div class="half left-arrow d-flex align-items-center"style="background-color: #efd9bf;">
									<div class="text p-4 text-center">
										<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
										<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
										<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
										<!-- <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p> -->
										<a href="rooms-single.php" class="btn-custom px-3 py-2 rounded" style="background-color:#D29751;color:white;" >Book Now</a>

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="room-wrap d-md-flex ftco-animate">
								<a href="#" class="img order-md-last" style="background-image: url(frontend\ photos/room15.jpg);"></a>
								<div class="half right-arrow d-flex align-items-center"style="background-color: #efd9bf;">
									<div class="text p-4 text-center">
										<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
										<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
										<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
										<p class="pt-1">
											<!-- <a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details  -->
											<a href="rooms-single.php" class="btn-custom px-3 py-2 rounded" style="background-color:#D29751;color:white;" >Book Now</a>

												<span class="icon-long-arrow-right"></span>
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="room-wrap d-md-flex ftco-animate">
								<a href="#" class="img order-md-last" style="background-image: url(frontend\ photos/room11.jpg);"></a>
								<div class="half right-arrow d-flex align-items-center"style="background-color: #efd9bf;">
									<div class="text p-4 text-center">
										<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
										<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
										<h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
										<!-- <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p> -->
										<a href="rooms-single.php" class="btn-custom px-3 py-2 rounded" style="background-color:#D29751;color:white;" >Book Now</a>

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="room-wrap d-md-flex ftco-animate">
								<a href="#" class="img" style="background-image: url(frontend\ photos/room7.jpg);"></a>
								<div class="half left-arrow d-flex align-items-center"style="background-color: #efd9bf;">
									<div class="text p-4 text-center">
										<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
										<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
										<h3 class="mb-3"><a href="rooms.html">Luxury Room</a></h3>
										<!-- <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details  -->
										<a href="rooms-single.php" class="btn-custom px-3 py-2 rounded" style="background-color:#D29751;color:white;" >Book Now</a>

											<span class="icon-long-arrow-right"></span></a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="room-wrap d-md-flex ftco-animate">
								<a href="#" class="img" style="background-image: url(frontend\ photos/room12.jpg);"></a>
								<div class="half left-arrow d-flex align-items-center"style="background-color: #efd9bf;">
									<div class="text p-4 text-center">
										<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
										<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
										<h3 class="mb-3"><a href="rooms.html">Superior Room</a></h3>
										<!-- <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details  -->
										<a href="rooms-single.php" class="btn-custom px-3 py-2 rounded" style="background-color:#D29751;color:white;" >Book Now</a>

											<span class="icon-long-arrow-right"></span></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</section>

		<!-- <footer> -->
		<footer class="foo ftco-footer ftco-section img" style="background-color: #444;" ><!-- style="background-image: url(images/bg_4.jpg);" -->
			<div class="container">
					<div class="row mb-5">
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Taj Hotel</h2>
								<p >Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
									<li class="ftco-animate"><a href=""><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="<?php echo $contact_r['fb']?>"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="<?php echo $contact_r['insta']?>"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Useful Links</h2>
							<ul class="list-unstyled">
								<li><a href="blog.html" class="py-2 d-block">Blog</a></li>
								<li><a href="rooms.html" class="py-2 d-block">Rooms</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Privacy</h2>
							<ul class="list-unstyled">
								<!-- <li><a href="#" class="py-2 d-block">Career</a></li> -->
								<li><a href="#" class="py-2 d-block">About Us</a></li>
								<li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
								<!-- <li><a href="#" class="py-2 d-block">Services</a></li> -->
							</ul>
						</div>
					</div>
					<div class="foo col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Have a Questions?</h2>
								<div class="block-23 mb-3"></ul>
									<li><a href="<?php echo $contact_r['address']?>">
					<span class="icon icon-map-marker"></span><span class="text"> <?php echo $contact_r['address']?></span></li>
										
						<li><a href="<?php echo $contact_r['pn1']?>"><span class="icon icon-phone"></span><span class="text"> +<?php echo $contact_r['pn1']?></span></a></li>
						<li><a href="<?php echo $contact_r['pn2']?>"><span class="icon icon-phone"></span><span class="text"> +<?php echo $contact_r['pn2']?></span></a></li>

						<li><a href="malito <?php echo $contact_r['email']?>"><span class="icon icon-envelope"></span><span class="text"> <?php echo $contact_r['email']?></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		

		<style>
			.foo{
				color:black;
			}
			.text {
					width: 100%;
					color:black;
			
					h2 {
						color: #fff;
						font-size: 40px;
					}
			
					p {
						color: rgba(255, 255, 255, 0.9);
					}
			
					h3 {
						font-size: 30px;
						margin-bottom: 5px;
						color:black;
			
						a {
							color: #000;
						}
					}
			
					span.price {
						font-size: 26px;
						color: white;
						position: relative;
					}
			
					span.per {
						font-size: 14px;
						color: lighten(#000, 40%);
					}
			
					.btn-custom {
						display: inline-block;
						color: #000;
						border: 2px solid rgba(0, 0, 0, 0.1);
					}
				}
		</style>
	</body>
</html>
