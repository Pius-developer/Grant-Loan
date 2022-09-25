<?php

	include 'db.php';
	session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$code = $_POST['invid'];

		$sql = "SELECT * FROM investment WHERE investid='$code'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);
		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['investid'] = $data['investid'];

				$coder = $_SESSION['investid'];

				$sql = "DELETE FROM investment WHERE investid='$coder'";
				mysqli_query($conn,$sql);


				header("Location:../investhistory.php?delsuc");
				exit();

			}

		}


		
	}