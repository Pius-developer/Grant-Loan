<?php


	include 'db.php';

	if(isset($_POST['upload'])){

		$uname = mysqli_real_escape_string($conn,$_POST['uname']);
		date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
		$proofid=uniqid();
		// IMAGE 
		$target = "../uploads/".basename($_FILES['img']['name']);
		$img = $_FILES['img']['name'];


		// INSERT INTO DB

		$sql ="INSERT INTO proofpay (dateup,imageup,username,proofid) VALUES ('$date','$img','$uname','$proofid')";

		move_uploaded_file($_FILES['img']['tmp_name'], $target);

		mysqli_query($conn,$sql);
		
		header("Location:../proof.php?uploadsuc");
		 exit();

		
	}else{
		header("Location:../proof.php?error");
		exit();
	}