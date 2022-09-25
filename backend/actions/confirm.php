<?php


	include 'db.php';
	

	if(isset($_POST['submitFinal'])){

		$email = mysqli_real_escape_string($conn,$_POST['al_email']);
		date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
		$proofid=uniqid();
		// IMAGE 
		$target = "../uploads/".basename($_FILES['proofimg']['name']);
		$img = $_FILES['proofimg']['name'];


		// INSERT INTO DB

		$sql ="INSERT INTO proofpay (dateup,imageup,email,proofid) VALUES ('$date','$img','$email','$proofid')";

		move_uploaded_file($_FILES['proofimg']['tmp_name'], $target);

		mysqli_query($conn,$sql);
		
		header("Location:../../application3.php?uploadsuc");
		 exit();

		
	}else{
		header("Location:../../application3.php?error");
		exit();
	}