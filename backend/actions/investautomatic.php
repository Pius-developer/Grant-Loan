<?php
// EMAIL FUNCTIONS

// Emailfunction for Basic Plan

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    
function sendEmail_InvAutoBasicAdmin($uname , $newearning) {
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
        $mail->Subject = 'COMPLETED INVESTMENT';

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
                            <p>Hello Sir, you have a completed Basic investment from: <br/>

                                Username: $uname. <br/><br/>
                                Earned: $newearning .
                            </p>

                            <p>Hello Boss, you have a new completed investment on your website login and check!!</p>

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


    function sendEmail_InvAutoBasic($uname, $usdemail) {
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
        $mail->addAddress($usdemail);     


        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'BASIC INVESTMENT PROFIT ALERT';

        $email_template = "
            <html>
                <body style='width: 100%;  background: #f5f5f5;'>
                    <div style='width: 100%; min-width:95%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                        <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                            <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                        </div>

                        <div style='width:100%; margin: 5px 0;'>
                          <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
						  	<h3 style='padding: 1px;font-family: Georgia; color:#FFFF'><span style='color:#FFF'>PLAN COMPLETED</span></h3>
                          </div>
                        </div>


                        <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                            <h4 style='text-align:center; color:#336699;'>Dear,  $uname , </h4>
                            
                            <br/>

                        <div>
                          <p>
                            Your Basic investment circle has been completed for today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. 
                            </p>

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


// Email Function for Platinum Plan

function sendEmail_InvAutoPlatinumAdmin($uname , $newearning) {
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
      $mail->Subject = 'COMPLETED INVESTMENT';

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
                          <p>Hello Sir, you have a completed Platinum investment from: <br/>

                              Username: $uname. <br/><br/>
                              Earned: $newearning .
                          </p>

                          <p>Hello Boss, you have a new completed Investment on your website login and check!!</p>

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


  function sendEmail_InvAutoPlatinum($uname, $usdemail) {
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
      $mail->addAddress($usdemail);     


      //Content
      $mail->isHTML(true);                                  
      $mail->Subject = 'PLATINUM INVESTMENT PROFIT ALERT';

      $email_template = "
          <html>
              <body style='width: 100%;  background: #f5f5f5;'>
                  <div style='width: 100%; min-width:95%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                      <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                          <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                      </div>

                      <div style='width:100%; margin: 5px 0;'>
                        <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
              <h3 style='padding: 1px;font-family: Georgia; color:#FFFF'><span style='color:#FFF'>PLAN COMPLETED</span></h3>
                        </div>
                      </div>


                      <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                          <h4 style='text-align:center; color:#336699;'>Dear,  $uname , </h4>
                          
                          <br/>

                      <div>
                        <p>
                          Your Platinum investment circle has been completed for today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. 
                          </p>

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



// Email Function For Gold Plan

function sendEmail_InvAutoGoldAdmin($uname , $newearning) {
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
      $mail->Subject = 'COMPLETED INVESTMENT';

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
                          <p>Hello Sir, you have a completed Gold investment from: <br/>

                              Username: $uname. <br/><br/>
                              Earned: $newearning .
                          </p>

                          <p>Hello Boss, you have a new completed Investment on your website login and check!!</p>

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


  function sendEmail_InvAutoGold($uname, $usdemail) {
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
      $mail->addAddress($usdemail);     


      //Content
      $mail->isHTML(true);                                  
      $mail->Subject = 'GOLD INVESTMENT PROFIT ALERT';

      $email_template = "
          <html>
              <body style='width: 100%;  background: #f5f5f5;'>
                  <div style='width: 100%; min-width:95%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                      <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                          <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                      </div>

                      <div style='width:100%; margin: 5px 0;'>
                        <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
              <h3 style='padding: 1px;font-family: Georgia; color:#FFFF'><span style='color:#FFF'>COMPLETED PLAN</span></h3>
                        </div>
                      </div>


                      <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                          <h4 style='text-align:center; color:#336699;'>Dear,  $uname , </h4>
                          
                          <br/>

                      <div>
                        <p>
                          Your Gold investment circle has been completed for today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. 
                          </p>

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



// Email Function For Diamond Plan

function sendEmail_InvAutoDiamondAdmin($uname , $newearning) {
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
      $mail->Subject = 'COMPLETED INVESTMENT';

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
                          <p>Hello Sir, you have a completed Diamond investment from: <br/>

                              Username: $uname. <br/><br/>
                              Earned: $newearning .
                          </p>

                          <p>Hello Boss, you have a new completed investment  on your website login and check!!</p>

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


  function sendEmail_InvAutoDiamond($uname, $usdemail) {
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
      $mail->addAddress($usdemail);     


      //Content
      $mail->isHTML(true);                                  
      $mail->Subject = 'DIAMOND INVESTMENT PROFIT ALERT';

      $email_template = "
          <html>
              <body style='width: 100%;  background: #f5f5f5;'>
                  <div style='width: 100%; min-width:95%; max-width: 60%; height: auto; margin: 0 auto; border-radius: 5px;'>

                      <div style='width: calc(100% - 40%); min-height: 100px; margin-left: 40%; display: flex; justify-content: center; align-items: center;'>
                          <img src='https://www.spaceexclusivegroup.com/assets/img/bo.png' alt='logo' width='90' height='65' style='display: block; margin: auto 0;'>
                      </div>

                      <div style='width:100%; margin: 5px 0;'>
                        <div style='width: 100%;  margin: 0 10px; padding: 20px 0; background-color: #083d6b; text-align: center;'>
              <h3 style='padding: 1px;font-family: Georgia; color:#FFFF'><span style='color:#FFF'>PLAN COMPLETED</span></h3>
                        </div>
                      </div>


                      <div style='height: auto; width: 100%; padding: 15px; text-align: center;'>
                          <h4 style='text-align:center; color:#336699;'>Dear,  $uname , </h4>
                          
                          <br/>

                      <div>
                        <p>
                          Your Diamond investment circle has been completed for today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. 
                          </p>

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

//  EMAIL FUNCTION ENDS HERE 








function automateinvestment(){
	//session_start();
  include 'db.php';

  date_default_timezone_set('Africa/lagos');

	$sql = "SELECT * FROM  investment ";
  $result= mysqli_query($conn,$sql);
  $result_checker= mysqli_num_rows($result);

  if($result_checker > 0){
    while($data = mysqli_fetch_assoc($result)){

      $uname= $data['username'];
      $amount= $data['amount'];
      $dateofinv= $data['dateinv'];
      $invid= $data['investid'];
      $statusofinv= $data['statusofinv'];
      $usdemail= $data['usdemail'];
      $earning= $data['earning'];
      $count= $data['coun'];
      $plan= $data['plan'];
      $newstatus="due";
      //check investment plan
      $investdate = date_create($dateofinv);
      $currentdate = date_create(date("Y-m-d H:i:s", time())); 
      $date_diff =date_diff($investdate, $currentdate)->format("%a");
        //2020-08-12 02:54:52
        //for silver plan
      if($plan == "silver" && $statusofinv == "active" && $date_diff >= 4 && $count != 1){
        $newcount = $count + 1;
        $starterprofit = 4 * $amount;
        $starterinvprofit = $earning + $starterprofit;
        //once complete update status of investment

        $sql = "UPDATE investment SET earning='$starterinvprofit',coun='$newcount' WHERE investid='$invid' ";
        mysqli_query($conn,$sql);
        if ( mysqli_query($conn,$sql) ) {
          
          // send email to the user
          sendEmail_InvAutoBasic("$uname", "$usdemail");

          //update user earning to show on their dashboard for silver investment
          $sql = "SELECT * FROM users WHERE username ='$uname' ";
          $result= mysqli_query($conn,$sql);
          $result_checker= mysqli_num_rows($result);

          if($result_checker > 0){
            while($data = mysqli_fetch_assoc($result)){
              $uname= $data['username'];
              $earned= $data['earn'];
              $newearning = $starterinvprofit + $earned;

              $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";
              mysqli_query($conn,$sql);
              if ( mysqli_query($conn,$sql) ) {

                // send email to the admin
                sendEmail_InvAutoBasicAdmin("$uname" , "$newearning");
              }
            }
          }
        }
  



        //for gold plan
      }elseif($plan == "gold" && $statusofinv == "active" && $date_diff >= 4 && $count != 1){
        $newcount = $count + 1;
        $basicprofit = 4.8 * $amount;
        $basicinvprofit = $earning + $basicprofit;


        $sql = "UPDATE investment SET earning='$basicinvprofit',coun='$newcount' WHERE investid='$invid' ";
        mysqli_query($conn,$sql);

        if ( mysqli_query($conn,$sql) ) {

          //send mail to investors of this gold plan
          sendEmail_InvAutoGold("$uname", "$usdemail");


          //update user earning to show on their dashboard for silver investment
          $sql = "SELECT * FROM users WHERE username ='$uname' ";
          $result= mysqli_query($conn,$sql);
          $result_checker= mysqli_num_rows($result);

          if($result_checker > 0){

            while($data = mysqli_fetch_assoc($result)){
              $uname= $data['username'];
              $earned= $data['earn'];
              $newearning = $basicinvprofit + $earned;

              $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";
              mysqli_query($conn,$sql);

              //send admin notifications for gold plan
              sendEmail_InvAutoGoldAdmin("$uname" , "$newearning");
            }
          }
        }
        
      

      
        //for diamond plan
      }elseif($plan == "platinum" && $statusofinv == "active" && $date_diff >= 4 && $count != 1){
        $newcount = $count + 1;
        $monthlyprofit = 6 * $amount;
        $monthlyinvprofit = $earning + $monthlyprofit;

        $sql = "UPDATE investment SET earning='$monthlyinvprofit',coun='$newcount' WHERE investid='$invid' ";
        mysqli_query($conn,$sql);

        if( mysqli_query($conn,$sql) ) {

          //send mail to investors of this diamond plan
          sendEmail_InvAutoDiamond("$uname", "$usdemail");
          
          //update user earning to show on their dashboard for silver investment
          $sql = "SELECT * FROM users WHERE username ='$uname' ";
          $result= mysqli_query($conn,$sql);
          $result_checker= mysqli_num_rows($result);

          if($result_checker > 0){

            while($data = mysqli_fetch_assoc($result)){
              $uname= $data['username'];
              $earned= $data['earn'];
              $newearning = $monthlyinvprofit + $earned;

              $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";
              mysqli_query($conn,$sql);

              //send admin notifications for diamond plan
              sendEmail_InvAutoDiamondAdmin("$uname" , "$newearning");
            }
          }

        }
        
        


        //for platinum
      }elseif($plan == "yearly" && $statusofinv == "active" && $date_diff >= 4 && $count != 7){           
        $newcount = $count + 1;
        $yearlyprofit = 6.5 * $amount;
        $yearlyinvprofit = $earning + $yearlyprofit;


        $sql = "UPDATE investment SET earning='$yearlyinvprofit',coun='$newcount' WHERE investid='$invid' ";
        mysqli_query($conn,$sql); 

        if ( mysqli_query($conn,$sql) ) {

          //send mail to investors of this platinum plan
          sendEmail_InvAutoPlatinum("$uname", "$usdemail");

          
          //update user earning to show on their dashboard for silver investment
          $sql = "SELECT * FROM users WHERE username ='$uname' ";
          $result= mysqli_query($conn,$sql);
          $result_checker= mysqli_num_rows($result);

          if($result_checker > 0){

            while($data = mysqli_fetch_assoc($result)){
              $uname= $data['username'];
              $earned= $data['earn'];
              $newearning = $yearlyinvprofit + $earned;

              $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";
              mysqli_query($conn , $sql);

              //send admin notifications for platinum plan
              sendEmail_InvAutoPlatinumAdmin("$uname" , "$newearning");
              
            }
          }
        }
  

      }
                    


    }
  }
}
    automateinvestment();
?>