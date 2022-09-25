<?php


	include 'db.php';
	

	if(isset($_POST['submitFinal'])){

		$email = mysqli_real_escape_string($conn,$_POST['al_email']);

		$plan = mysqli_real_escape_string($conn,$_POST['plan']);

		date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
		$proofid=uniqid();

		$status = 'pending';

		// IMAGE 
		$target = "../uploads/".basename($_FILES['proofimg']['name']);
		$img = $_FILES['proofimg']['name'];


		// INSERT INTO DB

		$sql ="INSERT INTO loanproof (dateup,imageup,email,plan,proofid,status) VALUES ('$date','$img','$email', '$plan', '$proofid', '$status')";

		move_uploaded_file($_FILES['proofimg']['tmp_name'], $target);

		mysqli_query($conn,$sql);
		
		    header('Location: ' . $_SERVER['HTTP_REFERER'].'?sucessfulupload');
            exit;

		
	}else{
		   
		   header('Location: ' . $_SERVER['HTTP_REFERER'].'?error');
            exit;
	}