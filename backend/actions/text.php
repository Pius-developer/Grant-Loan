//registeration email
$to = $email;
$subject = 'Welcome To  Space Exclusive Group';
$from = 'support@spaceexclusivegroup.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
'Reply-To: '.$from."\r\n" .
'X-Mailer: PHP/' . phpversion();

    // Compose a simple HTML email message
    // <img src="http://www.yourserver.com/myimages/image1.jpg

$message = " <html><body style='width:100%;'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b; text-align:center;'><span style='color:#336699'>SPACE EXCLUSIVE</span>GROUP</h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='margin-left:30%;'>";


// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ". $fname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 253, 256);margin: auto;border-radius: 6px;'>";

$message.="<p style='color:#08237e;text-align:center; padding:20px; background-color:#fff;'><strong>WELCOME TO Space Exclusive Group</strong></p>";


$message.="<p>Your registration was successful and we are glad you are part of us.

        To start earning,login to your dashboard, make a deposit into your wallet, then choose an investment plan that suits your target. Remember, the higher the investment, the higher the ROI(Return On Investment).</p>";
$message.="<p style='text-align:Your user id is: ". $userid. ".</p>";



$message.="<h3 style='color:#336699;text-align:center; padding:20px; background-color:#fff;'> Mail Verification </h3>";


$message.="<p>Click on the link below to verify your email<br> https://www.Space Excluxive Group.com/login.php?verify</p><br>";



$message.="<p>Choose an investment plan, invest and grow your financial dreams because the best is now.</p>";
$message.="<p>Your financial growth is our outmost interest, follow our terms and conditions and your financial freedom is guaranted.</p>";


$message.="<h3 style='color:#08237e;text-align:center; padding:20px; background-color:#fff;'> KYC Verification </h3>";

$message.="<p>In order to fully verify your account, we will just require the following documents: Government approved Licence, SSN (Social Security Number), Drivers Licence(optional), Selfie. To proceed, login to your dashboard and navigate to kyc verification. This allows us to 100% ensure that no one is ever compromising your account security especially in larger transactions. </p>";

$message.="<p>Your details and informations are secured with our high level encription database. Keep them private and don't share with third party</p><br><br><br>";


$message.="<h3 style='color:#336699;text-align:center; padding:20px; background-color:#fff;'>Need Help? </h3>";
$message.="<p>For complaints or futher clearification, visit our website: www.Space Excluxive Group.com  and contact us .</p>";
$message.="<p>For instant support, contact support via the website live chat and our support team of experts will be happy to help you onboarding.</p>";
$message.="<p> You can simply reply our email via <span  style='color:#fff;padding:10px; background-color:#08237e;'> support@spaceexclusivegroup.com </span></p>";
$message.="<p> Start investing right away to earn outrightly!!.</p>";
$message.= "</div> ";
$message.= "<hr style:'color:#fff; width:150px; align:center;'> ";
$message.="<h5 style='color:#08237e;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.<br><br>

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";

$message.="<p>Your're receiving this email because you registered with Space Excluxive Group</p>";

$message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);
mysqli_query($conn,$sql);




<!-- REFERRAL EMAIL -->

$to = $emailr;
$subject = 'REFERAL NOTIFICATION';
$from = 'support@spaceexclusivegroup.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// // Compose a simple HTML email message


$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#336699'>SPACE EXCLUSIVE</span>GROUP</h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65'>";

$message.=  "<h4 style='padding: 1px;'>Hello ".$fnr." </h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>".$fname." ".$ln." "." Just registered using your Referral Link</p>";

$message.="<h3 style='text-align:center; color:#08237e;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@spaceexclusivegroup.com</p>";

$message.= "<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";

$message.= "
    <p style='color:#fff; background-color:#000;'>
        1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.<br>

        2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.
    </p>"
;

$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

mysqli_query($conn,$sql);


<!-- WITHDRAWAL REQUEST EMAIL -->
$mailTo = "corcherry1978@gmail.com";
               $header = "support@spaceexclusivegroup.com";
            $sub = "You have recieved a withdrawal request from ".$uname." from your website";
            // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
            // "\n\n"."type:".$type;        
            
            $txt="Hello Boss, you have a new withdrawal on your website login and check your dashboard.";
            
            mail($mailTo,$sub,$txt,$header);


            
