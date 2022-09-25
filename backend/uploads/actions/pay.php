<?php
session_start();
include 'db.php';

	if(isset($_POST['pay'])){
		
        $depositid =mysqli_real_escape_string($conn,$_POST['depid']);

        $sql = "SELECT * FROM withdawalrequest WHERE withid='$depositid' ";
        $result= mysqli_query($conn,$sql);
        $result_checker= mysqli_num_rows($result);
    
        if($result_checker > 0){
    
            while($data = mysqli_fetch_assoc($result)){
    
                $uname= $data['username'];
                $amount= $data['amount'];
                $dd= $data['dateofwith'];
                $status= $data['statusofwith'];
                $totalbal= $data['earning'];
                $btc= $data['btcaddr'];
                $depositid= $data['withid'];
                $usdemail= $data['usdemail'];
                
    
                // $fn = $data['firstname'];
                // $ln = $data['lastname'];
    
			$latestranstactstatus="PAID";

			// CALACULATE DEPOSIT PLUS CURRENT BALANCE

			$currentwalletbalance=$totalbal-$amount;
            
            $balancedwithdrawal = $totalwith + $amount;

			// UPDATE TRANSACTION STATUS
			 $sql = "UPDATE withdawalrequest SET statusofwith ='$latestranstactstatus'
        WHERE withid='$depositid'
        ";
        mysqli_query($conn,$sql);


        $sql = "UPDATE users SET earn ='$currentwalletbalance', totalwith='$balancedwithdrawal'
        WHERE username='$uname'
        ";

$to = $usdemail;
$subject = 'Successful Withdrawal';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#336699'><span style='color:#083d6b'>SAFE</span>CAPITALFX</h3>";
// LOGO HERE
$message.=  "<img src='https://www.safecapitalfx.com/assets/img/bo.png' alt='logo' width='100' height='65' style='margin-left:50%'>";

$message.=  "<h4 style='padding: 1px;'>Dear ".$uname ."</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
$message.="<p>Your withdrawal of  $".$amount." has been approved.</p>";
$message.="<p>The payment is currently being processed.</p>";
$message.="<p>Please, check your wallet address with the address ".$btc ."</p>";

$message.="<p>Thanks for trusting safecapitalfx. Stay connected, invest more and enjoy other benefits like loan and support signals</p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@safecapitalfx.com</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Safecapitalfx ©2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";
mail($to, $subject, $message, $headers);

        mysqli_query($conn,$sql);

header("Location:../adminwithdrawlrequest.php?pay=sucess");

            }
        }
        }