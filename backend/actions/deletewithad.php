<?php

	include 'db.php';
	session_start();
	

	//GET DATA

	if(isset($_POST['delete'])){
		$code = $_POST['withid'];

		$sql = "SELECT * FROM withdawalrequest WHERE withid='$code'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);
		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['withid'] = $data['withid'];

				$coder = $_SESSION['withid'];

				$sql = "DELETE FROM withdawalrequest WHERE withid='$coder'";
				mysqli_query($conn,$sql);


				header("Location:../adminwithdrawlrequest.php?delsuc");
				exit();

			}

		}


		
	}