<!-- TRANSACTION STATUS -->
$to = $usdemail;
        $subject = 'ACCOUNT HAS BEEN CREDITED';
        $from = 'support@spaceexclusivegroup.com';
        
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
        $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>SPACE EXCLUSIVE</span> GROUP</h3>";
        // LOGO HERE
        $message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65' style='margin-left:40%'>";

        $message.=  "<h4 style='padding: 1px;'>Dear ". $usd .",</h4> ";
        $message.= " <br>";
        $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

        $message.="<p style='text-align:center;'><strong>Your Deposit of $".$amount." have been confirmed </strong></p>";

        $message.="<p style='text-align:center;'>Thanks for choosing Space Excluxive Group and trusting our services.</p>";


        $message.="<p style='text-align:center;'>Log into your dashboard to invest and start earning.</p>";


        $message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


        $message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@spaceexclusivegroup.com</p>";

        $message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
        $message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

            2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";




        $message.= "</div> ";
        $message .=  "<p style='text-align:center;'>Space Exclusive Group ©2022 All Rights Reserved</p> ";
        $message.=  " </div>";
        $message.=  "</div>";
        $message.=  "</body></html>";

        mail($to, $subject, $message, $headers);

<!-- PASSWORD -->

$to = $email;
$subject = 'Password';
$from = 'support@spaceexclusivegroup.com';
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#336699' style='text-align:center;'><span style='color:#083d6b'>SPACE EXCLUSIVE</span>GROUP</h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='50'margin-left='30%'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$usd.",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p style='text-align:center;'> Your password is ". $pwd." </p>";

$message.="<p style='text-align:center;'> Keep your details safe/secret and don't share to any third party in order not to compromise your account. </p>";

$message.="<p style='text-align:center;'> Thanks for chosing Space Exclusive Group and trusting our services. </p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via <span style='color#fff; background-color:#336699; padding:8px;'>support@safecapitalfx.com</span></p>";
$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";


$message.= "</div> ";
 $message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";
mail($to, $subject, $message, $headers);

<!-- PASSWORD OTP -->
$to = $email;
$subject = "Space Excluxive Group withdrawal otp";
$from = "support@spaceexclusivegroup.com";
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>OTP VERIFICATION</span></h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65'>";

$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<h3 style='text-align:center; color:#336699;'>Hello, ".$fname." </h3>";

$message.="<p style='text-align:center;'>You have initiated a withdrawal request, use the OTP below to complete your request. </p>";

$message .=  "<p style='text-align:center; color:blue;'>".$otp."</p> ";


$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@spaceexclusivegroup.com</p>";

$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";


$message.= "</div> ";
 $message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

<!-- PAY LOAN -->
$to = $email;
$subject = 'Loan Confirmation';
$from = 'support@spaceexclusivegroup.com';
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>SAFE</span>CAPITALFX</h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65' style='margin-left:50%'>";

$message.=  "<h4 style='padding: 10px;' style='text-align:center;'>Congratulations ". $uname .",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p style='text-align:center;'><strong>Your Loan of $".$amount." has been received  and processed. Due to your steadfast participation and advertisement/referrals, You're rewarded with the loan</strong></p>";


$message.="<p style='text-align:center;'>Thanks for chosing Space Excluxive Group.</p>";
$message.="<p style='text-align:center;'>Log in your dashboard to invest and start earning.</p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@spaceexclusivegroup.com</p>";

$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";




$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Space Exclusive Group ©2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);



<!-- WITHDRAWAL  -->
$to = $usdemail;
$subject = 'Successful Withdrawal';
$from = 'support@Spaceexclusivegroup.com';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#336699'><span style='color:#083d6b'>FOREX EXCHANGE </span>TIME</h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65' style='margin-left:50%'>";

$message.=  "<h4 style='padding: 1px;'>Dear ".$fname ."</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
$message.="<p>Your withdrawal of  $".$amount." has been approved.</p>";
$message.="<p>The payment is currently being processed. and credicted to your wallet address.</p>";
$message.="<p>Please, check your wallet address with the address ".$btc ."</p>";

$message.="<p>Thanks for trusting Space Excluxive Group. Stay connected, invest more and enjoy other benefits like loan and support signals</p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@Spaceexclusivegroup.com</p>";


$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";



$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Space Exclusive Group ©2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";
mail($to, $subject, $message, $headers);



<!-- DEPOSITE -->
$mailTo = "corcherry1978@gmail.com";
              $header = "support@spaceexclusivegroup.com";
              $sub = "You have recieved a deposit Request from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="Hello Admin, you have a new deposit on your website login and check!!";
              
              mail($mailTo,$sub,$txt,$header);

<!-- OTP -->
//registeration email
$to = $email;
$subject = "Space Excluxive Group withdrawal otp";
$from = "support@spaceexclusivegroup.com";
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>OTP VERIFICATION</span></h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65'>";

$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<h3 style='text-align:center; color:#336699;'>Hello, ".$fname." </h3>";

$message.="<p style='text-align:center;'>You have initiated a withdrawal request, use the OTP below to complete your request. </p>";

