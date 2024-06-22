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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\links.php');?>
    <?php require('admin\inc\essentials.php'); ?>
    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\db_config.php');?>

    <style>
  .custom-alert{
    position:fixed;
    top:80px;
    right:25px;
    z-index: 9999;
  }
  </style>



  

   

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  </head>
  <body>

    <nav class="navbar navbar-expand-lg  navbar-light" id="ftco-navbar" style="margin-top: -20px;">
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
		<div class="hero-wrap" style="background-image: url('frontend\ photos/fr1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact Us</span></p>
	            <h1 class="mb-4 bread">Contact Us</h1>
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
   


    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-6 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3" style="text-align: center; color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);">Contact Information</h2>
          </div>
          <div class="w-100"></div>
            <!-- Parent container with Flexbox -->
          <div class="col-md-12 d-flex justify-content-between">
                <!-- First Box -->
            <div class="info rounded bg-white p-4" style="border: 3px solid #191975 !important; margin-right: 10px;">
              <p>
              <span><b>Address:</b></span>     
              <a href="<?php echo $contact_r['gmap']?>" class="d-inline-block mb-2 text-decoration-none text-black">
                <?php echo $contact_r['address']?>
              </a>
              </p>
            </div>
              <!-- Second Box -->
            <div class="info bg-white p-4 rounded text-black" style="border: 3px solid #191975 !important; margin-right: 10px;">
                <span class="fs-6 mt-0" style="color:black"><b>Phone:</b></span> <br>
                <a href="tel:+<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-black" style="color:#2F89Fc">
                  <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1']?>
                </a>
                <br>
                <?php
                  if($contact_r['pn2']!=''){
                    echo<<<data
                      <a href="tel:+$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-black" style="color:#2F89Fc">
                        <i class="bi bi-telephone-fill"></i>+$contact_r[pn2]
                      </a>
                    data;
                  }
                ?>
              </div>
                <!-- Third Box -->
                <div class="info rounded bg-white p-4 text-black" style="border: 3px solid #191975 !important; margin-right: 10px;">
                  <i class="bi bi-envelop-fill"></i>
                  <p><span class="font-size:100px"><b>Email:</b></span> 
                  <a href="mailto:<?php echo $contact_r['email']?>">info@hoteltaj.com</a></p>
                  <br>
                  <p><span><b>Website:</b></span><br> <a href="#">hoteltaj.com</a></p>
                </div>
                <!-- Fourth Box -->
                <div class="info rounded bg-white p-4" style="border: 3px solid #191975 !important;">
                  <h5><b>Follow us</b></h5><br>
                  <?php
                    if($contact_r['tw']!=''){
                        echo<<<data
                        <p>
                          <a href="$contact_r[tw]" class="d-inline-block mb-2">
                            <span class="badge bg-light text-dark fs-6 p-2">
                              <span class="icon-twitter"></span></a></li><b>Twitter</b>
                            </span>
                          </a><br>
                        </p>
                        data;
                    }
                  ?>
                  <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-4">
                      <span class="badge bg-light text-dark fs-6 p-2">
                          <span class="icon-facebook"></span></a></li></a></li><b>Facebook</b>
                      </span>
                  </a><br>
                  <a href="<?php echo $contact_r['insta']?>" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                      <span class="icon-instagram" style="color: black;"></span></a></li><b>Instagram</b>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
    </section>



    
        <!-- Map and Message Box Section -->
        <div class="row block-9">
          <!-- Map Section -->
          <div class="col-md-6"style=" border: 3px solid #191975 !important;">
            <div class="bg-white">
              <!-- <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15551.188644280779!2d77.74084907546288!3d12.984821658898564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0f5d6cc5da4d%3A0x286bd9bb1cadae7a!2sAlembic%20Urban%20Forest!5e0!3m2!1sen!2sin!4v1710609790855!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
              <iframe class="w-100 rounded" src="<?php echo $contact_r['iframe']?>" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
    
          <!-- Message Box Section -->
          <div class="col-md-6"style=" border: 3px solid #191975 !important;" >
            <div  class="bg-white p-5 contact-form">
              <form  method="POST">
                <h5> Send a Message</h5>
                <div class="mt-3">
                  <input  type="text" name="name" required class="form-control" placeholder="Your Name">
                </div>
                <div class="mt-3">
                  <input type="email" name="email" required class="form-control" placeholder="Your Email">
                </div>
                <div class=" mt-3">
                  <input type="text" name="subject" required class="form-control" placeholder="Subject">
                </div>
                <div class="mt-3">
                  <textarea name="message" required id="" cols="30" rows="5" class="form-control" placeholder="Message" style="resize:none;"></textarea>
                </div>
                <!-- <div class="form-group d-flex justify-content-center"> -->
                <button type="submit" name="send" onclick="return mess();"  class="btn text-white custom-bg mt-3 py-3 px-3 text-transform-none" style="background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751); width: 100%; font-size: 1em;"> Send Message</button>

                <!-- <button type="submit" name="send" value="Send Message" class="btn btn-primary py-3 px-5 text-transform-none" style="background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751); width: 100%; font-size: 1em;"></button> -->
                  <!-- <input type="submit" name="send" value="Send Message" class="btn btn-primary py-3 px-5 text-transform-none" style="background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751); width: 100%; font-size: 1em;"> -->
                <!-- </div> -->
              </form>
              <script type="text/javascript">
                function mess()
                {
                  alert("Your record is successfully saved");
                  return true;
                }

              </script>
            </div>
          </div>
        </div>
      </div>
    <!-- </section> -->

    
    <!-- <?php
