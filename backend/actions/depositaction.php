<?php

//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';



function sendEmail_Deposit($uname) {
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
        $mail->Subject = 'Deposit';

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
                            <p>You have received a deposit Request from your website</p>

                            <p>Hello Boss, you have a new deposit on your website login and check!!</p>

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

    if(isset($_POST['proceed']))    {
        include 'db.php';
        
        $trantype=$_POST['trantype'];
        $totalbal=$_POST['totalbal'];
        $uname=$_POST['uname'];
        $btc=$_POST['btc'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        
        $date= date('Y-m-d h:i:s');
        $status="pending";
        $depositid=uniqid();

        $sql = "INSERT INTO depositrequests (username,amount,dateofdep,statusofdep,depositid,totalbal,usdemail,transtype) VALUES ('$uname','$amount','$date','$status','$depositid','$totalbal','$email','$trantype')";

        mysqli_query($conn,$sql);

        if( mysqli_query($conn,$sql) ) {

            sendEmail_Deposit("$uname");
            header ("Location:../deposit.php?depsuc");
            exit();
        }

    }
 ?>