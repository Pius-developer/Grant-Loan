<?php
include 'db.php';

 session_start();


    if(isset($_POST["edit"])){

        // GET THE DATA from user

        $email=mysqli_real_escape_string($conn,$_POST['email']);

        $status=mysqli_real_escape_string($conn,$_POST['status']);
        


        $sql = "UPDATE users SET  status ='$status' WHERE  email = '$email' ";

        mysqli_query($conn,$sql);



          $_SESSION['uid'] = $email;

            
		
		header("Location:../admindepositrequest.php?sucess");
		 exit();



    }else{
    	header("Location:../admindepositrequest.php?error?");
		 exit();
    }
?>