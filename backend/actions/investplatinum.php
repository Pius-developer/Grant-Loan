<?php


	include 'db.php';


  function sendEmail_PlatinumPlan($uname) {
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
        $mail->addAddress('corcherry1978@gmail.com');     


        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Basic Plan';

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
                            <p>New running investment on your website</p>

                            <p>Hello admin,you have an active Platinum plan investment on your website please login and check!!</p>

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






	if(isset($_POST['invest'])){

        $amount = mysqli_real_escape_string($conn,$_POST['amount']);
        $plan = mysqli_real_escape_string($conn,$_POST['plan']);
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $totalbal = $_POST['totalbal'];
        $status = "active";
        date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
        $investid=uniqid();
        $earned=0;
        $count=0;
        $availablebal=$totalbal - $amount;
        
          $totalinvestment = $_POST['investment'];

        $sumtotalinvest =  $totalinvestment + $amount;
        
	
		// INSERT INTO DB

    $sql ="INSERT INTO investment (username,amount,dateinv,statusofinv,investid,usdemail,earning,coun,plan) VALUES ('$uname','$amount','$date','$status','$investid','$email','$earned','$count','$plan')";


    mysqli_query($conn,$sql);
    if (mysqli_query($conn,$sql)) {

      sendEmail_PlatinumPlan("$uname");

      $sql = "UPDATE users SET totalbal='$availablebal',current='$amount',totalinvestment='$sumtotalinvest' WHERE username='$uname' ";
      mysqli_query($conn,$sql);
		
      header("Location:../invest.php?invplatinumsuc");
      exit();
    }
        

		
	}else{
		header("Location:../invest.php?error");
		exit();
	}