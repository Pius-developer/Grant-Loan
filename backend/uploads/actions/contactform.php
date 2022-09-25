<?php
	include 'db.php';



	if(isset($_POST['Send'])){
		// GET THE DATA

	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
    $msg=mysqli_real_escape_string($conn,$_POST['msg']);
    $subj=mysqli_real_escape_string($conn,$_POST['sub']);

	if(empty($name) || empty($email) ||empty($msg)){
		header("Location:../contact.php?mail=empty");
		exit();

	}else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location:../contact.php?mail=invalidemail");
		exit();

		}else{

			$mailTo = "Xxxblessed000@gmail.com";
			$header = "From: ".$email;
			$txt = $msg;
			$sub = $subj;

			mail($mailTo,$sub,$txt,$header);

		header("Location:../contact.php?mail=sucess");
		exit();

		}

	}

	}else{
		header("Location:../contact.php?error");
		exit();
	}