<?php
include 'db.php';

     //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    
function sendEmail_VerifyRequest($username , $useremail) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.spaceexclusivegroup.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'support@spaceexclusivegroup.com';                     //SMTP username
        $mail->Password   = 'Blessing@123';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('support@spaceexclusivegroup.com');
        $mail->addAddress('corcherry1978@gmail.com');     //Add a recipient

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Verification Request';

        $email_template = "
            <html>
            <body style='width: 100%;  background: #f5f5f5;'>
                <div style='width: 100%; min-width:75%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                        <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                        <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                        </div>

                        <div style='width:70%; margin: 5px 0;'>
                        <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
                            <h3 style='padding: 1px;font-family: roboto; color:#fff; text-align:center; font-size: 18px'>Space Exclusive Group</h3>
                        </div>
                        </div>

                        <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                            <h4>New Verification Request from: $username</h4>
                            <br/>
                            <p>Hello Admin, you have a new verification request from: <br/>
                                Username: $username. <br/><br/>
                                Email: $useremail .
                            </p>

                            <p>Hello Boss, you have a new verification request on your website login and check!!</p>

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


    function sendEmail_KycVerify($uname, $email) {
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
        $mail->Subject = 'Verification';

        $email_template = "
            <html>
                <body style='width: 100%;  background: #f5f5f5;'>
                    <div style='width: 100%; min-width:95%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                        <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                            <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                        </div>

                        <div style='width:100%; margin: 5px 0;'>
                          <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
						  	<h3 style='padding: 1px;font-family: Georgia; color:#FFFF'><span style='color:#FFF'>KYC VERIFICATION</span></h3>
                          </div>
                        </div>


                        <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                            <h4 style='text-align:center; color:#336699;'>Hello,  $uname , </h4>
                            
                            <br/>

                        <div>
                            <p>Your kyc verification has been received and will be reviewed shortly. This may take 24 hours in order to validate the informations you provided us with.</p>
                            <p>Your are informations are secured with our high encryption database and cannot be shared with third party</p>

                            <p style='text-align:center;'> Thanks for choosing Space Exclusive Group and trusting our services. </p>
                        </div>


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




	if(isset($_POST['upload'])){
		

        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $gov = mysqli_real_escape_string($conn,$_POST['id']);
        $country = mysqli_real_escape_string($conn,$_POST['coun']);

		date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
		$kycid=uniqid();
		// IMAGE 
        $selfie = $_FILES['selfie']['name'];
		$validid = $_FILES['validid']['name'];
		// $ssn = $_FILES['ssn']['name'];
		$license = $_FILES['lin']['name'];

        //path to file
        // $target1 = "../kyc/".basename($_FILES['selfie']['name']);
        
        $target2 = "../kyc/".basename($_FILES['validid']['name']);

        // $target3 = "../kyc/".basename($_FILES['ssn']['name']);
        
        // $target4 = "../kyc/".basename($_FILES['lin']['name']);

		// INSERT INTO DB

		$sql ="INSERT INTO kyc (dateup,idcard,gov,country,username,kid) VALUES ('$date','$validid','$gov', '$country','$uname','$kycid')";

		move_uploaded_file($_FILES['validid']['tmp_name'], $target2);
		// move_uploaded_file($_FILES['selfie']['tmp_name'], $target1);
		// move_uploaded_file($_FILES['ssn']['tmp_name'], $target3);
		// move_uploaded_file($_FILES['lin']['tmp_name'], $target4);

		mysqli_query($conn,$sql);
        if (mysqli_query($conn,$sql) ) {

            // send mail to admin..
            sendEmail_VerifyRequest("$username" , "$useremail");

            //registeration email
            sendEmail_KycVerify("$uname", "$email");

            header("Location:../kyc.php?uploadsuc");
		    exit();
        }else {

            echo "kyc verification email failed";
        }


		
	}else{
		header("Location:../kyc.php?error");
		exit();
	}