//   $res = 0; // Initialize $res to 0
//   if(isset($_POST['send']))
//   {

//     $frm_data=filteration($_POST);

//     $q="INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
//     $values=[$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
//     $res=insert($q,$values,'ssss');
//     echo $res;
//     if($res==1){
//       header("Location: contact.php");
//       exit();
//       // alert('success','Mail sent!');
//       // alert('error','Server Down try again later!');
//       exit();
//     }
//     else{
//       alert('error','Server Down try again later!');
//       // alert('success','Mail sent!');
//       exit();
//     }
// }
// $res = 0; // Set $res to 0 after the if condition
// echo $res;
?> -->
<?php
$res = 0; // Initialize $res to 0
if(isset($_POST['send'])) // Check if the form is submitted
{
  $frm_data=filteration($_POST); // Assuming filteration() is a custom function

  // Assuming insert() is a custom function to insert data into the database
  $q="INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
  $values=[$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
  $res=insert($q,$values,'ssss'); // Execute the insert query and get the result

  echo $res; // Output the result (for debugging purposes)

  if($res==1){
    // alert('success','Mail sent!');
    redirect('contact.php');
    exit(); // Terminate script execution
  }
  else{
    alert('error','Server Down try again later!'); // Show error message
    exit(); // Terminate script execution
  }
}

$res = 0; // Set $res to 0 after the if condition (may not be necessary)
echo $res; // Output the value of $res (may not be reached)
?>


    
    
  
    
    <!-- <section>
      <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
      <div class="container px-4">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src = "frontend photos/about/contact_us.jpg" class="w-100">
              <h5 class="mt-2">Random Name</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src = "frontend photos/about/contact_us.jpg" class="w-100">
              <h5 class="mt-2">Random Name</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src = "frontend photos/about/contact_us.jpg" class="w-100">
              <h5 class="mt-2">Random Name</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src = "frontend photos/about/contact_us.jpg" class="w-100">
              <h5 class="mt-2">Random Name</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src = "frontend photos/about/contact_us.jpg" class="w-100">
              <h5 class="mt-2">Random Name</h5>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section> -->


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
          spaceBetween: 40,
          pagination: {
              el: ".swiper-pagination",
          },
          breakpoints: {
              320: {
                  slidesPerView: 1,
              },
              640: {
                  slidesPerView: 1,
              },
              768: {
                  slidesPerView: 3,
              },
              1024: {
                  slidesPerView: 3,
              },
          }
      });
    </script>



    <footer class="foo ftco-footer ftco-section img" style="background-color: #444;" ><!-- style="background-image: url(images/bg_4.jpg);" -->
    	<!-- <div class="overlay"></div> -->
      <div class="container">
		    <div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Taj Hotel</h2>
						<p >Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <?php
                // if($contact_r['tw']!=''){
                //     echo<<<data
                //       <p><a href="$contact_r[tw]" class="d-inline-block mb-2">
                //         <span class="badge bg-light text-dark fs-6 p-2">
                //           <span class="icon-twitter"></span></a></li><b>Twitter</b>
                //         </span>
                //       </a><br></p>
                //     data;
                //   }
              ?>
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
						<!-- <li><a href="#" class="py-2 d-block">Amenities</a></li>
						<li><a href="#" class="py-2 d-block">Gift Card</a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Privacy</h2>
					<ul class="list-unstyled">
						<!-- <li><a href="#" class="py-2 d-block">Career</a></li> -->
						<li><a href="about.php" class="py-2 d-block">About Us</a></li>
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
    .info {
  width: 50%;
  }
  </style>
  </body>
</html>