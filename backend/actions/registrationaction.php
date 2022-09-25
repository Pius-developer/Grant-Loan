<?php
    include 'db.php';

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';


    // REGISTRATION EMAIL FUNCTION
function sendEmail($uname, $email) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'skgwebb01@gmail.com';                     //SMTP username
        $mail->Password   = 'ivjejwzkuwcejgua';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('skgwebb01@gmai.com');
        $mail->addAddress($email , $uname);     //Add a recipient

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Verification From Space Exclusive Group';

        $email_template = "
            <html>
                <body style='width: 100%;  background: #f5f5f5;'>
                    <div style='width: 100%; min-width:75%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                        <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                            <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                        </div>

                        <div style='width:100%; margin: 5px 0;'>
                            

                            <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
                                <h3 style='padding: 1px;font-family: roboto; color:#fff; text-align:center; font-size: 18px'>welcome to Space Exclusive Group</h3>
                            </div>
                        </div>

                        <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                            <h2>Hello $uname </h2>
                            

                            <div style='margin: 10px 0; text-align: center;'>
                                <p>
                                    Your registration was successful and we are glad you are part of us. To start earning,login to your dashboard, make a deposit into your wallet, then choose an investment plan that suits your target. Remember, the higher the investment, the higher the ROI(Return On Investment).
                                </p>
                                <br/>

                                <h3 style='color:#083d6b;text-align:center; padding: 20px 0; background-color:#fff; margin-bottom: 20px;'> Mail Verification </h3>
                                <p>Click on the link below to verify your email</p>
                                <br> 
                                <a href='https://www.spaceexclusivegroup.com/login.php?verify' style='padding: 15px 30px; border-radius: 10px; text-decoration: none; font-size: 14px; font-weight: 600; text-align: center; color: #fff; background-color: #083d6b;'>VERIFY</a>
                                <br/>
                                <br/>

                                <p style='margin-top: 10px; display: block;'>Choose an investment plan, invest and grow your financial dreams because the best is now.</p>

                                <p>Your financial growth is our outmost interest, follow our terms and conditions and your financial freedom is guaranted.</p>

                                <h3 style='color:#083d6b;text-align:center; padding:20px; background-color:#fff; margin: 20px 0;'> KYC Verification </h3>
                                <p>
                                    In order to fully verify your account, we will just require the following documents: Government approved Licence, SSN (Social Security Number), Drivers Licence(optional), Selfie. To proceed, login to your dashboard and navigate to kyc verification. This allows us to 100% ensure that no one is ever compromising your account security especially in larger transactions. 
                                </p>
                                <p>Your details and informations are secured with our high level encription database. Keep them private and don't share with third party</p>
                                <br/>

                                <h3 style='color:#336699;text-align:center; padding: 20px ; background-color:#fff; margin-bottom: 20px;'>Need Help? </h3>
                                <p>For complaints or futher clearification, visit our website: www.Space Excluxive Group.com  and contact us .</p>
                                <p>For instant support, contact support via the website live chat and our support team of experts will be happy to help you onboarding.</p>
                                <p> 
                                    You can simply reply our email via <span  style='color:#083d6b; padding: 10px;  text-decoration: none;'> support@spaceexclusivegroup.com </span>
                                </p>

                                <p> Start investing right away to earn outrightly!!.</p>
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
                    </div>
                </body>
            </html>
        ";

        $mail->Body    = $email_template;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}



// REFERRAL EMAIL FUNCTION
function sendEmail_Referer($uname, $emailr, $fnr, $lnr) {
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
        $mail->addAddress($emailr);     //Add a recipient

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'REFERRAL NOTIFICATION';

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
                            <h4 style='padding: 1px;'>Hello $fnr </h4>
                            <br/>
                            <p>.$uname $lnr Just registered using your Referral Link</p>
                            
                            <div style='margin: 10px 0; text-align: center;'>

                                <h3 style='color:#336699;text-align:center; padding: 20px ; background-color:#fff; margin-bottom: 20px;'>Need Help? </h3>
                                <p>For complaints or futher clearification, visit our website: www.Space Excluxive Group.com  and contact us .</p>
                                <p>For instant support, contact support via the website live chat and our support team of experts will be happy to help you onboarding.</p>
                                <p> 
                                    You can simply reply our email via <span  style='color:#083d6b; padding: 10px;  text-decoration: none;'> support@spaceexclusivegroup.com </span>
                                </p>

                                <p> Start investing right away to earn outrightly!!.</p>
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
                    </div>
                </body>
            </html>
        ";

        $mail->Body    = $email_template;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


    if(isset($_POST["register"])){
        

        // GET THE DATA from user

        $uname=mysqli_real_escape_string($conn,$_POST['uname']);
        $fname=mysqli_real_escape_string($conn,$_POST['fname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $country=mysqli_real_escape_string($conn,$_POST['country']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        // $btc=mysqli_real_escape_string($conn,$_POST['btc']);
        
        $compwd =mysqli_real_escape_string($conn,$_POST['compwd']);

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
        $userid = uniqid();
        $totalinvestment =0;



        if(strlen(trim($pwd)) < 5){
            header("Location:../../register.php?passwordshort");
            exit();
        }
    
        if($pwd != $compwd ){
            header("Location:../../register.php?comfirmpass");
            exit();
        }
        
        // VALIDATE
        if (empty($uname)|| empty($fname)|| empty($email)|| empty($country)||empty($phone) || empty($pwd) ) {

                header ("Location:../../register.php?signupempty");
                exit();

        }else{
            //VALIDATE EMAIL
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                header ("Location:../../register.php?invalidemail");
                exit();

            }else{

                $sql = "SELECT * FROM users WHERE username='$uname';";
                $result = mysqli_query($conn,$sql);
                $result_check = mysqli_num_rows($result);

                if($result_check > 0){

                    header ("Location:../../register.php?uidtaken");
                    exit();

                }else{


                    $sql = "INSERT INTO users(username,fullname,email,pwd,country,phone,totalbal,totalwith,lastdeposit,earn,lastwith,registerdate,refpaid, totalinvestment) VALUES ('$uname','$fname','$email','$pwd','$country','$phone','$totalbal','$totalwith','$lastdep','$earn','$withdrawl','$date','$refpay','$totalinvestment')";
                    $sql_result = mysqli_query($conn , $sql);

                    if(!$sql_result) {
                        echo "couldn't insert into database";
                    }else {
                        sendEmail("$uname", "$email");
                    }
                    
                    header ("Location:../../verifymail.php?signupsuc $email");
                    exit();



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

                                    sendEmail_Referer("$fnr", "$lnr", "$emailr", "$uname");

                                }
                            }

                        }

                     // END OF REFREAL LINL
                    }

                    header ("Location:../../login.php?signupsuc");
                    exit();
                }

            }

        }


    }else{
        header ("Location:../register.php?error");
        exit();
    }


?>
