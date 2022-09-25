<?php

	include 'db.php';
	session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$code = $_POST['invid'];

		$sql = "SELECT * FROM kyc WHERE kid='$code'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);
		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['investid'] = $data['kid'];

				$coder = $_SESSION['investid'];

				$sql = "DELETE FROM kyc WHERE kid='$coder'";
				mysqli_query($conn,$sql);


				header("Location:../admincheckyc.php?delsuc");
				exit();

			}

		}


		
	}