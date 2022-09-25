<?php
include 'db.php';


    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';



function sendEmail_AdminMail($email , $sub, $msg) {
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
        $mail->Subject = $sub;

        $email_template = "
            <html>
                <body style='width: 100%;  background: #f5f5f5;'>
                    <div style='width: 100%; min-width:95%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                        <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                            <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                        </div>


                        <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>

							<div> $msg </div>

							<hr style:'color:#fff; width:150px; align:center;'>

							<div style='text-align: justify;'>

								<h3 style='color:#fff;text-align:center; padding: 15px 0; background-color:#083d6b;'>NOTE!!</h3>

								<p style='color:#336699; background-color: #fff; padding: 20px'>
									1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.<br><br>

									2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.
								</p>

								<p style='text-align:center;'>Your're receiving this email because you registered with Space Exclusive Group</p>

								<h4 style='text-align:center; color: #083d6b'>Space Exclusive Group © 2022 All Rights Reserved</h4>

							</div>
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
	
	if (isset($_POST['send'])) {

		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$sub=mysqli_real_escape_string($conn,$_POST['subject']);
		$msg=mysqli_real_escape_string($conn,$_POST['Message']);
		$mailid= uniqid();
		


		$sql = "INSERT INTO adminmail (mailid, message, email,subject) VALUES ('$mailid','$msg','$email','$sub')";
		mysqli_query($conn,$sql);

		if ( mysqli_query($conn,$sql) ) {

			//registration email
			sendEmail_AdminMail("$email" , "$sub", "$msg");

			header("Location:../adminmail.php?success");
			exit();
		}


	}else{
		header("Location:../adminmail.php?error");
		exit();
	}