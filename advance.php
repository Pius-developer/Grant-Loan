<?php
    $page_title = "Loan | Company's Name";
    include ("include/header1.php");
?>



<header class="header__loan">
    <div class="contact__banner">
        <div class="header__banner--content">
            <h1 class="header--primary contact__header--primary">get a loan</h1>
            <a href="index.php" class="contact__header--link">home</a> 
            <!-- <span class="contact__header--span">contact us</span> -->
            <span class="contact__header--span">loan Application </span>

        </div>
    </div>
</header>

<main>
    <section class="application__section">
        <div class="application__container">

            <div class="row display-flex justify-content-center">
                <div class=" col-lg-5 col-md-12 col-xs-12 col-sm-12">
                    <div class="application__box">

                        <form action="backend/loanconfirm.php" method="post" class="application__form">






               <?php  

                      $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                       if(strpos($url, 'invalidbankdetail') == true){


 echo '<script>
    setTimeout(function() {
        swal({
            title: "Error!",
            text: "Invalid Account number or BVN",
            type: "error"
        }, function() {
            window.location = "#0";
        });
    }, 1000);
  </script>';

    }elseif (strpos($url, 'inavlidphone') == true) {
         echo '<script>
    setTimeout(function() {
        swal({
            title: "Error!",
            text: "Invalid Phone Number",
            type: "error"
        }, function() {
            window.location = "#0";
        });
    }, 1000);
  </script>';
    }


               ?>
                            <div class="application__status text-center ">
                                <h2 class="header--tertiary pb-3 mb-5" style="font-weight: 700;">
                                    Advance Loan
                                </h2>
                                <!-- <p class="paragraph text-center">
                                    Check if you have been shortlisted. <br>
                                    
                                </p> -->
                            </div>
        <div class="row">
                                <div class="u-margin-top-mid ">
                                        
                                    <div class="application__form mb-3">
                                        <label for="sl_fname" class="application_form--label"> Full Name <span class="application_form--label-sup">*</span> </label>
                                        <input type="text" name="sl_fname" id="sl_fname" require class="application__form--input mb-3">

                                         <input type="hidden" name="plan"  value="Advance" id="sl_fname" require class="application__form--input mb-3">
                                        
                                    </div>

                                    <div class="application__form--right mb-3">
                                        <label for="sl_gender" class="application_form--label">Choose your gender <span class="application_form--label-sup">*</span></label>
                                        <select name="sl_gender" id="sl_gender" class="application__form--select" required>
                                            <option value="male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="application__form mb-3">
                                        <label for="sl_email" class="application_form--label"> Email <span class="application_form--label-sup">*</span> </label>
                                        <input type="email" name="sl_email" id="sl_email" require class="application__form--input mb-3">
                                    </div>

                                    <div class="application__form--left mb-3">
                                        <label for="sl_phone" class="application_form--label">Phone number <span class="application_form--label-sup">*</span></label>
                                        <input type="text" class="application__form--input" name="sl_phone" id="sl_phone" required autocomplete="off" maxlength="13">
                                    </div>


                                    <div class="application__form--left mb-3">
                                        <label for="sl_bvn" class="application_form--label"> Loan Amount <span class="application_form--label-sup">*</span></label>
                                        <input type="number" class="application__form--input" name="amount" id="sl_bvn" required autocomplete="off" >
                                    </div>

                                    <div class="application__form--left mb-3">
                                        <label for="sl_bvn" class="application_form--label"> BVN <span class="application_form--label-sup">*</span></label>
                                        <input type="text" class="application__form--input" name="sl_bvn" id="sl_bvn" required autocomplete="off" >
                                    </div>

                               

                                    <div class="application__form mb-3">
                                        <label for="sl_file" class="application_form--label"> Passport / NIN / Drivers License <span class="application_form--label-sup">*</span> </label>
                                        <input type="file" name="sl_file" id="sl_file" require class="application__form--input mb-3">
                                        
                                    </div>

                                    <div class="my-5 text-center">
                                        <h4 class="text-primary" style="font-size: 18px; font-weight: 600;">BANK DETAILS</h4>
                                    </div>

                                    <div class="application__form mb-3">
                                        <label for="sl_acctname" class="application_form--label"> Account Name <span class="application_form--label-sup">*</span> </label>
                                        <input type="text" name="sl_acctname" id="sl_acctname" require class="application__form--input mb-3">
                                        
                                    </div>

                                    <div class="application__form--left mb-3">
                                        <label for="sl_acctnum" class="application_form--label">Account Number <span class="application_form--label-sup">*</span></label>
                                        <input type="number" class="application__form--input" name="sl_acctnum" id="sl_acctnum" required autocomplete="off" maxlength="10">
                                    </div>

                                    <div class="application__form mb-3">
                                        <label for="sl_bank" class="application_form--label"> Bank <span class="application_form--label-sup">*</span> </label>
                                        <input type="text" name="sl_bank" id="sl_bank" require placeholder="your bank name (example 'GTB, UBA ....')" class="application__form--input mb-3">
                                    </div>

                                    <div class="application__button u-margin-top-mid">
                                    
                                        <button type="submit" value="next"  class="btn__app " id='starter_btn'  name='starter_btn'>Apply for loan</button>
                                    </div>
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