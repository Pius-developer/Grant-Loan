<?php

	  session_start();
	 include 'db.php';

	  // $walletbal = $_SESSION['walletbal'];
	   // $username = $_SESSION['usd'];
   // $useremail = $_SESSION['email'];

	  if(isset($_POST["loan"])){

	  $depositid =mysqli_real_escape_string($conn,$_POST['loanid']);

	  $sql = "SELECT * FROM loanrequest WHERE loanid ='$depositid' ";
	$result= mysqli_query($conn,$sql);
	$result_checker= mysqli_num_rows($result);

	if($result_checker > 0){

		while($data = mysqli_fetch_assoc($result)){
           
            $uname= $data['username'];
            $amount= $data['amount'];
            $dd= $data['dateofrequest'];
            $status= $data['statusofrequest'];
            $plan= $data['plan'];
            $loanid= $data['loanid'];
            $lastloan= $data['lastloan'];
            $loanbal= $data['loanbal'];
            $email= $data['usdemail'];
			
			$latestloanstatus="Approved";

			$currentloanbalance=$loanbal+$amount;

			// UPDATE TRANSACTION STATUS
			 $sql = "UPDATE loanrequest

        SET statusofrequest='$latestloanstatus', loanbal='$currentloanbalance'

        WHERE loanid ='$depositid'

        ";


$to = $email;
$subject = 'Loan Confirmation';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>SAFE</span>CAPITALFX</h3>";
// LOGO HERE
$message.=  "<img src='https://www.safecapitalfx.com/assets/img/bo.png' alt='logo' width='100' height='65' style='margin-left:50%'>";

$message.=  "<h4 style='padding: 10px;' style='text-align:center;'>Congratulations ". $uname .",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p style='text-align:center;'><strong>Your Loan of $".$amount." has been received  and processed. Due to your steadfast participation and advertisement/referrals, You're rewarded with the loan</strong></p>";


$message.="<p style='text-align:center;'>Thanks for chosing safecapitalfx.</p>";
$message.="<p style='text-align:center;'>Log in your dashboard to invest and start earning.</p>";

$message.="<h3 style='text-align:center; color:#336699;'>Need Help?</h3>";


$message.="<p style='text-align:center;'>Contact us through our life support or send us mail via support@safecapitalfx.com</p>";




$message.= "</div> ";
$message .=  "<p style='text-align:center;'>safecapitalfx ©2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

mysqli_query($conn,$sql);

//update the walletbalance
$sql = "SELECT * FROM users WHERE username ='$uname' ";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);
 if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){
      $uname= $data['username'];
       $bal= $data['totalbal'];
       $newbal = $amount + $bal;
$sql = "UPDATE users SET totalbal='$newbal' WHERE username='$uname'";


mysqli_query($conn,$sql);}}

header ("Location:../adminupdateloan.php?suc");
exit();

        }
    }
}