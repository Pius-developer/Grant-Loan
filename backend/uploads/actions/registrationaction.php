<?php
include 'db.php';



    if(isset($_POST["register"])){
        

        // GET THE DATA from user

        $uname=mysqli_real_escape_string($conn,$_POST['uname']);
        $fname=mysqli_real_escape_string($conn,$_POST['fname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $country=mysqli_real_escape_string($conn,$_POST['country']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        // $btc=mysqli_real_escape_string($conn,$_POST['btc']);

         
        //this is the admin defined values
        $refidd=$_POST['refidd'];
        $amountpaid=0;
         $totalbal = 0;
        $totalwith  = 0;
        $lastdep=0;
        $earn = 0;
         $withdrawl  = 0;
         $refpay="not";
         $date=date("Y/m/d");



    if(strlen(trim($pwd)) < 5){
        header("Location:../register.php?passwordshort");
        exit();
    }
        
         //VALIDATE
 if (empty($uname)|| empty($fname)|| empty($email)|| empty($country)||empty($phone) || empty($pwd) ) {

                header ("Location:../register.php?signupempty");
                exit();
             
         }else{
           //VALIDATE EMAIL
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                header ("Location:../register.php?invalidemail");
                exit();

            }else{

                $sql = "SELECT * FROM users WHERE username='$uname';";
                $result = mysqli_query($conn,$sql);
                $result_check = mysqli_num_rows($result);

                if($result_check > 0){

                    header ("Location:../register.php?uidtaken");
                    exit();

                }else{

                    //harsh the password
                   // $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

                    // unique reference id
                     // $refcode = uniqid($usd,true);

$sql = "INSERT INTO users(username,fullname,email,pwd,country,phone,totalbal,totalwith,lastdeposit,earn,lastwith,registerdate,refpaid) VALUES ('$uname','$fname','$email','$pwd','$country','$phone','$totalbal','$totalwith','$lastdep','$earn','$withdrawl','$date','$refpay')";

//registeration email
$to = $email;
$subject = 'Welcome To  safecapitalfx';
$from = 'safe@safecapitalfx.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
// <img src="http://www.yourserver.com/myimages/image1.jpg

$message = " <html><body style='width:100%;background: rgb(204, 225, 225);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b; text-align:center;'><span style='color:#336699'>SAFE</span>CAPITALFX</h3>";
// LOGO HERE
$message.=  "<img src='https://www.safecapitalfx.com/assets/img/bo.png' alt='logo' width='90' height='65'>";


// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ". $uname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 253, 256);margin: auto;border-radius: 6px;'>";

$message.="<p style='color:#336699;'><strong>WELCOME TO SAFE CAPITALFX</strong></p>";


$message.="<p>Your registration was successful and we are glad you are part of us.
           To start earning,login to your dashboard, make a deposit into your wallet, then choose an investment plan that suits your target. Remember, the higher the investment, the higher the ROI(Return On Investment).</p>";

$message.="<p>Choose an investment plan, invest and grow your financial dreams because the best is now.</p>";
$message.="<p>Your financial growth is our outmost interest, follow our terms and conditions and your financial freedom is guaranted.</p>";


$message.="<h3 style='color:#336699;'> KYC Verification </h3>";

$message.="<p>In order to fully verify your account, we will just require the following documents: Government approved Licence, SSN (Social Security Number), Drivers Licence(optional), Selfie. To proceed, login to your dashboard and navigate to kyc verification. This allows us to 100% ensure that no one is ever compromising your account security especially in larger transactions. </p>";

$message.="<p>Your details and informations are secured with our high level encription database. Keep them private and don't share with third party</p><br><br><br><br>";


$message.="<h3 style='color:#336699;'>Need Help? </h3>";
$message.="<p>For complaints or futher clearification, visit our website: www.safecapitalfx.com  and contact us .</p>";
$message.="<p>For instant support, contact support via the website live chat and our support team of experts will be happy to help you onboarding.</p>";
$message.="<p> You can simply reply our email via support@safecapitalfx.com</p>";
$message.="<p> Start investing right away to earn outrightly!!.</p>";
$message.= "</div> ";


$message.="<p>Your're receiving this email because you registered with safecapitalfx</p>";
$message.="<pstyle='text-align:center;'>Southampton, UK.</p>";
$message .=  "<p style='text-align:center;'>safecapitalfx © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);
 mysqli_query($conn,$sql);


                // WOEKING ON THE REFERENCE TABLE

             if($refidd == ''){

               }else{

                      $sql = "INSERT INTO reftable (username,email,fullname,phone,linkrefid,amountpaid) VALUES ('$uname','$email','$fname','$phone','$refidd','$amountpaid')";

                         mysqli_query($conn,$sql);



                         //sending referal mail notifications

                         if($refidd == ""){


                        }else{

                            $sql = "SELECT * FROM users WHERE username='$refidd' ";
                           $result = mysqli_query($conn,$sql);
                            $result_check = mysqli_num_rows($result);

                               if($result_check > 0){

                                      while($data = mysqli_fetch_assoc($result)){
                                        $fnr = $data['username'];
                                         $lnr= $data['fullname'];
                                            $emailr= $data['email'];


                                          // REFERAL EMAIL MSGE

 $to = $emailr;
 $subject = 'REFERAL NOTIFICATION';
 $from = 'safe@safecapitalfx.com';
 
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
 $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#336699'>SAFE</span>CAPITALFX</h3>";
 // LOGO HERE
 $message.=  "<img src='https://www.safecapitalfx.com/assets/img/bo.png' alt='logo' width='100' height='65'>";

$message.=  "<h4 style='padding: 1px;'>Hello ".$fnr." </h4> ";
 $message.= " <br>";
 $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

 $message.="<p>".$fname." ".$ln." "." Just registered using your Referral Link</p>";

 $message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@safecapitalfx.com</p>";


 $message.= "</div> ";
 $message .=  "<p style='text-align:center;'>safecapitalfx © 2022 All Rights Reserved</p> ";
 $message.=  " </div>";
 $message.=  "</div>";
 $message.=  "</body></html>";


 mail($to, $subject, $message, $headers);

  mysqli_query($conn,$sql);




         }
                            }

                         }




                     // END OF REFREAL LINL
                 }












             header ("Location:../login.php?signupsuc");
                 exit();


                }


            }



         }


        
    }else{
        header ("Location:../register.php?error");
        exit();
    }
