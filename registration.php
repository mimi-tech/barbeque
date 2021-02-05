<?php
 ob_start();
 session_start();

 
 include('core/confi.php');

 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $fName = trim($_POST['fName']);
  $fName = strip_tags($fName);
  $fName = htmlspecialchars($fName);
     
  
     
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
     
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  $confirmpass = trim($_POST['confirmpass']);
  $confirmpass = strip_tags($confirmpass);
  $confirmpass = htmlspecialchars($confirmpass);
$Token = bin2hex(openssl_random_pseudo_bytes(40));      
    
	 
  if (empty($fName)) {
   $error = true;
   $fNameError = "Please enter your first name.";
  } else if (strlen($fName) < 3) {
   $error = true;
   $fNameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/", $fName)) {
   $error = true;
   $fNameError = "Name must contain alphabets and space.";
  }
     
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT *  FROM user_info WHERE email='$email'";
   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
}
  }
     
    if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  
  if (empty($confirmpass)){
   $error = true;
   $confirmPassError = "Please re-enter your password.";
  } else if($pass != $confirmpass){
	   $error = true;
        $confirmpassError = "passwords does not match";
  
     
    }else{ 
  
   $hashedpass = password_hash($pass, PASSWORD_DEFAULT);  
   }
  
  
   if( !$error ) {
 header("Location: registration.php?suc=3");

	    $_SESSION['fName'] = $fName;
 
  $_SESSION['email'] = $email;
	 $_SESSION['pass'] = $hashedpass; 
	   
	   
        
   }
  
   }

   
?>


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
    <link rel="stylesheet" href="css/raw.css">
  </head>
  <body>
 
 <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                   
                    <?php
			if ( isset($_GET['suc']) && $_GET['suc'] == 3 ){ 
      echo "<div> <h2 class='title'>Proceed to checkout </h2>
	  <p style='font-size: 15px;'>Over 300 Best Baking Recipes of All Time</p> 
	  <p style='font-size: 15px;'>@ #1000 only.</p></div>
	  <br />
	  <a href='https://paystack.com/pay/g93y-0kkhj' class='btn btn--radius btn--green' role='button' target='_blank'>Checkout</a>
	  ";
			}else{
			
			
			?>
                   
                    <h3 class="titles">Registration Info</h3>
                    
		             
		              
                  
                  
                    <form method="POST" autocomplete="off" action="registration.php">
                        
                                <div class="input-group">
                                   <input class="input--style-1" type="text" placeholder="Full Name" name="fName" value="<?php echo $fName;?>" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar icon icon-user"></i>
                                     
                                </div>
                           <span class="text-danger"><?php echo $fNameError; ?></span>
                            
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Email" name="email" value="<?php echo $email;?>" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar icon icon-envelope"></i>
                                    
                                </div>
                            <span class="text-danger"><?php echo $emailError; ?></span>
                       
                        <div class="input-group">
                           <input class="input--style-1" type="password" placeholder="Password" name="pass" value="<?php echo $pass;?>" id="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                           <i toggle="#password-field" class="zmdi zmdi-calendar-note input-icon js-btn-calendar icon icon-eye toggle-password"></i>
                          
                            
                        </div>
                        <span class="text-danger"><?php echo $passError; ?></span>
                         <div id="meter_wrapper">
                             <div id="meter"></div>
                            </div>
                            <span id="pass_type"></span>
                        <div class="input-group">
                              <input class="input--style-1" type="password" placeholder="Confirm Password" name="confirmpass" value="<?php echo $pass;?>" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                              <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar icon icon-eye"></i> 
                              
						</div>
                        <span class="text-danger"><?php echo $confirmPassError; ?></span>
                                <span class="text-danger"><?php echo $confirmpassError; ?></span>
                        <div class="p-t-20">
							<a href="https://paystack.com/pay/g93y-0kkhj"> <button class="btn btn--radius btn--green" type="submit" name="btn-signup">Next</button></a>
                             
                        </div>
                        
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

      
   

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
