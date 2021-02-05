

<?php
include 'core/confi.php';

$errorMSG = "";

$email = mysqli_real_escape_string($conn, $_POST['email']);
/* EMAIL */
if (empty($_POST["email"])) {
    $errorMSG .= "<p class='text-danger'>Email is required</p>";
} else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errorMSG .= "<p class='text-danger'>Invalid email format</p>";
}else {
   
   // check email exist or not
   $query = "SELECT * FROM contact WHERE email='$email'";
   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);
   if($count!=0){
   $errorMSG .= "<p class='text-danger'>You have subscribed already</p>";
   
}else{ 
	   $null = "Not Approved";
	    $curdate=date("Y/m/d");
   $sql = "INSERT INTO contact (id, email, cdate, approval)VALUES (NULL, '$email', '$curdate', '$null')";
        
        $run_query = mysqli_query($conn, $sql);
        if($run_query){
      $msg = '<p style="color:green">Your subscription is successful</p>';
			echo json_encode(['code'=>200, 'msg'=>$msg]);
			exit;
			
		
    require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 0;                               

$mail->isSMTP();                                     
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'no-reply@yummyhomes.co';                 
$mail->Password = '5ecur1tyemail';                          
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;                                    
$mail->isHTML(true); 
$mail->setFrom('no-reply@yummyhomes.co', 'Yummyhomes');
$mail->addAddress($email,$email);     
$mail->addReplyTo('no-reply@yummyhomes.co');
$mail->AddEmbeddedImage('logo.png', 'logoimg', 'logo.png');
	   $body = '<img src=\'cid:logoimg\' /> <h3 style="width:80%;"> Thank You <span style="color: #7a2b00; font-size:18px;">'.$email.'! </span>  <p>  for your subscription </p> <p> We will keep you updated .</p></h3>';
	   
                                

$mail->Subject = 'Yummyhomes';
$mail->Body = $body;

$mail->AltBody = strip_tags($body);

if(!$mail->send()) {
  $mss = 'Registered successfully';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 $mss = "Registered successfully, Please Login";  
}
 
    }
}
}
        
    
 

echo json_encode(['code'=>404, 'msg'=>$errorMSG]);


?>