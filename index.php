<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Taj Hotel</title>
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
  </head>
  <body>

	<!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 header-inner-wrap"></div> -->
	<nav id="nav-bar" class="navbar navbar-expand-lg  navbar-light" id="ftco-navbar" style="margin-top: -20px;">
	  <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="margin-top: -20px;"> -->
	    <div class="container"style="background-color: transparent; backdrop-filter: blur(1.5px);">
			<a class="navbar-brand" href="index.html" ><span></span>
			<div class="brand-logo-wrapper custom-logo">
				<!-- <img class="taj-image" src="frontend photos/taj_logo-removebg-preview.png" alt="Taj Hotels logo" style="margin-top: 16px; width: 50px; height: auto;background-color: transparent; backdrop-filter: blur(1.5px);"> -->
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
	          <!-- <li class="nav-item active"></li><a href="index.html" class="nav-link" style="margin-top: 15px; "><b>Home</b></a></li> -->
			  <li class="nav-item"></li><a href="index.html" class="nav-link" style="margin-top: 15px; "><b>Home</b></a></li>
 
			  <li class="nav-item"><a href="rooms.html" class="nav-link" style="margin-top: 15px;"><b>Our Rooms</b></a></a></li>
	          <li class="nav-item"><a href="restaurant.html" class="nav-link" style="margin-top: 15px;"><b>Restaurant</b></a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link" style="margin-top: 15px;"><b>About Us</b></a></li>
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
	
	  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form >
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-circle fs-3 me-2"></i>User Login 
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label">Email address</label>
                        <input type="password" class="form-control shadow-none">
                        
                    </div>
                    <div class="mb-4">
                        <label  class="form-label">Password</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit"class="btn btn-dark shadow-none ">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none" ><b>Forgot Password?</b></a>
                    </div>
    			</div>
        	</form>
        </div>
    </div>
	</div>

	<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form >
					<div class="modal-header">
						<h5 class="modal-title d-flex align-items-center">
							<i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registeration 
						</h5>
						<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
							Note: Your details must match eith your ID(Aadhaar card,passport, driving license, etc.)
							that will be required during check-in.
						</span>
						<div class="container-field">
							<div class="row">
								<div class="col-md-6 ps-1 mb-3">
									<label  class="form-label">Name</label>
									<input type="text" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0 ps-0 MB-3">
									<label  class="form-label">Email</label>
									<input type="email" class="form-control shadow-none">
								</div>
								<div class="col-md-6 ps-1 mb-3">
									<label  class="form-label">Phone Number</label>
									<input type="number" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0 ps-0 mb-3">
									<label  class="form-label">Picture</label>
									<input type="file" class="form-control shadow-none">
								</div>
								<div class="col-md-12 p-0 ps-0 mb-3">
									<label  class="form-label">Address</label>
									<textarea class="form-control shadow-none" rows="1"></textarea>

								</div>
								<div class="col-md-6 ps-1 mb-3">
									<label  class="form-label">Pincode</label>
									<input type="number" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0 ps-0 mb-3">
									<label  class="form-label">Date of birth</label>
									<input type="date" class="form-control shadow-none">
								</div>
								<div class="col-md-6 ps-1 mb-3">
									<label  class="form-label">Password</label>
									<input type="password" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0 ps-0 mb-3">
									<label  class="form-label">Confirm Password</label>
									<input type="password" class="form-control shadow-none">
								</div>
							</div>
						</div>
						<div class="text-center my-1">
							<button type="submit"class="btn btn-dark shadow-none">REGISTER</button>
							<!-- <button type="button" class="btn btn-outline-dark shadow-none custom-register-btn" data-bs-toggle="modal" data-bs-target="#registerModal"></button> -->
						</div>
					</div>
				</form>
			</div>
			</div>
	</div>
	  


    	<!-- END nav -->
		<div class="hero">
			<section class="home-slider owl-carousel">
				<!-- <?php     
					$res = selectAll('carousel');
					while ($row = mysqli_fetch_assoc($res)) 
					{
						$path2=CAROUSEL_IM_PATH;
						echo <<<data
								$path2$row[image]
							
							data;
					}
				?> -->
				<div class="slider-item" style="background-image:url(frontend\ photos/s1.jpg);" style="background: none;">
				</div>
				<div class="slider-item" style="background-image:url(frontend\ photos/or2.jpg);" style="background: none;">
				</div>
				<div class="slider-item" style="background-image:url(frontend\ photos/fr1.jpg);" style="background: none;">
				</div>
				<div class="slider-item" style="background-image:url(frontend\ photos/or1.jpg);" style="background: none;">
						<div class="container">
							<div class="row no-gutters slider-text align-items-center justify-content-end">
								<div class="col-md-6 ftco-animate">
									<!-- <div class="text">
										<h2>More than a hotel... an experience</h2>
										<h1 class="mb-3">Hotel for the whole family, all year round.</h1>
									</div>  -->
								</div>
							</div>
						</div>
					<!-- </div> -->
				<div class="slider-item" style="background-image:url(images/bg_2.jpg);"> 
					<!-- <div class="overlay"></div> -->
					<!-- <div class="slider-item">
						<img src="frontend photos/fr1.webp" alt="Hotel Lobby Image">
					</div> -->
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-end">
							<div class="col-md-6 ftco-animate">
								<!-- <div class="text">
									<h2>Harbor Lights Hotel &amp; Resort</h2>
									<h1 class="mb-3">It feels like staying in your own home.</h1>
								</div> -->
							</div>
						</div>
					</div>
			    </div>
	        </section>
	  </div>

	  <!-- Check-in Date -->
    	<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-lg-12">
    				<form action="#" class="booking-form aside-stretch">
	        		<div class="row">
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap align-self-stretch py-3 px-3">
				    					<label for="#"style="color:#D29751;">Check-in Date</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap align-self-stretch py-3 px-3">
				    					<label for="#"style="color:#D29751;">Check-out Date</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap align-self-stretch py-3 px-4">
			      					<label for="#"style="color:#D29751;">Room</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control">
			                    	<option value="">Suite</option>
			                      <option value="">Family Room</option>
			                      <option value="">Deluxe Room</option>
			                      <option value="">Classic Room</option>
			                      <option value="">Superior Room</option>
			                      <option value="">Luxury Room</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end"style="color=#D29751;">
	        					<div class="wrap align-self-stretch py-3 px-4">
			      					<label for="#" style="color:#D29751;">Guests</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    			<div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    				<select name="" id="" class="form-control">
													<option value="">1 Adult</option>
													<option value="">2 Adult</option>
													<option value="">3 Adult</option>
													<option value="">4 Adult</option>
													<option value="">5 Adult</option>
													<option value="">6 Adult</option>
												</select>
											</div>
										</div>
				            		</div>
		              			</div>
	        				</div>
	        				<div class="col-md d-flex">
								<div class="form-group d-flex align-self-stretch">
									<a href="#" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block"style="background-color:#cf9c5d;"><span>Check Availability <small>Best Price Guaranteed!</small></span></a>
								</div>
	        				</div>
	        			</div>
	        		</form>
	    		</div>
    		</div>
    	</div>
	
    	</section>
	</div>