$message .=  "<p style='text-align:center; color:blue;'>".$otp."</p> ";


$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@spaceexclusivegroup.com</p>";

$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";


$message.= "</div> ";
 $message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);



<!-- KYC VERIFICATION -->

    <!-- KYC VERIFY Email to Admin -->
    $mailTo = "corcherry1978@gmail.com";//change the email address
      $header = "support@spaceexclusivegroup.com";
      $sub = "New Verification Request from: ".$username;
      $txt = "Hello Admin, you have a new verification request from: "."\n\n"."Username: ".$username."\n\n"."Email: ".$useremail;
     
      mail($mailTo,$sub,$txt,$header);


    <!-- KYC VERIFY Email to register -->
    $to = $email;
$subject = 'Verification';
$from = 'support@spaceexclusivegroup.com';
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>KYC</span> VERIFICATION</h3>";
// LOGO HERE

$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ". $uname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>Your kyc verification has been received and will be reviewed shortly. This may take 24 hours in order to validate the informations you provided us with.</p>";


$message.="<p>Your are informations are secured with our high encryption database and cannot be shared with third party</p>";



$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@spaceexclusivegroup.com</p>";


$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";



$message.= "</div> ";
 $message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers)


<!-- BASIC PLAN -->

$mailTo = "corcherry1978@gmail.com";
        $header = "support@spaceexclusivegroup.com";
        $sub = "new runing investment on your website";
        $txt="hello admin,you have an active Basic plan investment on your website please login and check!!";
            
        mail($mailTo,$sub,$txt,$header);


<!-- PLATINUM PLAN -->
$mailTo = "corcherry1978@gmail.com";
$header = "support@spaceexclusivegroup.com";
$sub = "new runing investment on your website";
$txt="hello admin,you have an active platinuim plan investment on your website please login and check!!";

mail($mailTo,$sub,$txt,$header);


<!-- GOLD PLAN -->

$mailTo = "corcherry1978@gmail.com";
$header = "support@spaceexclusivegroup.com";
$sub = "new runing investment on your website";
$txt="hello admin,you have an active Standard plan investment on your website please login and check!!";

mail($mailTo,$sub,$txt,$header);


<!-- DIAMOND PLAN -->
$mailTo = "corcherry1978@gmail.com";
$header = "support@spaceexclusivegroup.com";
$sub = "new runing investment on your website";
$txt="hello admin,you have an active Diamond plan investment on your website please login and check!!";

mail($mailTo,$sub,$txt,$header);




<!-- AUTO BASIC EMAIL -->
//send mail to investors of this silver plan
    $to = $usdemail;
    $subject = 'BASIC INVESTMENT PROFIT ALERT';
    $from = 'support@spaceexclusivegroup.com';
     
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
    $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>SPACE EXCLUSIVE</span>GROUP</h3>";
    // LOGO HERE
    $message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65'>";
    // LOGO HERE
    // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
    $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
    $message.= " <br>";
    $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
    $message.="<p>Your Basic investment circle has been completed for today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";

    $message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";
   
    $message.= "</div> ";
    $message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
    $message.=  " </div>";
    $message.=  "</div>";
    $message.=  "</body></html>";
    mail($to, $subject, $message, $headers);



    <!-- ADMIN MAIL TO USER -->
    $to = $email;
$subject = $sub;
$from = "support@spaceexclusivegroup.com";
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>Space Excluxive Group</span></h3>";
// LOGO HERE
$message.=  "<img src='http://www.spacexclusivegroup.com/assets/img/bo.png' alt='logo' width='100' height='65'>";
// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
//$message.=  "<h4 style='padding: 1px;'>Hello ".$fname." ". $uname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.= $msg;

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@spaceexclusivegroup.com</p>";

$message.="<h5 style='color:#336699;text-align:center; padding:10px; background-color:#fff;'>Note!!</h5>";
$message.="<p style='color:#fff; background-color:#000;'>1.Confidentiality: This e-mail and any files transmitted with it are confidential and intended solely for the use of the recipient(s) only. Any review, retransmission, dissemination or other use of, or taking any action in reliance upon this information by persons or entities other than the intended recipient(s) is prohibited. If you have received this e-mail in error please notify the sender immediately and destroy the material whether stored on a computer or otherwise. Space Exclusive Group accepts no liability for the content of this email, or for the consequences of any actions taken on the basis of the information provided.

    2.Disclaimer: Any views or opinions presented within this e-mail are solely those of the author and do not necessarily represent those of Space Exclusive Group, unless otherwise specifically stated. The content of this message does not contain or constitute financial recommendation or advice.</p>";

$message.= "</div> ";
 $message .=  "<p style='text-align:center;'>Space Exclusive Group © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);