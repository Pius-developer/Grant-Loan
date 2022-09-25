<?php
    session_start();

    if(isset($_POST['login'])){

        include 'db.php';

        //get the user data
		$email = mysqli_real_escape_string($conn,$_POST['email']);
        $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
        
        if(empty($email) || empty($pwd)){

            header("Location:../login.php?loginempty");
            exit();


        }else{

            $sql = "SELECT * FROM users WHERE email ='$email' ";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                header("Location:../login.php?invaliduid");
                exit();

            }else{

               if($row=mysqli_fetch_assoc($result)){

                $cpwd = $row['pwd'];
                
                   
				//de-hashed the password
                // $hashedpwd = password_verify($pwd, $row['pwd']);
                
                if($pwd != $cpwd){
                header("Location:../login.php?invalidpwd");
                exit();

                }elseif($pwd == $cpwd){
                    
                    $_SESSION['uid'] =$row['username'];
                    $uname = $_SESSION['uid'];
                    
                    header("Location:../userdashboard.php?loginsuc");
                    exit();
                }

               }
                
            }

        }

    }else{
        header("Location:../login.php?loginerror");
        exit();
    }

    ?>