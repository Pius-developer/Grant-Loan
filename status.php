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
                        <form action="applicantstatus.php" class="application__form" method="POST">
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
                                    <!-- <div class="application__form--group"> -->


                                         <div class="application__form--left">
                                            <label for="v_code" class="application__form--label">Email Address<span class="application__form--label-sup">*</span></label>
                                            <input type="email" class="application__form--input" name="email" id="v_code" placeholder="" autocomplete="off" required >
                                            
                                        </div>   
                                        
                                        <div class="application__form--left">
                                            <label for="v_code" class="application__form--label">Verification Code <span class="application__form--label-sup">*</span></label>
                                            <input type="text" class="application__form--input" name="v_code" id="v_code" placeholder="" autocomplete="off" maxlength='50' required >
                                            
                                        </div>

                                        <div class="my-4">
                                            <a href="application3.php" class="justify-content-right py-4 text-secondary" style="text-decoration: none; font-size: 16px;"><span ></span>Don't have Verification yet?</a>
                                        </div>

                                        <!-- <div class="application__form--right">
                                            <label for="pwd" class="application__form--label">Password <span class="application__form--label-sup">*</span></label>
                                            <input type="password" class="application__form--input" name="pwd" id="pwd" required autocomplete="off" maxlength="50">
                                        </div> -->

                                    <!-- </div> -->

                                    <div class="application__button u-margin-top-mid">
                                                <button type="submit" value="next"  class="btn__app " id='check-status'  name='stats_btn'>check my status</button>
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