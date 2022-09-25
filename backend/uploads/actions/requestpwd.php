<?php
    // session_start();

    if(isset($_POST['send'])){

         include 'db.php';

         $uname = mysqli_real_escape_string($conn,$_POST['uname']);

         if(empty($uname)){

             header("Location:../forgot.php?inputempty");
            exit();


         }else{

             $sql = "SELECT * FROM users WHERE username='$uname'";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                 header("Location:../forgot.php?invaliduid");
                exit();
            }else{
                while($data = mysqli_fetch_assoc($result)){
                    $usd =$data['username'];
                    $email =$data['email'];
                    $pwd =$data['pwd'];



                    // SEND MAIL FOR FORGETTEN PASSWORD

$to = $email;
$subject = 'Password';
$from = 'safe@safecapitalfx.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message


$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#336699' style='text-align:center;'><span style='color:#083d6b'>SAFE</span>CAPITALFX</h3>";
// LOGO HERE
$message.=  "<img src='https://www.safetrade-capital.com/assets/img/bo.png' alt='logo' width='80' height='65'margin-left='30%'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$usd.",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p style='text-align:center;'> Your password is ". $pwd." </p>";

$message.="<p style='text-align:center;'> Keep your details safe/secret and don't share to any third party in order not to compromise your account. </p>";

$message.="<p style='text-align:center;'> Thanks for chosing Safecapitalfx and trusting our services. </p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@safecapitalfx.com</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Safecapitalfx © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);








                    
                    header("Location:../login.php?mailforgottensentsuc");
                    exit();

                }
            }




         }









    }else{
          header("Location:../forgotpwd.php?loginempty");
            exit();
    }