<?php
include 'db.php';

	
 //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    function sendEmail_Otp($email, $proofid) {
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
        $mail->setFrom('support@spaceexclusivegroup.com');
        $mail->addAddress($email);     


        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Space Excluxive Group withdrawal otp';

        $email_template = "
            <html>
                <body style='width: 100%;  background: #f5f5f5;'>
                    <div style='width: 100%; min-width:95%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                        <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                            <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                        </div>

                        <div style='width:100%; margin: 5px 0;'>
                          <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #fff; text-align: center;'>
						  	<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>Payment VERIFICATION</span></h3>
                          </div>
                        </div>


                        <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                            <h3 style='text-align:center; color:#336699;'>Hello,  $fname </h3>
                            <br/>

                        <div>
                            <p style='text-align:center;'>You Payment have been approved. </p>
                            <p style='text-align:center; color:blue;'>".$proofid."</p>
                            <p style='text-align:center;'> Thanks for choosing Space Exclusive Group and trusting our services. </p>
                        </div>


                        <hr style:'color:#fff; width:150px; align:center;'>

                        <div style='text-align: justify;'>

                            <h3 style='color:#fff;text-align:center; padding: 15px 0; background-color:#083d6b;'>NOTE!!</h3>


                            <p style='text-align:center;'>Your're receiving this email because you registered with Space Exclusive Group</p>

                            <h4 style='text-align:center; color: #083d6b'>Space Exclusive Group © 2022 All Rights Reserved</h4>

                        </div>
                    </div>
                </body>
        </html>
        ";

        $mail->Body    = $email_template;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

	
	if (isset($_POST['approve'])) {

		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$proofid=mysqli_real_escape_string($conn,$_POST['invid']);

	    $otp = uniqid();

		// echo $email;
		// echo $fname;

		sendEmail_Otp("$email", "$proofid");



		header("Location:../adminproof.php?success");
		exit();

	}else{
		header("Location:../adminproof.php?error");
		exit();
	}