<?php

	include 'db.php';
	session_start();
	

	//GET DATA

	if(isset($_POST['delete'])){
		$email = $_POST['email'];

		$sql = "SELECT * FROM users WHERE email ='$email'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);
		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['email'] = $data['email'];

				$coder = $_SESSION['email'];

				$sql = "DELETE FROM users WHERE email='$coder'";
				mysqli_query($conn,$sql);


				header("Location:../admindashboard.php?delsuc");
				exit();

			}

		}


		
	}