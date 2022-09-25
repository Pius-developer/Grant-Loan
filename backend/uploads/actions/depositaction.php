<?php

if(isset($_POST['proceed'])){
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

              $mailTo = "annabenny980@gmail.com";
              $header = "From: contact@safetrade-capital.com";
              $sub = "You have recieved a deposit Request from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="Hello Admin, you have a new deposit on your website login and check!!";
              
              mail($mailTo,$sub,$txt,$header);
              
              header ("Location:../deposit.php?depsuc");
              exit();

     }
 ?>