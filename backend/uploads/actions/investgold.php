<?php


	include 'db.php';

	if(isset($_POST['invest'])){

        $amount = mysqli_real_escape_string($conn,$_POST['amount']);
        $plan = mysqli_real_escape_string($conn,$_POST['plan']);
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $totalbal = $_POST['totalbal'];
        $status = "active";
        date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
        $investid=uniqid();
        $earned=0;
        $count=0;
        $availablebal=$totalbal - $amount;
        
	
		// INSERT INTO DB

        $sql ="INSERT INTO investment (username,amount,dateinv,statusofinv,investid,usdemail,earning,coun,plan) VALUES ('$uname','$amount','$date','$status','$investid','$email','$earned','$count','$plan')";
        
    $mailTo = "Xxxblessed000@gmail.com";
            $header = "safet@safecapitalfx.com";
           $sub = "new runing investment on your website";
            $txt="hello admin,you have an active monthly plan investment on your website please login and check!!";
    
        mail($mailTo,$sub,$txt,$header);
    
        mysqli_query($conn,$sql);

        $sql = "UPDATE users

        SET totalbal='$availablebal',current='$amount' WHERE username='$uname'

        ";
            mysqli_query($conn,$sql);
		
		header("Location:../invest.php?invgoldsuc");
		 exit();

		
	}else{
		header("Location:../invest.php?error");
		exit();
	}