<!-- facilities -->
		<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading"style="color:#D29751;">Welcome to Taj Hotel</span>
					<h2 class="mb-4">You'll Never Want To Leave</h2>
          		</div>
        	</div>  
			<div class="row d-flex">
				<div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center" >
								<span class="flaticon-reception-bell"style="color:#D29751;"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Friendly Service</h3>
						</div>
					</div>      
				</div>
				<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services active py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-serving-dish"style="color:#D29751;"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Get Breakfast</h3>
						</div>
					</div>    
				</div>
				<div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-car"style="color:#D29751;"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Transfer Services</h3>
						</div>
					</div>      
				</div>
				<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-spa"style="color:#D29751;"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Suits &amp; SPA</h3>
						</div>
					</div>      
				</div>
				<div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="ion-ios-bed"style="color:#D29751;"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Cozy Rooms</h3>
						</div>
					</div>      
			    </div>
			</div>
		</div>
		</section>	
		
<!-- About -->
		<section class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-7 order-md-last d-flex">
						<div class="img img-1 mr-md-2 ftco-animate" style="background-image: url(frontend\ photos/v2.jpg);width: 90%;"></div>
						<div class="img img-2 ml-md-2 ftco-animate" style="background-image: url(frontend\ photos/room3.jpg);width: 90%;"></div>
						</div>
						<div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
							<div class="heading-section mb-4 my-5 my-md-0">
								<span class="subheading" style="color:#D29751;">About Taj Hotel</span>
								<h2 class="mb-4"style="width:50%">Taj Hotel the Most Recommended Hotel All Over the World</h2>
							</div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn rounded" style="background-color: #D29751; border-color: #fff; color: #fff;">Reserve Your Room Now</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<style>
			/* Add hover styles using the :hover pseudo-class */
			.services:hover {
				background-color: #D29751; /* Change this to the desired brown color */
				transition: background-color 0.3s ease; /* Add a smooth transition effect */
			}
		
			.services:hover h3 {
				color: white; /* Change this to the desired text color on hover */
			}
		</style>

	<!-- review	 -->
    <section class="testimony-section">
      <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
        	<div class="col-md-5 d-flex">
        		<div class="testimony-img aside-stretch-6" style="background-image: url(frontend\ photos/v9.jpg);"></div>
        	</div>
          <div class="col-md-7 py-5 pl-md-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-4">
	          		<span class="subheading"style="color:#D29751;">Testimony</span>
			          <h2 class="mb-0">Happy Customer</h2>
			        </div>
	            <div class="carousel-testimony owl-carousel ftco-animate">
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name"style="color:#D29751;">Gerald Hodson</p>
		                    <span class="position">Businessman</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name"style="color:#D29751;">Gerald Hodson</p>
		                    <span class="position">Businessman</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name"style="color:#D29751;">Gerald Hodson</p>
		                    <span class="position">Businessman</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name"style="color:#D29751;">Gerald Hodson</p>
		                    <span class="position">Businessman</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	            </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

