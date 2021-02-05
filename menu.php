<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizza - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

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
	      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
	          
	          <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
	          
		          <div class="col-md-8 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Barbeque</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Low Fat foods</a>

		             
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-lg-4 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              				<?php 
									include 'core/confi.php';
										$sql = "SELECT * FROM beef";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					<h3 class="text-center">Beef</h3>
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										//$title = str_replace("\r\n"," ", $title);
										?>
		              					<li><a  href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $title;?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-lg-4 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					<h3 class="text-center">Pork</h3>
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT * FROM pork";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-lg-4 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					<h3 class="text-center">Fish</h3>
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT * FROM fish";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];
											   ?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              		
		              		<div class="col-lg-4 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					<h3>Poultry</h3>
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT * FROM poultry";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              		
		              		<div class="col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					<h3 class="text-center">Others</h3>
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT * FROM other";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
	                 <h3 class="text-center">Low fat foods</h3><br />
		                <div class="row">
		               
		              		<div class=" col-lg-3 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT title FROM low_fat WHERE id BETWEEN  1 AND 7";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              		
		              		<div class="col-lg-3 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT title FROM low_fat WHERE id BETWEEN  8 AND 14";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              		
		              		<div class="col-lg-3 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT title FROM low_fat WHERE id BETWEEN  15 AND 21";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
		              		</div>
		              		
		              		<div class="col-lg-3 col-md-6">
		              			<div class="menu-wrap">
		              				
		              				<div class="text">
		              					
		              					<?php 
									include 'core/confi.php';
										$sql = "SELECT title FROM low_fat WHERE id BETWEEN  22 AND 28";
										$b = mysqli_query($conn,$sql);
										
									?>
	              					
		              					
		              					<?php while($row = mysqli_fetch_assoc($b)):
										$title = mysqli_real_escape_string($conn,$row['title']);
										$title = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
										?>
		              					<li><a href="recipies?re=<?php echo $row["id"];?>">
		              						<?php echo $row["title"];?>
											</a></li><br />
		              					
		              					
		              					<?php endwhile;?>
		              				</div>
		              			</div>
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

    <footer class="ftco-footer ftco-section img" id="about">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy; All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by 
 </p>
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