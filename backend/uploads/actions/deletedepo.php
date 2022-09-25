<?php

	include 'db.php';
	session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$code = $_POST['depositid'];

		$sql = "SELECT * FROM depositrequests WHERE depositid='$code'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);
		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['depositid'] = $data['depositid'];

				$coder = $_SESSION['depositid'];

				$sql = "DELETE FROM depositrequests WHERE depositid='$coder'";
				mysqli_query($conn,$sql);


				header("Location:../dephistory.php?delsuc");
				exit();

			}

		}


		
	}