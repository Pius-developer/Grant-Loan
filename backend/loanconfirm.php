

<?php
    // $page_title = "Applicant Status | Company's Name";
    include ("include/header1.php");
?>

<?php

include 'actions/db.php';

if(isset($_POST['starter_btn'])){ 
 
        $sl_fname=mysqli_real_escape_string($conn,$_POST['sl_fname']);
        $sl_email=mysqli_real_escape_string($conn,$_POST['sl_email']);
        $sl_phone=mysqli_real_escape_string($conn,$_POST['sl_phone']);
        $sl_bvn=mysqli_real_escape_string($conn,$_POST['sl_bvn']);
        $sl_gender=mysqli_real_escape_string($conn,$_POST['sl_gender']);
        $sl_file=mysqli_real_escape_string($conn,$_POST['sl_file']);
        $sl_acctname=mysqli_real_escape_string($conn,$_POST['sl_acctname']);
        $sl_acctnum =mysqli_real_escape_string($conn,$_POST['sl_acctnum']);
        $sl_bank=mysqli_real_escape_string($conn,$_POST['sl_bank']);


        $amount =mysqli_real_escape_string($conn,$_POST['amount']);

        $plan =mysqli_real_escape_string($conn,$_POST['plan']);

              
        $date= date('Y-m-d h:i:s');

        $status="pending";
        $loanid=uniqid();



        // Vallidating loan amount

        if ($plan == 'starter' && $amount < 10000) {

            header('Location: ' . $_SERVER['HTTP_REFERER'].'?amount_lower');
            exit;

        }elseif ($plan == 'starter' && $amount > 50000) {
               
            header('Location: ' . $_SERVER['HTTP_REFERER'].'?amount_greater');
            exit;
        }elseif ($plan == 'Advance' && $amount < 250000) {
               
            header('Location: ' . $_SERVER['HTTP_REFERER'].'?amount_lower');
            exit;
        }elseif ($plan == 'Advance' && $amount > 1000000) {
               
            header('Location: ' . $_SERVER['HTTP_REFERER'].'?amount_greater');
            exit;
        }

        // Vallidating other details

        if (strlen($sl_bvn ) < 10) {

          header('Location: ' . $_SERVER['HTTP_REFERER'].'?invalidbankdetail');
            exit;

        }elseif (strlen( $sl_phone ) < 11) {
      
            header('Location: ' . $_SERVER['HTTP_REFERER'].'?inavlidphone');
            exit;
        }
        elseif (strlen( $sl_acctnum ) < 10) {
      
            header('Location: ' . $_SERVER['HTTP_REFERER'].'?inavlidacctnumber');
            exit;
        }


        
            $sql = "INSERT INTO starter_loan (sl_fname,sl_email,sl_phone,sl_bvn,sl_gender,sl_file,sl_acctname,sl_acctnum,sl_bank,plan,date,status,loanid,amount) VALUES ('$sl_fname','$sl_email','$sl_phone','$sl_bvn','$sl_gender', '$sl_file','sl_acctname','$sl_acctnum','sl_bank', '$plan', '$date','$status','$loanid','$amount')";

	     mysqli_query($conn, $sql);

              $mailTo = "corcherry1978@gmail.com";
              $header = "support@spaceexclusivegroup.com";
              $sub = "You have recieved a deposit Request from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="hello, you have a new deposit on your website login and check";
              
              mail($mailTo,$sub,$txt,$header);


              if ( $plan == "starter") {
                      
                    header("Location: ../loanconfirmation_starter.php?success");
                     exit();

              }elseif($plan == "Advance"){

                header("Location: ../loanconfirmation_advance.php?success");
                     exit();

              }else{
                echo 'erro';
              }

         

              
     }else{
        echo "error";
     }
 ?>


