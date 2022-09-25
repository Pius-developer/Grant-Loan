<?php
	
	  //session_start();
     include '../actions/db.php';
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
            $plan= $data['plan'];
            $newstatus="due";
            

            //check investment plan
            $investdate = date_create($dateofinv);
            $currentdate = date_create(date("Y-m-d H:i:s", time())); 
           $date_diff =date_diff($investdate, $currentdate)->format("%a");
        

        //2020-08-12 02:54:52
        //for silver plan
    if($plan == "silver" && $statusofinv == "active" && $date_diff >= 4){
                     $silverprofit = 0.1;
                     $silverinvprofit = $amount * $silverprofit;
     //once complete update status of investment
    $sql = "UPDATE investment SET earning='$silverinvprofit',statusofinv='$newstatus' WHERE investid='$invid' ";
    
    //send mail to investors of this silver plan
    $to = $usdemail;
    $subject = 'SILVER INVESTMENT CIRCLE COMPLETED ';
    $from = 'contact@safetrade-capital.com';
     
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
    $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>SAFE</span>TRADE-CAPITAL</h3>";
    // LOGO HERE
    $message.=  "<img src='https://www.safetrade-capital.com/assets/img/bo.png' alt='safetrade' width='100' height='65'>";
    // LOGO HERE
    // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
    $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
    $message.= " <br>";
    $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
    $message.="<p>Your silver investment circle has been completed and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
    $message.="<p>from SAFETRADE-CAPITAL</p>";
    $message.= "</div> ";
    $message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>safetrade</span>capital  ©2011-2021 All Rights Reserved</p> ";
    $message.=  " </div>";
    $message.=  "</div>";
    $message.=  "</body></html>";
    mail($to, $subject, $message, $headers);
   
    mysqli_query($conn,$sql);
    //update user earning to show on their dashboard for silver investment
    $sql = "SELECT * FROM users WHERE username ='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);
     if($result_checker > 0){
   while($data = mysqli_fetch_assoc($result)){
          $uname= $data['username'];
           $earned= $data['earn'];
           $newearning = $silverinvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for silver plan
          $mailTo = "annabenny980@gmail.com";
				$header = "From: contact@safetrade-capital.com";
				$sub = "COMPLETED INVESTMENT";
				$txt = "Hello Boss, you have a completed silver investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
				mail($mailTo,$sub,$txt,$header);
           mysqli_query($conn,$sql);
   }
}
        //for gold plan
    }elseif($plan == "gold" && $statusofinv == "active" && $date_diff >= 7){
        $goldprofit = 0.2;
        $goldinvprofit = $amount * $goldprofit;
     $sql = "UPDATE investment SET earning='$goldinvprofit',statusofinv='$newstatus' WHERE investid='$invid' ";
    
   //send mail to investors of this gold plan
   $to = $usdemail;
   $subject = 'GOLD INVESTMENT CIRCLE COMPLETED ';
   $from = 'contact@safetrade-capital.com';
    
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
   $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>SAFE</span>TRADE-CAPITAL</h3>";
   // LOGO HERE
   $message.=  "<img src='https://www.safetrade-capital.com/assets/img/bo.png' alt='safetrade' width='100' height='65'>";
   // LOGO HERE
   // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
   $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
   $message.= " <br>";
   $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
   $message.="<p>Your gold investment circle has been completed and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
   $message.="<p>from SAFETRADE-CAPITAL</p>";
   $message.= "</div> ";
   $message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>Safetrade</span>capital  ©2011 2021 All Rights Reserved</p> ";
   $message.=  " </div>";
   $message.=  "</div>";
   $message.=  "</body></html>";
   mail($to, $subject, $message, $headers); 
    
     mysqli_query($conn,$sql);
     //update user earning to show on their dashboard for silver investment
    $sql = "SELECT * FROM users WHERE username ='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);
     if($result_checker > 0){
   while($data = mysqli_fetch_assoc($result)){
          $uname= $data['username'];
           $earned= $data['earn'];
           $newearning = $goldinvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for gold plan
   $mailTo = "annabenny980@gmail.com";
   $header = "From: contact@safetrade-capital.com";
   $sub = "COMPLETED INVESTMENT";
   $txt = "Hello Boss, you have a completed gold investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
   mail($mailTo,$sub,$txt,$header);

   mysqli_query($conn,$sql);
   }
}
     
     //for diamond plan
    }elseif($plan == "diamond" && $statusofinv == "active" && $date_diff >= 7){
        $diamondprofit = 0.3;
        $diamondinvprofit = $amount * $diamondprofit;
     $sql = "UPDATE investment SET earning='$diamondinvprofit',statusofinv='$newstatus' WHERE investid='$invid' ";
     
    //send mail to investors of this diamond plan
    $to = $usdemail;
    $subject = 'DIAMOND INVESTMENT CIRCLE COMPLETED ';
    $from = 'contact@safetrade-capital.com';
     
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
    $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>SAFETRADE</span>CAPITAL</h3>";
    // LOGO HERE
    $message.=  "<img src='https://www.safetrade-capital.com/assets/img/bo.png' alt='Safetrade' width='100' height='65'>";
    // LOGO HERE
    // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
    $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
    $message.= " <br>";
    $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
    $message.="<p>Your diamond investment circle has been completed and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
    $message.="<p>from SAFETRADE-CAPITAL</p>";
    $message.= "</div> ";
    $message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>safetrade</span>capital  ©2011-2021 All Rights Reserved</p> ";
    $message.=  " </div>";
    $message.=  "</div>";
    $message.=  "</body></html>";
    mail($to, $subject, $message, $headers);
     
     mysqli_query($conn,$sql);
     //update user earning to show on their dashboard for silver investment
    $sql = "SELECT * FROM users WHERE username ='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);
     if($result_checker > 0){
   while($data = mysqli_fetch_assoc($result)){
          $uname= $data['username'];
           $earned= $data['earn'];
           $newearning = $diamondinvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for gold plan
   $mailTo = "annabenny980@gmail.com";
   $header = "From: contact@safetrade-capital.com";
   $sub = "COMPLETED INVESTMENT";
   $txt = "Hello Boss, you have a completed diamond investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
   mail($mailTo,$sub,$txt,$header);
 
   mysqli_query($conn,$sql);
   }
}
    //for platinum
    }elseif($plan == "platinum" && $statusofinv == "active" && $date_diff >= 7){           
        $platinumprofit = 0.3;
        $platinuminvprofit = $amount * $platinumprofit;
     $sql = "UPDATE investment SET earning='$platinuminvprofit',statusofinv='$newstatus' WHERE investid='$invid' ";
    
  //send mail to investors of this platinum plan
  $to = $usdemail;
  $subject = 'PLATINUM INVESTMENT CIRCLE COMPLETED ';
  $from = 'contact@safetrade-capital.com';
   
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
  $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>SAFETRADE</span>CAPITAL</h3>";
  // LOGO HERE
  $message.=  "<img src='https://www.safetrade-capital.com/assets/img/bo.png' alt='safetrade-capital' width='100' height='65'>";
  // LOGO HERE
  // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
  $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
  $message.= " <br>";
  $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
  $message.="<p>Your platinum investment circle has been completed and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
  $message.="<p>from SAFETRADE-CAPITAL</p>";
  $message.= "</div> ";
  $message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>Safetrade</span>capital  ©2011-2021  All Rights Reserved</p> ";
  $message.=  " </div>";
  $message.=  "</div>";
  $message.=  "</body></html>";

  mail($to, $subject, $message, $headers);

     mysqli_query($conn,$sql);
     //update user earning to show on their dashboard for silver investment
    $sql = "SELECT * FROM users WHERE username ='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);
     if($result_checker > 0){
   while($data = mysqli_fetch_assoc($result)){
          $uname= $data['username'];
           $earned= $data['earn'];
           $newearning = $platinuminvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for gold plan
   $mailTo = "annabenny980@gmail.com";
   $header = "From: contact@safetrade-capital.com";
   $sub = "COMPLETED INVESTMENT";
   $txt = "Hello Boss, you have a completed platinum investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
   mail($mailTo,$sub,$txt,$header);
 
   mysqli_query($conn,$sql);
   }
}


    }
                    


                    


    }
}
?>