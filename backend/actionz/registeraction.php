<?php

    include "db.php";

    if(isset($_POST["register"])) {

        // GET THE DATA from user
        // form section 1
        $fname=mysqli_real_escape_string($conn,$_POST['fname']);
        $lname=mysqli_real_escape_string($conn,$_POST['lname']);
        $oname=mysqli_real_escape_string($conn,$_POST['oname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $gender=mysqli_real_escape_string($conn,$_POST['gender']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        $cpwd =mysqli_real_escape_string($conn,$_POST['cpwd']);
        $dob=mysqli_real_escape_string($conn,$_POST['dob']);
        $biz_state=mysqli_real_escape_string($conn,$_POST['biz_state']);
        $st_of_residence =mysqli_real_escape_string($conn,$_POST['st_of_residence']);
        $qualification=mysqli_real_escape_string($conn,$_POST['qualification']);
        $have_you_rec=mysqli_real_escape_string($conn,$_POST['have_you_rec']);
        $hear_abt_us=mysqli_real_escape_string($conn,$_POST['hear_abt_us']);
        $disability=mysqli_real_escape_string($conn,$_POST['disability']);

        // form section 2
        $biz_name =mysqli_real_escape_string($conn,$_POST['biz_name']);
        $biz_location=mysqli_real_escape_string($conn,$_POST['biz_location']);
        $biz_age=mysqli_real_escape_string($conn,$_POST['biz_age']);
        $iz_biz_reg=mysqli_real_escape_string($conn,$_POST['iz_biz_reg']);
        $gen_revenue=mysqli_real_escape_string($conn,$_POST['gen_revenue']);
        $have_partner=mysqli_real_escape_string($conn,$_POST['have_partner']);
        $partner_cont=mysqli_real_escape_string($conn,$_POST['partner_cont']);
        $biz_sector=mysqli_real_escape_string($conn,$_POST['biz_sector']);
        $biz_descrp =mysqli_real_escape_string($conn,$_POST['biz_descrp']);
        $biz_impact=mysqli_real_escape_string($conn,$_POST['biz_impact']);
        $challenge =mysqli_real_escape_string($conn,$_POST['challenge']);
        $reason_for_ent=mysqli_real_escape_string($conn,$_POST['reason_for_ent']);
        $grantuse=mysqli_real_escape_string($conn,$_POST['grantuse']);
        $agree_mentorship=mysqli_real_escape_string($conn,$_POST['agree_mentorship']);
        $sgd_goals=mysqli_real_escape_string($conn,$_POST['sgd_goals']);
        $verify_key   =     md5(uniqid());

        $status = 'Processing';

        if(strlen(trim($pwd)) < 5){
            header("Location: ../../application.php?passwordshort");
            exit();
        }
        
        if($pwd != $cpwd ){
            header("Location:../../application.php?comfirmpass");
            exit();
        }

        //VALIDATE
        if (empty($fname) || empty($lname) || empty($oname) || empty($email) || empty($phone) || empty($gender) || empty($pwd) || empty($cpwd) || empty($dob) ||empty($biz_state) || empty($st_of_residence) || empty($qualification) || empty($have_you_rec) || empty($hear_abt_us) || empty($disability) || empty($biz_name) || empty($biz_location) || empty($biz_age) || empty($iz_biz_reg) || empty($gen_revenue) || empty($have_partner) || empty($partner_cont) || empty($biz_sector) || empty($biz_descrp) || empty($biz_impact) || empty($challenge) || empty($reason_for_ent) || empty($grantuse) || empty($agree_mentorship) || empty($sgd_goals)) {

            header ("Location:../../application.php?signupempty");
            exit();

        }else{

            //VALIDATE EMAIL
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                header ("Location:../../application.php?invalidemail");
                exit();

            } else{

                $sql = "SELECT * FROM users WHERE email='$email';";
                $result = mysqli_query($conn,$sql);
                $result_check = mysqli_num_rows($result);

                if($result_check > 0){

                    header ("Location:../../application.php?uidtaken");
                    exit();

                }else{

                    $sql = "INSERT INTO users(fname,lname,oname,email,phone,gender,pwd,cpwd,dob,biz_state,st_of_residence,qualification,have_you_rec, hear_abt_us, disability, biz_name, biz_location, biz_age, iz_biz_reg, gen_revenue, have_partner, partner_cont, biz_sector, biz_descrp, biz_impact, challenge, reason_for_ent, grantuse, agree_mentorship, sgd_goals, status) VALUES ('$fname','$lname','$oname','$email','$phone','$gender','$pwd','$cpwd','$dob','$biz_state','$st_of_residence','$qualification','$have_you_rec','$hear_abt_us', '$disability', '$biz_name', '$biz_location', '$biz_age', '$iz_biz_reg', '$gen_revenue', '$have_partner', '$partner_cont', '$biz_sector', '$biz_descrp', '$biz_impact', '$challenge', '$reason_for_ent', '$grantuse', '$agree_mentorship', '$sgd_goals', '$status')";

                    $sql_run = mysqli_query ($conn , $sql);
                    // $sql_insert_result = mysqli_query ($sql_run);

                    if (!$sql_run) {

                        header ("Location:../../application.php?problem_while_inserting");
                        exit();
                    }else {

                        header ("Location:../../verify.php?signupsuc $email");
                        exit();
                    }

                    
                }

            }
        }

    }else {

        header ("Location:../application.php?error");
        exit();
    }



?>