<!-- rooms -->

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
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url(frontend\ photos/rrom1.jpg);"></a>
							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 text-center">
									<p class="star mb-0"style="color:#D29751;"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
									<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
									<h3 class="mb-3"><a href="rooms.html">King Room</a></h3>
									<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
    					</div>
    				</div>

					<div class="col-lg-6">
						<div class="room-wrap d-md-flex ftco-animate">
							<a href="#" class="img" style="background-image: url(frontend\ photos/room4.jpg);"></a>
							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 text-center">
									<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
									<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
									<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
									<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="room-wrap d-md-flex ftco-animate">
							<a href="#" class="img order-md-last" style="background-image: url(frontend\ photos/room15.jpg);"></a>
							<div class="half right-arrow d-flex align-items-center">
								<div class="text p-4 text-center">
									<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
									<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
									<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
									<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="room-wrap d-md-flex ftco-animate">
							<a href="#" class="img order-md-last" style="background-image: url(frontend\ photos/room11.jpg);"></a>
							<div class="half right-arrow d-flex align-items-center">
								<div class="text p-4 text-center">
									<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
									<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
									<h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
									<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="room-wrap d-md-flex ftco-animate">
							<a href="#" class="img" style="background-image: url(frontend\ photos/room7.jpg);"></a>
							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 text-center">
									<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
									<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
									<h3 class="mb-3"><a href="rooms.html">Luxury Room</a></h3>
									<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="room-wrap d-md-flex ftco-animate">
							<a href="#" class="img" style="background-image: url(frontend\ photos/room12.jpg);"></a>
							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 text-center">
									<p class="star mb-0"><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span><span class="ion-ios-star"style="color:#D29751;"></span></p>
									<p class="mb-0"><span class="price mr-1"style="color:black">$120.00</span> <span class="per"style="color:black">per night</span></p>
									<h3 class="mb-3"><a href="rooms.html">Superior Room</a></h3>
									<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2 rounded"style="background-color:#D29751;color:white;">View Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>
    		    </div>
    	    </div>
    	</section>

		<!-- restaurant -->
		<!-- <section class="ftco-section ftco-menu bg-light">
			<div class="container-fluid px-md-4">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">Restaurant</span>
						<h2>Restaurant</h2>
					</div>
        		</div>
				<div class="row">
					<div class="col-lg-6 col-xl-4 d-flex">
						<div class="pricing-entry rounded d-flex ftco-animate">
							<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
							<div class="desc p-4">
								<div class="d-md-flex text align-items-start">
									<h3><span>Grilled Crab with Onion</span></h3>
									<span class="price">$20.00</span>
								</div>
								<div class="d-block">
									<p>A small river named Duden flows by their place and supplies</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4 d-flex">
						<div class="pricing-entry rounded d-flex ftco-animate">
							<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
							<div class="desc p-4">
								<div class="d-md-flex text align-items-start">
									<h3><span>Grilled Crab with Onion</span></h3>
									<span class="price">$20.00</span>
								</div>
								<div class="d-block">
									<p>A small river named Duden flows by their place and supplies</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4 d-flex">
						<div class="pricing-entry rounded d-flex ftco-animate">
							<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
								<div class="desc p-4">
									<div class="d-md-flex text align-items-start">
										<h3><span>Grilled Crab with Onion</span></h3>
										<span class="price">$20.00</span>
									</div>
									<div class="d-block">
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
						    </div>
					    </div>
						<div class="col-lg-6 col-xl-4 d-flex">
							<div class="pricing-entry rounded d-flex ftco-animate">
								<div class="img" style="background-image: url(images/menu-4.jpg);"></div>
								<div class="desc p-4">
									<div class="d-md-flex text align-items-start">
										<h3><span>Grilled Crab with Onion</span></h3>
										<span class="price">$20.00</span>
									</div>
									<div class="d-block">
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 d-flex">
							<div class="pricing-entry rounded d-flex ftco-animate">
								<div class="img" style="background-image: url(images/menu-5.jpg);"></div>
									<div class="desc p-4">
										<div class="d-md-flex text align-items-start">
											<h3><span>Grilled Crab with Onion</span></h3>
											<span class="price">$20.00</span>
										</div>
										<div class="d-block">
											<p>A small river named Duden flows by their place and supplies</p>
										</div>
									</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 d-flex">
							<div class="pricing-entry rounded d-flex ftco-animate">
								<div class="img" style="background-image: url(images/menu-6.jpg);"></div>
									<div class="desc p-4">
										<div class="d-md-flex text align-items-start">
											<h3><span>Grilled Crab with Onion</span></h3>
											<span class="price">$20.00</span>
										</div>
										<div class="d-block">
											<p>A small river named Duden flows by their place and supplies</p>
										</div>
									</div>
							</div>
						</div>
						<div class="col-md-12 text-center ftco-animate">
							<p><a href="#" class="btn btn-primary rounded">View All Menu</a></p>
						</div>
        			</div>
				</div>
			</div>
		</section> -->

