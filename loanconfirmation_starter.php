<?php
    $page_title = "Verify Application | Company's Name";
    include ("include/header1.php");
?>

<header class="header__contact">
    <div class="contact__banner">
        <div class="header__banner--content">
            <h1 class="header--primary contact__header--primary">Kick Start Application</h1>
            <a href="index.php" class="contact__header--link">home</a> 
            <!-- <span class="contact__header--span">contact us</span> -->
            <span class="contact__header--span">user application</span>

        </div>
    </div>
</header>

<main>

    <section class="application__section">
        <div class="application__container">
            <div class=" u-margin-bottom-small">
                <h2 class="header--secondary">Section 2 - Loan verification/ Loan Proof Of Payment</h2>
            </div>

            <div class="application__box">
                <section action="#" class="application__form" style="display: grid; grid-template-columns: repeat(auto-fit , minmax(250px , 1fr)); grid-gap: 5rem;">
                    <div class="">
                        <p class="paragraph" style="padding-right: 1rem;">
                            Here at Africa Youth Foundation every user need to be verified, for your verification code, kindly pay in the total sum of  <span style="color: red; font-size: 18px;"> #20000</span>  using the below payment method.
                        </p>

                        <div class="application__paypal--button">
                            <button class="application__paypal--btn  paypal--btn">
                                payment
                            </button>
                        </div>
                    </div>

                    <div class="">
                        <p class="paragraph text-center" style="padding-right: 1rem;">please kindly input your proof of payment below <span style="color: red; font-size: 30px; font-weight: 600; padding-left: 1rem;  display: inline-block;">&DownArrow;</span></p>
                        <div class="row display-flex justify-content-center">
                            <div class="col-lg-8">

                            <form method="POST"  action="backend/actions/comfirmloan.php" enctype="multipart/form-data" >
                                



                                <div class="application__form--left mb-3">
                                    <label for="al_email" class="application__form--label"> Email <span class="application__form--label-sup">*</span> </label>
                                    <input type="email" name="al_email" id="al_email" class="application__form--input mb-3">
                                </div>

                                <div class="application__form--left mb-3">
                                    <label for="al_email" class="application__form--label"> Loan Level<span class="application__form--label-sup">*</span> </label>

                                    <select  name="plan" class="application__form--input mb-3">
                                        <option value="Starter">Starter</option>
                                        <option value="Advance">Advance</option>

                                    </select>
                                   
                                </div>

                                <div class="application__form--left mb-3">
                                    <label for="proofimg" class="application__form--label">Proof Of Payment <span class="application__form--label-sup">*</span></label>
                                    <input type="file" class="application__form--input" name="proofimg" id="proofimg"  autocomplete="off" maxlength='50'>

                                    <div class="application__button">

                                        <button type="submit" value="next"  class="btn__app verify--btn" id='submit-final'  name='submitFinal'>Confirm Payment &rarr;</button>

                                    </div>
                                </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
    include ("include/footer2.php");
?>