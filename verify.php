<?php
    $page_title = "Warm Message | Company's Name";
    include ("include/header1.php");
?>

<section class="reg_verify_section">

    <div class="reg_verify_container">

        <div class="reg_verify-header">
            <img src="images/logo.png" style="height: 80px;width: 150px;">
            <h4 class="reg_verify-h4">Your registration was successful!!</h4>

        </div>

        <div class="reg_verify-footer">
            <div class=" reg_verify-footer-header">
                <p class="reg_verify-h4">You have successfully registered into company's name. just one step before you are been eligible to apply for grant. All applicant are expected to verify there account, in order to get your verification code Please click on the button below. Thank you!!
                </p>
            </div>
        </div>

        <div class="reg_verify-button">
            <a href="application3.php" type="submit" value="register"  class="btn__app btn__app--next" id="register_one" name="verify_for_code">verify &rarr;</a>
        </div>

    </div>
</section>

<?php
    include ("include/footer2.php");
?>