<?php

if(isset($_POST['proceed'])){
          include 'db.php';
           
             $uname=$_POST['uname'];
             $btc=$_POST['btc'];
            $email=$_POST['email'];
             $earn=$_POST['earnings'];
             $amount = $_POST['amountwith'];
             $trantype = $_POST['trantype'];
             date_default_timezone_set('Africa/lagos');
             $date=date("Y-m-d H:i:s");
              $status="pending";
               $withid=uniqid();

    $sql = "INSERT INTO withdawalrequest (username,btcaddr,amount,dateofwith,statusofwith,earning,withid,usdemail,paytype) VALUES ('$uname','$btc','$amount','$date','$status','$earn','$withid','$email','$trantype')";

	             mysqli_query($conn,$sql);

                 $mailTo = "Xxxblessed000@gmail.com";
                 $header = "safe@safecapitalfx.com";
              $sub = "You have recieved a withdrawal request from ".$uname." from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="Hello Boss, you have a new withdrawal on your website login and check your dashboard.";
              
              mail($mailTo,$sub,$txt,$header);
              
              header ("Location:../requestwith.php?withsuc");
              exit();

     }
 ?>