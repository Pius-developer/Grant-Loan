<?php
include 'db.php';


 //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    function sendEmail_PwdOtp($email, $fname, $otp) {
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
                    <div style='width: 100%; min-width:75%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                        <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                            <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                        </div>

                        <div style='width:100%; margin: 5px 0;'>
                          <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
                              <h3 style='padding: 1px;font-family: roboto; color:#fff; text-align:center; font-size: 18px'>Space Exclusive Group</h3>
                          </div>
                        </div>


                        <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                            <h3 style='text-align:center; color:#336699;'>Hello,  $fname </h3>
                            <br/>

                        <div>
                            <p style='text-align:center;'>You have initiated a withdrawal request, use the OTP below to complete your request. </p>
                            <p style='text-align:center; color:blue;'>".$otp."</p>
                            <p style='text-align:center;'> Thanks for chosing Space Exclusive Group and trusting our services. </p>
                        </div>


                        <hr style:'color:#fff; width:150px; align:center;'>

                        <div style='text-align: justify;'>

                            <h3 style='color:#fff;text-align:center; padding: 15px 0; background-color:#083d6b;'>NOTE!!</h3>

                            <p style='color:#336699; background-color: #fff; padding: 20px'>
                                1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.<br><br>

                                2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.
                            </p>

                            <p style='text-align:center;'>Your're receiving this email because you registered with Space Excluxive Group</p>

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


	
	if (isset($_POST['proceed'])) {

		$pwd =mysqli_real_escape_string($conn,$_POST['pass']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$fname=mysqli_real_escape_string($conn,$_POST['name']);

		$otp = uniqid();
		
// echo $email;
    

        if(empty($pwd) ){

            header("Location:../withcomfirm.php?loginempty");
            exit();


        }else{ 


         $sql = "SELECT * FROM users WHERE email ='$email' ";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                header("Location:../withcomfirm.php?invaliduid");
                exit();

            }else{

               if($row=mysqli_fetch_assoc($result)){

                $cpwd = $row['pwd'];
                
                   
				//de-hashed the password
                // $hashedpwd = password_verify($pwd, $row['pwd']);
                
                    if($pwd != $cpwd){
                    header("Location:../withcomfirm.php?invalidpassword");
                    exit();

                    }else{

                        //registeration email
                        sendEmail_PwdOtp("$email", "$fname", "$otp");
            
                        header("Location:../requestwith.php?success");
                        exit();

                    }

                }
            }
        }
        
	}else{
		header("Location:../withcomfirm.php?error");
		exit();
	}

                	
   
       