<!-- blog -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading"style="color: #D29751;">Read Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('frontend\ photos/');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">Oct. 30, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">Oct. 30, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">Oct. 30, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<!-- instagram -->
    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading"style="color: #D29751;">Photos</span>
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


	<!--brand-->
	<!-- <div class="cmp cmp-title aem-GridColumn aem-GridColumn--default--12">
		<div class="cm-content-blocks">
			<div class="cm-header-label-con title-decorator-border">
			   <h5 class="cm-header-label">OUR BRANDS</h5>
			</div>
		</div>
	</div> -->
	<!-- <div class="marqueebrands aem-GridColumn aem-GridColumn--default--12" style="position: relative;"><div class="leftArrow" style="display: none;"><span class="icon-carousel-arrow-coloured-left"></span></div> -->
    
<link rel="stylesheet" href="/etc.clientlibs/tajhotels/components/content/marqueebrands/clientlibs.ACSHASH83cbc0f0b58165152cd3373354ebce77.css" type="text/css">
<script src="/etc.clientlibs/tajhotels/components/content/marqueebrands/clientlibs.js"></script>



        




<!-- <div class="mr-contact-us-products-container marque-slider the-page-carousel" style="margin-left: -67px; width: 1274px;">
    <div class="size-fixed-marquee" style="width: 2133px; display: flex;">
        <div class="mr-contact-us-wrap" style="width: 306.5px; margin-right: 16px;">
            <div class="cont-us-image-cont">
				<picture class="bannerImage">
					<source type="image/jpeg" media="(max-width: 767px)" alt="alternate text for image">
					<source type="image/jpeg" media="(min-width: 768px)" data-src="/content/dam/tajhotels/marquee-brands/Taj%20Hotels%20%287%29.png/jcr:content/renditions/cq5dam.web.756.756.png" alt="alternate text for image">
					<img class="card-img-top brand-img-card " src="https://www.tajhotels.com/content/dam/tajhotels/marquee-brands/Taj%20Hotels%20%287%29.png/jcr:content/renditions/cq5dam.web.756.756.png" alt="alternate text for image" width="100%">
				</picture>
				<img class="brand-icon" src="/content/dam/logos/Taj-white-logo-compressed.png" alt="brand logo" style="width: 68%;     height: 4vw !important;     margin-left: 15%;">
            </div>
            <div class="cont-us-details-container">
                <div class="cont-us-contact-wrap">
                	<img class="brand-icon-desc marquee-inner-logo" src="frontend photos/taj logo.png" alt="brand logo" style="margin-bottom: 20.0px;text-align: center; height: 70px">
                    <div class="cont-us-phone-number" style="color: #787777;"><div style="padding: 15.0px;text-align: center;">
						<p>The unrivalled guardian of grandeur, Taj conjures a panoply of superlatives. With an art of hospitality that has been perfected over a century, Taj delivers unmatched experiences and lasting memories for guests around the world.</p>
					</div>
					</div>
					<a href="https://www.tajhotels.com/">
						<button class="cm-btn-primary" fdprocessedid="91wqha">KNOW MORE</button>
					</a>
                </div>
            </div>
		</div>
        <div class="mr-contact-us-wrap active" style="width: 306.5px; margin-right: 16px;">
            <div class="cont-us-image-cont">
				<picture class="bannerImage">
					<source type="image/jpeg" media="(max-width: 767px)" alt="alternate text for image">
					<source type="image/jpeg" media="(min-width: 768px)" data-src="/content/dam/seleqtions/pilibhit-house/pilibhit-house.jpeg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="alternate text for image">
					<img class="card-img-top brand-img-card " src="/content/dam/seleqtions/pilibhit-house/pilibhit-house.jpeg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="alternate text for image" width="100%">
				</picture>
				<img class="brand-icon" src="/content/dam/tajhotels/logos/seleQtions-invert.png" alt="brand logo" style="width: 85%;     margin-left: 8%;     margin-top: 7px; height: 4vw !important; ">
            </div>

            <div class="cont-us-details-container">
                <div class="cont-us-contact-wrap">
                	<img class="brand-icon-desc marquee-inner-logo" src="/content/dam/tajhotels/logos/new-design-logos/brands/seleqtions-brand-home-logo.PNG" alt="brand logo" style="margin-bottom: 20.0px;text-align: center; height: 70px; width: 60%; ">
                    <div class="cont-us-phone-number" style="color: #787777;"><div style="padding: 15.0px;text-align: center;"><p>Celebrating a legacy of time, a sense of place or a specific theme, SeleQtions offers a range of marquee hotels that each boast of distinct and special experiences.</p></div></div>
					<a href="https://www.seleqtionshotels.com/?sessionId=12f93cc5-ca1e-4c96-a759-a6f64ff67d58.1a48fbe4-3263-41a5-ac24-91d753fdcbf6&amp;jarvisId=c93cec74-a47c-4ab2-8b4a-8e2b4ff454f9">
						<button class="cm-btn-primary" fdprocessedid="6amb2">KNOW MORE</button>
					</a>
                </div>
            </div>
		</div>
        <div class="mr-contact-us-wrap" style="width: 306.5px; margin-right: 16px;">
            <div class="cont-us-image-cont">
				<picture class="bannerImage">
					<source type="image/jpeg" media="(max-width: 767px)" alt="alternate text for image">
					<source type="image/jpeg" media="(min-width: 768px)" data-src="/content/dam/tajhotels/ihcl/vivanta/vivanta_sikkim_ihcl.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="alternate text for image">
					<img class="card-img-top brand-img-card " src="/content/dam/tajhotels/ihcl/vivanta/vivanta_sikkim_ihcl.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="alternate text for image" width="100%">
				</picture>
				<img class="brand-icon" src="/content/dam/tajhotels/ihcl/Logos/vivanta_inverted.png" alt="brand logo" style="width: 55%;     margin-left: 20%; height: 5vw !important;">
            </div>
            <div class="cont-us-details-container">
                <div class="cont-us-contact-wrap">
                	<img class="brand-icon-desc marquee-inner-logo" src="/content/dam/tajhotels/ihcl/Logos/icon-vivanta.png" alt="brand logo" style="margin-bottom: 20.0px;text-align: center;width: 60%; margin-top: 10px;">
                    <div class="cont-us-phone-number" style="color: #787777;"><div style="padding: 15.0px;text-align: center;">
						<p>A distinctive collection of vibrant hotels that are handpicked for the young, contemporary achievers of today who stand apart without being rebels, and that allow them to discover joie de vivre.</p>
					</div>
				</div>
				<a href="https://www.vivantahotels.com/?sessionId=12f93cc5-ca1e-4c96-a759-a6f64ff67d58.1a48fbe4-3263-41a5-ac24-91d753fdcbf6&amp;jarvisId=c93cec74-a47c-4ab2-8b4a-8e2b4ff454f9">
					<button class="cm-btn-primary" fdprocessedid="emcqb">KNOW MORE</button>
				</a>
            </div>
        </div>
	</div>

    <div class="mr-contact-us-wrap" style="width: 306.5px; margin-right: 16px;">
        <div class="cont-us-image-cont">
			<picture class="bannerImage">
				<source type="image/jpeg" media="(max-width: 767px)" alt="alternate text for image">
				<source type="image/jpeg" media="(min-width: 768px)" data-src="/content/dam/tajhotels/ihcl/ginger/Ginger_406x487.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="alternate text for image">
				<img class="card-img-top brand-img-card " src="/content/dam/tajhotels/ihcl/ginger/Ginger_406x487.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="alternate text for image" width="100%">
			</picture>
			<img class="brand-icon" src="/content/dam/tajhotels/ihcl/Logos/ginger_inverted.png" alt="brand logo" style="width: 70%;     margin-left: 25%;  height: 5vw !important;">
        </div>
		
        <div class="cont-us-details-container">
            <div class="cont-us-contact-wrap">
            	<img class="brand-icon-desc marquee-inner-logo" src="/content/dam/ama/Logo/gingerLogo.png" alt="brand logo" style="margin-bottom: 20.0px;text-align: center;margin-left: 14.0%;width: 60%;">
                <div class="cont-us-phone-number" style="color: #787777;"><div style="padding: 15.0px;text-align: center;"><p>Deeply contemporary in spirit, Ginger caters to those for whom the lines between work and play are blurred and those who need a hotel as seamless, flexible and open minded as they are.</p></div></div>
				<a href="https://www.gingerhotels.com/?sessionId=12f93cc5-ca1e-4c96-a759-a6f64ff67d58.1a48fbe4-3263-41a5-ac24-91d753fdcbf6&amp;jarvisId=c93cec74-a47c-4ab2-8b4a-8e2b4ff454f9">
					<button class="cm-btn-primary" fdprocessedid="av575p">KNOW MORE</button>
				</a>
            </div>
        </div>
		</div>
		<div class="mr-contact-us-wrap" style="width: 306.5px; margin-right: 16px;">
        <div class="cont-us-image-cont">
			<picture class="bannerImage">
				<source type="image/jpeg" media="(max-width: 767px)" alt="alternate text for image">
				<source type="image/jpeg" media="(min-width: 768px)" data-src="/content/dam/ama/Our-hotels/goa/Gallery/_DSC8731-Edit.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="All meal Inclusive Offer at Cardozo House" title="All meal Inclusive Offer at Cardozo House">
				<img class="card-img-top brand-img-card " src="/content/dam/ama/Our-hotels/goa/Gallery/_DSC8731-Edit.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="All meal Inclusive Offer at Cardozo House" title="All meal Inclusive Offer at Cardozo House" width="100%">
			</picture>
			<img class="brand-icon" src="/content/dam/tajhotels/ihcl/Logos/ama_inverted.png" alt="brand logo" style="height: 6vw !important; top: 16px !important;">
    	</div>
        <div class="cont-us-details-container">
			<div class="cont-us-contact-wrap">
				<img class="brand-icon-desc marquee-inner-logo" src="/content/dam/ama/Logo/ama-logo-transparent.png" alt="brand logo" style="margin-bottom: 20.0px;text-align: center; width: 35%;">
				<div class="cont-us-phone-number" style="color: #787777;"><div style="padding: 15.0px;text-align: center;">
					<p>Elegant and charming escapes set in breathtaking locales that combine homely comfort and warm service to deliver a truly immersive and authentic local experience for their guests.</p>
				</div>
			</div>
		<a href="https://www.amastaysandtrails.com/?sessionId=12f93cc5-ca1e-4c96-a759-a6f64ff67d58.1a48fbe4-3263-41a5-ac24-91d753fdcbf6&amp;jarvisId=c93cec74-a47c-4ab2-8b4a-8e2b4ff454f9">
		<button class="cm-btn-primary">KNOW MORE</button>
		</a>
    	</div>
		</div>

		</div>


        
       
        <div class="mr-contact-us-wrap" style="width: 306.5px; margin-right: 16px;">
            <div class="cont-us-image-cont">

                  

			<picture class="bannerImage">
					<source type="image/jpeg" media="(max-width: 767px)" alt="alternate text for image">

					<source type="image/jpeg" media="(min-width: 768px)" data-src="/content/dam/tajhotels/campaign/republic/qmin.PNG" alt="alternate text for image">
					<img class="card-img-top brand-img-card " src="/content/dam/tajhotels/campaign/republic/qmin.PNG" alt="alternate text for image" width="100%">
				</picture>




                     <img class="brand-icon" src="/content/dam/tajhotels/ihcl/Logos/qmin_inverted.png" alt="brand logo" style="    height: 9vw !important;     margin-top: -11px !important;">
             </div>
             <div class="cont-us-details-container">
                <div class="cont-us-contact-wrap">
                	<img class="brand-icon-desc marquee-inner-logo" src="/content/dam/qmin/Original-logo-qmin.png" alt="brand logo" style="margin-bottom: 20.0px;text-align: center;width: 45%;">
                    <div class="cont-us-phone-number" style="color: #787777;"><div style="padding: 15.0px;text-align: center;"><p>Qmin brings Qurated dishes from our iconic restaurants, made with the highest Quality of ingredients, from a wide variety of Quisines to the doorstep of our guests.</p></div></div>
					<a href="https://www.qmin.co.in/?sessionId=12f93cc5-ca1e-4c96-a759-a6f64ff67d58.1a48fbe4-3263-41a5-ac24-91d753fdcbf6&amp;jarvisId=c93cec74-a47c-4ab2-8b4a-8e2b4ff454f9">
						<button class="cm-btn-primary">KNOW MORE</button>
					</a>
                </div>
            </div>
		</div>
        
       
        <div class="mr-contact-us-wrap" style="width: 306.5px; margin-right: 0px;">
            <div class="cont-us-image-cont">

                  

					<picture class="bannerImage">
							<source type="image/jpeg" media="(max-width: 767px)" alt="alternate text for image">

							<source type="image/jpeg" media="(min-width: 768px)" data-src="/content/dam/tajhotels/ihcl/newdamimages/Taj-sats-banner.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="Unforgettable Dining Experience at Taj Santacruz Mumbai" title="Unforgettable Dining Experience at Taj Santacruz Mumbai">
							<img class="card-img-top brand-img-card " src="/content/dam/tajhotels/ihcl/newdamimages/Taj-sats-banner.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" alt="Unforgettable Dining Experience at Taj Santacruz Mumbai" title="Unforgettable Dining Experience at Taj Santacruz Mumbai" width="100%">
						</picture>




                     <img class="brand-icon" src="/content/dam/tajhotels/taj-sats/taj_sats-01.png" alt="brand logo" style="     width: 55%;     margin-left: 20%; height: 7vw !important ;">
             </div>
             <div class="cont-us-details-container">
                <div class="cont-us-contact-wrap">
                	<img class="brand-icon-desc marquee-inner-logo" src="/content/dam/tajhotels/logos/new-design-logos/brands/tajsats-brand-home-logo.PNG" alt="brand logo" style="margin-bottom: 20.0px;text-align: center;width: 45%;">
                    <div class="cont-us-phone-number" style="color: #787777;"><div style="padding: 15.0px;text-align: center;"><p>Elevating air catering with creative twists and elegant accents, TajSATS enriches travel with delicious and nourishing meals, creating hospitality that never compromises on quality.</p></div></div>
					<a href="https://www.tajsats.com/?sessionId=12f93cc5-ca1e-4c96-a759-a6f64ff67d58.1a48fbe4-3263-41a5-ac24-91d753fdcbf6&amp;jarvisId=c93cec74-a47c-4ab2-8b4a-8e2b4ff454f9">
						<button class="cm-btn-primary">KNOW MORE</button>
					</a>
                </div>
            </div>
		</div>
        
    </div>
