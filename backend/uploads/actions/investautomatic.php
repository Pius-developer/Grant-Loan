<?php
    
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
if($plan == "silver" && $statusofinv == "active" && $date_diff >= 1 && $count != 1){
                    $newcount = $count + 1;
                    $starterprofit = 1.8 * $amount;
                     $starterinvprofit = $earning + $starterprofit;
     //once complete update status of investment
    $sql = "UPDATE investment SET earning='$starterinvprofit',coun='$newcount' WHERE investid='$invid' ";
    
    //send mail to investors of this silver plan
    $to = $usdemail;
    $subject = 'SILVER INVESTMENT PROFIT ALERT';
    $from = 'contact@bitraderx.com';
     
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
    $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>BIT</span>RADERX</h3>";
    // LOGO HERE
    $message.=  "<img src='https://www.bitraderx.com/assets/img/bo.png' alt='logo' width='100' height='65'>";
    // LOGO HERE
    // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
    $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
    $message.= " <br>";
    $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
    $message.="<p>Your silver investment circle has been completed for today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
   
    $message.= "</div> ";
    $message .=  "<p style='text-align:center;'>Bitraderx © 2020 All Rights Reserved</p> ";
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
           $newearning = $starterinvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for silver plan
          $mailTo = "admin@bitbankpro.ltd";
				$header = "From: contact@bitraderx.com";
				$sub = "COMPLETED INVESTMENT";
				$txt = "Hello Sir, you have a completed starter investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
				mail($mailTo,$sub,$txt,$header);
           mysqli_query($conn,$sql);
   }
}
        //for gold plan
    }elseif($plan == "gold" && $statusofinv == "active" && $date_diff >= 1 && $count != 2){
        $newcount = $count + 1;
        $basicprofit = 1.6 * $amount;
        $basicinvprofit = $earning + $basicprofit;
     $sql = "UPDATE investment SET earning='$basicinvprofit',coun='$newcount' WHERE investid='$invid' ";
    
   //send mail to investors of this gold plan
   $to = $usdemail;
   $subject = 'GOLD INVESTMENT PROFIT ALERT ';
   $from = 'contact@bitraderx.com';
    
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
   $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>BIT</span>RADERX</h3>";
   // LOGO HERE
   $message.=  "<img src='https://www.bitraderx.com/assets/img/bo.png' alt='logo' width='100' height='65'>";
  // LOGO HERE
   // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
   $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
   $message.= " <br>";
   $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
   $message.="<p>Your Gold investment circle has been completed for today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
   
   $message.= "</div> ";
   $message .=  "<p style='text-align:center;'>Bitraderx © 2020 All Rights Reserved</p> ";
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
           $newearning = $basicinvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for gold plan
   $mailTo = "admin@bitbankpro.ltd";
   $header = "From: contact@bitraderx.com";
   $sub = "COMPLETED INVESTMENT";
   $txt = "Hello Sir, you have a completed basic investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
   mail($mailTo,$sub,$txt,$header);

   mysqli_query($conn,$sql);
   }
}
     
     //for diamond plan
    }elseif($plan == "platinum" && $statusofinv == "active" && $date_diff >= 1 && $count != 3){
        $newcount = $count + 1;
        $monthlyprofit = 0.2 * $amount;
        $monthlyinvprofit = $earning + $monthlyprofit;
     $sql = "UPDATE investment SET earning='$monthlyinvprofit',coun='$newcount' WHERE investid='$invid' ";
     
    //send mail to investors of this diamond plan
    $to = $usdemail;
    $subject = 'PLATINUM INVESTMENT PROFIT ALERT ';
    $from = 'contact@bitraderx.com';
     
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
    $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>BIT</span>RADERX</h3>";
    // LOGO HERE
    $message.=  "<img src='https://www.bitraderx.com/assets/img/bo.png' alt='logo' width='100' height='65'>";
   // LOGO HERE
    // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
    $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
    $message.= " <br>";
    $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
    $message.="<p>Your Platinum investment circle has been completed today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
   
    $message.= "</div> ";
    $message .=  "<p style='text-align:center;'>Bitraderx © 2020 All Rights Reserved</p> ";
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
           $newearning = $monthlyinvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for gold plan
   $mailTo = "admin@bitbankpro.ltd";
   $header = "From: contact@bitraderx.com";
   $sub = "COMPLETED INVESTMENT";
   $txt = "Hello Sir, you have a completed monthly investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
   mail($mailTo,$sub,$txt,$header);
 
   mysqli_query($conn,$sql);
   }
}
    //for platinum
    }elseif($plan == "yearly" && $statusofinv == "active" && $date_diff >= 1 && $count != 365){           
        $newcount = $count + 1;
        $yearlyprofit = 0.1 * $amount;
        $yearlyinvprofit = $earning + $yearlyprofit;
     $sql = "UPDATE investment SET earning='$yearlyinvprofit',coun='$newcount' WHERE investid='$invid' ";
    
  //send mail to investors of this platinum plan
  $to = $usdemail;
  $subject = 'YEARLY INVESTMENT PROFIT ALERT ';
  $from = 'contact@bitraderx.com';
   
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
  $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>BIT</span>RADERX</h3>";
  // LOGO HERE
  $message.=  "<img src='https://www.bitraderx.com/assets/img/bo.png' alt='logo' width='100' height='65'>";
 // LOGO HERE
  // $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
  $message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
  $message.= " <br>";
  $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
  $message.="<p>Your Yearly investment circle has been completed today and your Return of investment(ROI) have been funded to your earnings, please login your account to view your new earnings. </p>";
  
  $message.= "</div> ";
  $message .=  "<p style='text-align:center;'>Mars-Asset © 2020 All Rights Reserved</p> ";
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
           $newearning = $yearlyinvprofit + $earned;
   $sql = "UPDATE users SET earn='$newearning' WHERE username='$uname'";

   //send admin notifications for gold plan
   $mailTo = "schengenLV@gmail.com";
   $header = "From: contact@bitraderx.com";
   $sub = "COMPLETED INVESTMENT";
   $txt = "Hello Sir, you have a completed platinum investment from: "."\n\n"."Username: ".$uname."\n\n"."Earned: ".$newearning;
   mail($mailTo,$sub,$txt,$header);
 
   mysqli_query($conn,$sql);
   }
}


    }
                    


                    


    }
}
    }
    automateinvestment();
?>