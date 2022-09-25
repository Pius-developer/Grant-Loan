<?php
	include 'db.php';


	//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    
function sendEmail_ContactForm($subj , $msg) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
        $mail->isSMTP();                                           
        $mail->Host       = 'mail.spaceexclusivegroup.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'support@spaceexclusivegroup.com';                    
        $mail->Password   = 'Blessing@123';                               
        $mail->SMTPSecure = 'ssl';            
        $mail->Port       = 465;                                    

        //Recipients
        $mail->setFrom($email);
        $mail->addAddress('corcherry1978@gmail.com');     


        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subj;
        $mail->Body    = $msg;

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


if(isset($_POST['Send'])){
	// GET THE DATA

	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
    $msg=mysqli_real_escape_string($conn,$_POST['msg']);
    $subj=mysqli_real_escape_string($conn,$_POST['sub']);

	if(empty($name) || empty($email) ||empty($msg)){
		header("Location:../contact.php?mail=empty");
		exit();

	}else{

		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location:../contact.php?mail=invalidemail");
		exit();

		}else{
			sendEmail_ContactForm("$subj" , "$msg") ;

			header("Location:../contact.php?mail=sucess");
			exit();
		}

	}

}else{
	header("Location:../contact.php?error");
	exit();
}