</div> -->

<!-- <div class="rightArrow">
	<span class="icon-carousel-arrow-coloured-right">
		<::before></::before>
	</span>
</div> -->
<!-- </div> -->
<!-- </div>
</div> -->



<!-- Footer -->

<footer class="foo ftco-footer ftco-section img" style="background-color: #444;" ><!-- style="background-image: url(images/bg_4.jpg);" -->
	<!-- <div class="overlay"></div> -->
  <div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Taj Hotel</h2>
					<p >Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
					</ul>
				</div>
			</div>
		<div class="col-md">
			<div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Useful Links</h2>
				<ul class="list-unstyled">
					<li><a href="#" class="py-2 d-block">Blog</a></li>
					<li><a href="#" class="py-2 d-block">Rooms</a></li>
					<li><a href="#" class="py-2 d-block">Amenities</a></li>
					<li><a href="#" class="py-2 d-block">Gift Card</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md">
			<div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Privacy</h2>
				<ul class="list-unstyled">
					<li><a href="#" class="py-2 d-block">Career</a></li>
					<li><a href="#" class="py-2 d-block">About Us</a></li>
					<li><a href="#" class="py-2 d-block">Contact Us</a></li>
					<li><a href="#" class="py-2 d-block">Services</a></li>
				</ul>
			</div>
		</div>
		<div class="foo col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text"> 203 Fake St. Mountain View, San Francisco, California, USA</span></li>
							<li><a href="#"><span class="icon icon-phone"></span><span class="text"> +2 392 3929 210</span></a></li>
							<li><a href="#"><span class="icon icon-envelope"></span><span class="text"> info@yourdomain.com</span></a></li>
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
  <script>
	function setActive()
	{
		let navbar=document.getElementById('nav-bar');
		let a_tags=navbar.getElementById('a');
		for(i=0;i<a_tags.length;i++)
		{
			let file=a_tags[i].href.split('/').pop();
			let file_name=file.split('.')[0];

			if(document.location.href.indexOf(file_name)>=0)
			{
				a_tags[i].classList.add('active');
			}
		}
	}
	setActive();
  </script>
  <style>
	.room-wrap {
		width: 100%;
		background: #fff;
		transition: 0.3s;
	
		.img {
			width: 100%;
			height: 360px;
			display: block;
		}
	
		.half {
			width: 100%;
			position: relative;
	
			&:after,
			&:before {
				transition: 0.3s;
			}
	
			&.left-arrow {
				&:after {
					position: absolute;
					top: 50%;
					left: -15px;
					transform: translateY(-50%);
					content: '';
					width: 0;
					height: 0;
					border-style: solid;
					border-width: 12px 15px 12px 0;
					border-color: transparent #fff transparent transparent;
				}
			}
	
			&.right-arrow {
				&:after {
					position: absolute;
					top: 50%;
					right: -15px;
					transform: translateY(-50%);
					content: '';
					width: 0;
					height: 0;
					border-style: solid;
					border-width: 12px 0 12px 15px;
					border-color: transparent transparent transparent #fff;
				}
			}
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
	
		&:hover,
		&:focus {
			background: #efd9bf;
	
			.half {
				&.left-arrow {
					&:after {
						border-color: transparent #efd9bf transparent transparent;
					}
				}
	
				&.right-arrow {
					&:after {
						border-color: transparent transparent transparent #D29751;
					}
				}
			}
	
			.text {
				.star {
					span {
						color:black;
					}
				}
	
				h3 {
					a {
						color:black;
					}
				}
	
				span.price {
					color: #fff;
				}
	
				span.per {
					font-size: 14px;
					color: lighten(#fff, 0%);
				}
	
				.btn-custom {
					display: inline-block;
					color: #fff;
					border: 2px solid rgba(255, 255, 255, 1);
					background: #fff;
				}
			}
		}
	}
	.testimony-section {
	  position: relative;
	}
	
	.testimony-img {
	  display: block;
	  width: 100%;
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: top center;
	}
	
	.owl-carousel {
	  margin: 0;
	}
	
	.owl-carousel .owl-stage-outer {
	  padding-top: 0;
	  padding-bottom: 0;
	  position: relative;
	}
	
	.owl-nav {
	  position: absolute;
	  bottom: 60px !important;
	  left: 0;
	  right: 0;
	  margin: 0 auto;
	
	  @media (max-width: 991.98px) {
		display: none;
	  }
	
	  .owl-prev,
	  .owl-next {
		position: absolute;
		width: 60px;
		height: 60px;
		background: #fff !important;
		transition: 0.7s;
	
		span {
		  &:before {
			font-size: 20px;
			margin-top: 7px;
			color: #000;
		  }
		}
	
		opacity: 1;
	  }
	
	  .owl-prev {
		top: 0 !important;
		right: 0 !important;
	
		@media (min-width: 992px) {
		  right: 61px !important;
		}
	
		&:hover,
		&:focus {
		  background: #000 !important;
		  outline: none !important;
	
		  span {
			&:before {
			  font-size: 20px;
			  margin-top: 7px;
			  color: #fff;
			}
		  }
		}
	  }
	
	  .owl-next {
		top: 0 !important;
		right: 0 !important;
	
		@media (min-width: 992px) {
		  right: 0 !important;
		}
	
		&:hover,
		&:focus {
		  background: #000 !important;
		  outline: none !important;
	
		  span {
			&:before {
			  font-size: 24px;
			  margin-top: 7px;
			  color: #fff;
			}
		  }
		}
	  }
	}
	
	.owl-dots {
	  text-align: left;
	
	  .owl-dot {
		width: 10px;
		height: 10px;
		margin: 5px;
		border-radius: 50%;
		background: rgba(0, 0, 0, 0.1);
	
		&.active {
		  background: #D29751;
		}
	  }
	}
	.custom-btn {
			color: white;
			background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);
			margin-top: 15px;
			padding: 0 0.875rem;
			font-family: Helvetica, sans-serif;
			font-size: 0.85rem;
			letter-spacing: 0.5px;
			text-align: center;
			text-transform: uppercase;
			cursor: pointer;
			outline: none;
			border-radius: 3px;
			border: none;
			outline: none !important;
		}
	</style>
  </body>
</html>
