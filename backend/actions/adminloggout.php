<?php
	
	if(isset($_POST['adminlogout'])){
		
		session_start();
		session_unset();
		session_destroy();

		header("Location:../admin.php?logoutsuc");
		exit();

	}
