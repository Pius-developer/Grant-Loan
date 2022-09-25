                  

<?php
    $page_title = "Applicant Status | Company's Name";
    include ("include/header1.php");
?>

<header class="header__contact">
    <div class="contact__banner">
        <div class="header__banner--content">
            <h1 class="header--primary contact__header--primary">CHECK STATUS</h1>  <span class="contact__header--span"> APPLICATION STATUS</span>

        </div>
    </div>
</header>

<main>
    <section class="application__section">
        <div class="application__container">

            <div class="row display-flex justify-content-center">
                <div class=" col-lg-8 col-md-12 col-xs-12 col-sm-12">
                    <div class="application__box">
                        




<?php
    include 'backend/actions/db.php';

if(isset($_POST['stats_btn'])){
    // echo "clicked";
     $applicantid = mysqli_real_escape_string($conn,$_POST['v_code']);

     $email = mysqli_real_escape_string($conn,$_POST['email']);


    $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){


 echo '<script>
    setTimeout(function() {
        swal({
            title: "Error!",
            text: "Invalid Email address",
            type: "error"
        }, function() {
            window.location = "status.php";
        });
    }, 1000);
</script>';

        header ("Location:../../status.php?invalidemail");
        exit();

            }
   
   if(empty($applicantid)){
    

              echo '<script>
    setTimeout(function() {
        swal({
            title: "Error!",
            text: "Empty Application Code",
            type: "error"
        }, function() {
            window.location = "status.php";
        });
    }, 1000);
</script>';

    header("Location:status.php?empty-code");
    exit();

    // echo "empty";
   }
         
   
   else{
        //CHECK FOR TCODE AT DATA BASE
        $sql = "SELECT * FROM proofpay WHERE proofid = '$applicantid' AND email = '$email' ";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check < 1){
           
           echo '<script>
    setTimeout(function() {
        swal({
            title: "Error!",
            text: "Invalid Application Code or email address",
            type: "error"
        }, function() {
            window.location = "status.php";
        });
    }, 1000);
</script>';

             header('Location: ' . $_SERVER['HTTP_REFERER'].'?invalidapplicationcode');
            exit;

            }
            else{

       
                        $sql = "SELECT * FROM  users WHERE email = '$email' ";
                        $result= mysqli_query($conn,$sql);
                        $result_checker= mysqli_num_rows($result);

                        if($result_checker < 1){


                                   echo '<script>
                            setTimeout(function() {
            swal({
                title: "Error!",
                text: "Email Address does not exist",
                type: "error"
                }, function() {
                window.location = "status.php";
                });
                }, 1000);
           </script>';

             header('Location: ' . $_SERVER['HTTP_REFERER'].'?invalidapplicationcode');
            exit;


         }elseif ($result_checker > 0) {
             // code...
    

                          while($data = mysqli_fetch_assoc($result)){

                            $fname  =  $data['fname'];
                            $lname  =  $data['lname'];
                            $oname  =  $data['oname'];
                            $email  =  $data['email'];
                            $phone  =  $data['phone'];
                            $gender  =  $data['gender'];
                            $pwd  =  $data['pwd'];
                            $cpwd =  $data['cpwd'];
                            $dob  =  $data['dob'];
                            $biz_state  =  $data['biz_state'];
                            $st_of_residence =  $data['st_of_residence'];
                            $qualification  =  $data['qualification'];
                            $have_you_rec  =  $data['have_you_rec'];
                            $hear_abt_us  =  $data['hear_abt_us'];
                            $disability  =  $data['disability'];

                            // form section 2
                            $biz_name =  $data['biz_name'];
                            $biz_location  =  $data['biz_location'];
                            $biz_age  =  $data['biz_age'];
                            $iz_biz_reg  =  $data['iz_biz_reg'];
                            $gen_revenue  =  $data['gen_revenue'];
                            $have_partner  =  $data['have_partner'];
                            $partner_cont  =  $data['partner_cont'];
                            $biz_sector  =  $data['biz_sector'];
                            $biz_descrp =  $data['biz_descrp'];
                            $biz_impact  =  $data['biz_impact'];
                            $challenge =  $data['challenge'];
                            $reason_for_ent  =  $data['reason_for_ent'];
                            $grantuse  =  $data['grantuse'];
                            $agree_mentorship  =  $data['agree_mentorship'];
                            $sgd_goals  =  $data['sgd_goals'];


                }

            
         }





        
    }
   }
}else{
    echo "Error";
}
                  
?>
                            <div class="application__status text-center ">
                                <h2 class="header--tertiary" style="font-weight: 700; padding-bottom: 1rem;">
                                    Check Application
                                </h2>
                                <p class="paragraph text-center">


                                    Check if you have been shortlisted. <br>
                                    
                                </p>
                            </div>

                            <div class="row">
                                <div class="u-margin-top-mid ">
                                

                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include ("include/footer2.php");
?>
















