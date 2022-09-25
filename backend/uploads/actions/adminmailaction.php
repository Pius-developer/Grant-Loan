<?php
include 'db.php';
	
	if (isset($_POST['send'])) {

		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$sub=mysqli_real_escape_string($conn,$_POST['subject']);
		$msg=mysqli_real_escape_string($conn,$_POST['Message']);
		$mailid= uniqid();
		


$sql = "INSERT INTO adminmail(mailid, message, email,subject) VALUES ('$mailid','$msg','$email','$sub')";
 mysqli_query($conn,$sql);

		//registeration email
$to = $email;
$subject = $sub;
$from = "support@Safecapitalfx.com";
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
// <img src="http://www.yourserver.com/myimages/image1.jpg

$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>SAFE</span>CAPITALFX</h3>";
// LOGO HERE
$message.=  "<img src='https://www.Safecapitalfx.com/assets/img/bo.png' alt='logo' width='100' height='65'>";
// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
//$message.=  "<h4 style='padding: 1px;'>Hello ".$fname." ". $uname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.= $msg;

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@safecapitalfx.com</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Safecapitalfx © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);
        
		header("Location:../adminmail.php?success");
		exit();



	}else{
		header("Location:../adminmail.php?error");
		exit();
	}