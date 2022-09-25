<?php
    $page_title = "Application | Company's Name";
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
    <!-- Section one start -->
    <section class="application__section"  id='section-1'>
        
        <div class="application__container">
            <div class=" u-margin-bottom-small">
                <h2 class="header--secondary">Section 1 - Lets meet you</h2>
            </div>

            <div class="application__box">
                <form method="POST" action="backend/actionz/registeraction.php" class="application__form">

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="first-name" class="application__form--label">First Name <span class="application__form--label-sup">*</span></label>
                            <input type="text" class="application__form--input" name="fname" id="first-name" required autocomplete="off" >
                        </div>

                        <div class="application__form--right">
                            <label for="last-name" class="application__form--label">Last Name <span class="application__form--label-sup">*</span></label>
                            <input type="text" class="application__form--input" name="lname" id="last-name" required autocomplete="off">
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="other-name" class="application__form--label">Other Name <span class="application__form--label-sup">*</span></label>
                            <input type="text" class="application__form--input" name="oname" id="other-name" required autocomplete="off"> 
                        </div>
                        

                        <div class="application__form--right">
                            <label for="email" class="application__form--label">Email <span class="application__form--label-sup">*</span></label>
                            <input type="email" class="application__form--input" name="email" id="email" placeholder="yourmail@mail.com" autocomplete="off" maxlength='50' required>  
                        </div>
                    </div>

                    

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="phone" class="application__form--label">Phone number <span class="application__form--label-sup">*</span></label>
                            <input type="number" class="application__form--input" name="phone" id="phone" required autocomplete="off" maxlength="50">
                        </div>

                        <div class="application__form--right">
                            <label for="gender" class="application__form--label">Choose your grnder <span class="application__form--label-sup">*</span></label>
                            <select name="gender" id="gender" class="application__form--select" required>
                                <option value="male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="pwd" class="application__form--label">Password <span class="application__form--label-sup">*</span></label>
                            <input type="password" class="application__form--input" name="pwd" id="pwd" required autocomplete="off" maxlength="50" >
                        </div>

                        <div class="application__form--right">
                            <label for="cpwd" class="application__form--label">Confirm Password <span class="application__form--label-sup">*</span></label>
                            <input type="password" class="application__form--input" name="cpwd" id="cpwd" required autocomplete="off" maxlength="50">
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="dob" class="application__form--label">Date of birth <span class="application__form--label-sup">*</span></label>
                            <input type="date" class="application__form--input" name="dob" id="dob" required autocomplete="off">
                        </div>

                        <div class="application__form--right">
                            <label for="state" class="application__form--label">State of origin <span class="application__form--label-sup">*</span></label>
                            <select name="biz_state" id="state" class="application__form--select" required>
                                <<option>ABUJA FCT</option>
                                <option>ABIA</option>
                                <option>ADAMAWA</option>
                                <option>AKWA IBOM</option>
                                <option>ANAMBRA</option>
                                <option>BAUCHI</option>
                                <option>BAYELSA</option>
                                <option>BENUE</option>
                                <option>BORNO</option>
                                <option>CROSS RIVER</option>
                                <option>DELTA</option>
                                <option>EBONYI</option>
                                <option>EDO</option>
                                <option>EKITI</option>
                                <option>ENUGU</option>
                                <option>GOMBE</option>
                                <option>IMO</option>
                                <option>JIGAWA</option>
                                <option>KADUNA</option>
                                <option>KANO</option>
                                <option>KATSINA</option>
                                <option>KEBBI</option>
                                <option>KOGI</option>
                                <option>KWARA</option>
                                <option>LAGOS</option>
                                <option>NASSARAWA</option>
                                <option>NIGER</option>
                                <option>OGUN</option>
                                <option>ONDO</option>
                                <option>OSUN</option>
                                <option>OYO</option>
                                <option>PLATEAU</option>
                                <option>RIVERS</option>
                                <option>SOKOTO</option>
                                <option>TARABA</option>
                                <option>YOBE</option>
                                <option>ZAMFARA</option>
                            </select>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="state-of-residence" class="application__form--label">State of residence <span class="application__form--label-sup">*</span></label>
                            <select name="st_of_residence" id="state-of-residence" class="application__form--select" required>
                                <option>ABUJA FCT</option>
                                    <option>ABIA</option>
                                    <option>ADAMAWA</option>
                                    <option>AKWA IBOM</option>
                                    <option>ANAMBRA</option>
                                    <option>BAUCHI</option>
                                    <option>BAYELSA</option>
                                    <option>BENUE</option>
                                    <option>BORNO</option>
                                    <option>CROSS RIVER</option>
                                    <option>DELTA</option>
                                    <option>EBONYI</option>
                                    <option>EDO</option>
                                    <option>EKITI</option>
                                    <option>ENUGU</option>
                                    <option>GOMBE</option>
                                    <option>IMO</option>
                                    <option>JIGAWA</option>
                                    <option>KADUNA</option>
                                    <option>KANO</option>
                                    <option>KATSINA</option>
                                    <option>KEBBI</option>
                                    <option>KOGI</option>
                                    <option>KWARA</option>
                                    <option>LAGOS</option>
                                    <option>NASSARAWA</option>
                                    <option>NIGER</option>
                                    <option>OGUN</option>
                                    <option>ONDO</option>
                                    <option>OSUN</option>
                                    <option>OYO</option>
                                    <option>PLATEAU</option>
                                    <option>RIVERS</option>
                                    <option>SOKOTO</option>
                                    <option>TARABA</option>
                                    <option>YOBE</option>
                                    <option>ZAMFARA</option>
                            </select>
                        </div>

                        <div class="application__form--right">
                            <label for="qualification" class="application__form--label">Educational Qualification <span class="application__form--label-sup">*</span></label>
                            <select class="application__form--select" id="qualification" name='qualification' required>                                            
                                <option value='Fslc'>Fslc</option>
                                <option value='Secondary/high school'>Secondary/high school</option>
                                <option value='Undergraduate'>Undergraduate</option>
                                <option value='Graduate'>Graduate</option>
                                <option value='Post graduate'>Post graduate</option>                                                                                   
                            </select>
                        </div>
                    </div>


                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="have-you-received" class="application__form--label">Have you received grant from other organizations in the past? <span class="application__form--label-sup">*</span></label>
                            <select class="application__form--select" name="have_you_rec" id="have-you-received" required>
                                <option>Yes</option>
                                <option>No</option>   
                            </select>
                        </div>

                        <div class="application__form--right">
                            <label for="hear-about-us" class="application__form--label">How did you hear about us <span class="application__form--label-sup">*</span></label>
                            <select class="application__form--select" name="hear_abt_us" id="hear-about-us" required>
                                <option>Through friends and family</option>
                                <option>Social media</option>
                                <option>Radio brocast</option>
                                <option>Tv</option>
                                <option>Newspaper</option> 
                                <option>Whatsapp TV</option>
                                <option>Our website</option>  
                            </select>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="disability" class="application__form--label">This program accommodates and supports those with disability Do you have any disability/ physical health conditions? <span class="application__form--label-sup">*</span></label>
                            <select class="application__form--select" name="disability" id="disability" required>
                                <option>Yes</option>
                                <option>No</option> 
                            </select>
                        </div>

                        <div class="application__form--right application__form--right-last" >
                            &nbsp;
                        </div>
                    </div>

                    <!-- <div class="application__form--group">
                        <button type="button" value="next"  class="btn__app btn__app--next" id="next-1">next &rarr;</button>
                    </div> -->



                    <div class="application__form--group">

                        <div class="application__form--left">
                            <label for="bis-name" class="application__form--label">Business/company name <span class="application__form--label-sup">*</span></label>
                            <input type="text" class="application__form--input" name="biz_name" id="bis-name" required autocomplete="off" maxlength='50'>
                        </div>

                        <div class="application__form--right">
                            <label for="b-location" class="application__form--label">Business location or proposed location <span class="application__form--label-sup">*</span></label>
                            <input type="text" class="application__form--input" name="biz_location" id="b-location" required autocomplete="off" maxlength='60'>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="biz-age" class="application__form--label">How old is your business <span class="application__form--label-sup">*</span></label>
                            <select class="application__form--select" id="biz-age" name='biz_age' required>                                            
                                <option value="0-1">0-1 years</option>
                                <option value="0-3">1-3 years</option>
                                <option value="over 3 years">3 year and above</option>                                                                                     
                            </select>
                        </div>

                        <div class="application__form--right">
                            <label for="is-biz-reg" class="application__form--label">Is your  business registered? <span class="application__form--label-sup">*</span></label>
                            <select name="iz_biz_reg" id="is-biz-reg" class="application__form--select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="in progress">In progress</option>
                            </select>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="gen-revenue" class="application__form--label">Is your business already generating revenue? <span class="application__form--label-sup">*</span></label>
                            <select name="gen_revenue" id="gen-revenue" class="application__form--select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="application__form--right">
                            <label for="have-partner" class="application__form--label">Do you have a partner/team <span class="application__form--label-sup">*</span></label>
                            <select name="have_partner" id="have-partner" class="application__form--select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="partner-count" class="application__form--label">If yes how many? <span class="application__form--label-sup">*</span></label>
                            <select name="partner_cont" id="partner-count" class="application__form--select" required>
                                <option value="1-5">1-5</option>
                                <option value="5-10">5-10</option> 
                                <option value="10-20">10-20</option> 
                                <option value="above-20">Above 20</option> 
                            </select>
                        </div>

                        <div class="application__form--right">
                            <label for="biz-sector" class="application__form--label">What sector does your business or idea fall into? <span class="application__form--label-sup">*</span></label>
                            <select name="biz_sector" id="biz-sector" class="application__form--select" required>
                                <option value="no">Trade(Wholesale/Retail)</option>
                                <option value="no">Advertising</option>
                                <option value="no">Agriculture & Farming</option>
                                <option value="no">Communication</option>
                                <option value="no">Construction</option>
                                <option value="no">Creative</option>
                                <option value="no">Education</option>
                                <option value="no">Entertainment</option>
                                <option value="no">Fashion</option>
                                <option value="no">Finance</option>
                                <option value="no">Food& hospitality</option>
                                <option value="no">Information technology</option>
                                <option value="no">Manufacturing</option>
                                <option value="no">Music</option>
                                <option value="no">AI & Robotics</option>
                                <option value="no">Renewable energy</option>
                                <option value="no">Blockchain</option>
                                <option value="no">Real estate</option>
                                <option value="no">Utilities</option>
                                <option value="no">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="biz-description" class="application__form--label">Describe your business or start up idea including a description of product and services <span class="application__form--label-sup">*</span></label>
                            <textarea cols="30" rows="5" class="application__form--textarea" name="biz_descrp" id="biz-description" maxlength='500' style='height: 150px' required></textarea>
                        </div>

                
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="biz-impact" class="application__form--label">What is the impact of your business or idea to your immediate community and the society at large? <span class="application__form--label-sup">*</span></label>
                            <textarea cols="30" rows="5" class="application__form--textarea" name="biz_impact" id="biz-impact" maxlength='500' style='height: 150px' required></textarea>
                        </div>

                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="challenge" class="application__form--label">Tell us the biggest challenge your business or idea is facing <span class="application__form--label-sup">*</span></label>
                            <textarea cols="30" rows="5" class="application__form--textarea" name="challenge" id="challenge" maxlength='500' style='height: 150px' required></textarea>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="reason-for-ent" class="application__form--label">Why did you choose to become an entrepreneur <span class="application__form--label-sup">*</span></label>
                            <textarea cols="30" rows="5" class="application__form--textarea" name="reason_for_ent" id="reason-for-ent" maxlength='500' style='height: 150px' required></textarea>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="grant-use" class="application__form--label">If you win the grant what will you do with your seed capital? <span class="application__form--label-sup">*</span></label>
                            <textarea cols="30" rows="5" class="application__form--textarea" name="grantuse" id="grant-use" maxlength='500' style='height: 150px' required></textarea>
                        </div>
                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="agree-to-mentorship" class="application__form--label">If you win the grant do you agree to stay under close mentorship for one year <span class="application__form--label-sup">*</span></label>
                            <select name="agree_mentorship" id="agree-to-mentorship" class="application__form--select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>  
                            </select>
                        </div>

                        <div class="application__form--right">
                            <label for="sgd-goals" class="application__form--label">Which of the SDG goals does your business or idea supports? <span class="application__form--label-sup">*</span></label>
                            <select name="sgd_goals" id="sgd-goals" class="application__form--select" required>
                                <option>No poverty</option>
                                <option>Zero hunger</option>
                                <option>Good health and well-being</option>
                                <option>Quality education</option>
                                <option>Gender equality</option>
                                <option>Clean water and sanitation</option>
                                <option>Affordable and clean energy</option>
                                <option>Decent work and economic growth</option>
                                <option>Industry, innovation and infrastructure</option>
                                <option>Reduced inequality</option>
                                <option>Sustainable cities and communities</option>
                                <option>Responsible consumption and  production</option>
                                <option>Climate action</option>
                                <option>Life below water</option>
                                <option>Life on land</option>
                                <option>Peace and justice strong institution</option>
                                <option>Partnership to achieve goals.</option>
                            </select>
                        </div>
                    </div>

                    <div class="application__button--group">
                        <!-- <button type="button" value="Previous"  class="btn__app btn__app--previous" id="prev-2">&LeftArrow; Previous </button> -->
                        <button type="submit" value="register"  class="btn__app btn__app--next" id="register_one" name="register">register &rarr;</button>
                    </div>
                    

                </form>
            </div>
        </div>
    </section>
    <!-- Section one end -->


</main>

<!-- JS here -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/preloader.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery.smoothscroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-scroll.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- swiper js -->
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- <script>
        
    $(document).ready(function(){            
        $('#biz-description, #biz-impact, #challenge, #reason-for-ent, #grant-use').val("");            
    });
    
</script>

<script>
    $('#next-1').click(function(){
        
        Swal.fire({
            title: 'Next Step?',
            text: "proceed to section 2",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Go to section 2'
        }).then((result) => {
            if (result.isConfirmed) {                
                //val
                var fname = $('#first-name').val();
                var lname = $('#last-name').val();
                var oname = $('#other-name').val();
                var gender = $('#gender').val();
                var dob = $('#dob').val();
                var state = $('#state').val();
                var stateOfResidence = $('#state-of-residence').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var qualification = $('#qualification').val();
                var haveYouReceived = $('#have-you-received').val();
                var hearAboutUs = $('#hear-about-us').val();
                var disability = $('#disability').val();
                $('#first-name, #last-name, #other-name, #gender, #dob, #state, #state-of-residence, #phone, #email, #qualification, #have-you-received, #hear-about-us, #disability').css('border','1px solid #dcdee0');
                if(fname==="" || lname==="" || oname==="" || gender==="" || dob==="" || state==="" || stateOfResidence==="" || phone==="" || email==="" || qualification==="" || haveYouReceived==="" || hearAboutUs==="" || disability===""){
                    
                    if(fname === ""){                        
                        $('#first-name').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(lname === ""){                        
                        $('#last-name').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(oname === ""){                        
                        $('#other-name').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(gender === ""){                        
                        $('#gender').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(dob === ""){                        
                        $('#dob').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(state === ""){                        
                        $('#state').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(stateOfResidence === ""){                        
                        $('#state-of-residence').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(phone === ""){                        
                        $('#phone').css('border','1px solid #ff5d2f');                        
                    }                    
                    
                    if(email === ""){                        
                        $('#email').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(qualification === ""){                        
                        $('#qualification').css('border','1px solid #ff5d2f');                        
                    }                    
                    
                    if(haveYouReceived === ""){                        
                        $('#have-you-received').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(hearAboutUs === ""){                        
                        $('#hear-about-us').css('border','1px solid #ff5d2f');                        
                    }
                    
                    if(disability === ""){                        
                        $('#disability').css('border','1px solid #ff5d2f');                        
                    }         
                    
                }else{
                
                
                $('#section-2').fadeIn();
                $('#section-1').fadeOut();         

                // $('#section-1, #section-3').fadeOut();         
                
                }
                
                

            }
        
        
        });
        
        
    });
    
    
    //////////////Next -2
    $('#next-2').click(function(){           
        
        Swal.fire({
        title: 'Next step',
        text: "proceed to section 3",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Go to section 3'
        }).then((result) => {
            if (result.isConfirmed) {
                
                var bisName = $('#bis-name').val();
                var bLocation = $('#b-location').val();
                var bizAge = $('#biz-age').val();
                var isBizReg = $('#is-biz-reg').val();
                var bizSector = $('#biz-sector').val();
                var genRevenu = $('#gen-revenu').val();
                var havePatner = $('#have-patner').val();
                var bizDescription = $('#biz-description').val();
                var bizImpact = $('#biz-impact').val();
                var challenge = $('#challenge').val();
                var reasonForEnt = $('#reason-for-ent').val();
                var grantUse = $('#grant-use').val();
                var agreeToMentorship = $('#agree-to-mentorship').val();
                var sgdGoals = $('#sgd-goals').val();
                
                $('#bis-name, #b-location, #biz-age, #is-biz-reg, #biz-sector, #gen-revenu, #have-patner, #biz-description, #biz-impact, #challenge, #reason-for-ent, #grant-use, #agree-to-mentorship, #sgd-goals').css('border','1px solid #dcdee0');
                
                if(bisName==="" || bLocation==="" || bizAge==="" || isBizReg==="" || bizSector==="" || genRevenu==="" || havePatner==="" || bizDescription==="" || bizImpact==="" || challenge==="" || reasonForEnt==="" || grantUse==="" || agreeToMentorship==="" || sgdGoals===""){
                    
                    if(bisName===""){                        
                        $('#bis-name').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(bLocation===""){                        
                        $('#b-location').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(bizAge===""){                        
                        $('#biz-age').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(isBizReg===""){                        
                        $('#is-biz-reg').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(bizSector===""){                        
                        $('#biz-sector').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(genRevenu===""){                        
                        $('#gen-revenu').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(havePatner===""){                        
                        $('#have-patner').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(bizDescription===""){                        
                        $('#biz-description').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(bizImpact===""){                        
                        $('#biz-impact').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(challenge===""){                        
                        $('#challenge').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(reasonForEnt===""){                        
                        $('#reason-for-ent').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(reasonForEnt===""){                        
                        $('#reason-for-ent').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(grantUse===""){                        
                        $('#grant-use').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(agreeToMentorship===""){                        
                        $('#agree-to-mentorship').css('border','1px solid #ff5d2f');  
                    }
                    
                    if(sgdGoals===""){                        
                        $('#sgd-goals').css('border','1px solid #ff5d2f');  
                    }         
                
                    
                }else{                
                
                    // $('#section-3').fadeIn();
                    // $('#section-2, #section-1').fadeOut(); 
                    
                }
                

            }
        
        
        
         }); 
    

    });      
    

     //////////////prev -2
    $('#prev-2').click(function(){   
        $('#section-1').fadeIn();
        $('#section-2').fadeOut(); 
    
        // $('#section-2, #section-3').fadeOut(); 

    }); -->
    
    <!-- //////////////prev -3
    // $('#prev-3').click(function(){          
        
    //     $('#section-2').fadeIn();
    //     $('#section-1, #section-3').fadeOut(); 
     
    // });
    
    
//     $('#bv-inp').keyup(function(){  
//         var bvPin = $('#bv-inp').val();
        
//         $.ajax({                
//             type:'POST',
//             url: 'control.php',
//             dataType: 'text',
//             data:{
//                  query:'queryUser' ,
//                  bvPin:bvPin
//             },
            
//              beforeSend:function(){
//                 $('#loader').fadeIn();
//             },
           
//             success: function(data){                    
                
//                     $('#loader').fadeOut();
                    
//                     if(data.indexOf('Error! Sorry Beverified PIN does not exist.')>= 1){
                        
//                         $('#error').show();
//                         $('#user-found').hide();
//                         $('#err-content').html("<i class='fa fa-times-circle'></i> Sorry Beverified PIN does not exist."); 
//                         $('#submit-final').attr('disabled', 'disabled');
                        
//                     }
                    
//                     else if(data.indexOf('Error! Could not execute, try again')>= 1){                            
// //                           $('#user-found').html(data);    
//                          $('#error').show();
//                          $('#err-content').html("<i class='fa fa-times-circle'></i> Could not execute, try again");    
                         
                         
//                     }  -->
                    
                    
<!-- //                     else if(data.indexOf('Error! Invalid Beverified PIn format')>= 1){
                        
//                         $('#error').show();
//                         $('#user-found').hide();
//                         $('#err-content').html("<i class='fa fa-times-circle'></i> Error! Invalid Beverified PIN format"); 
                        
//                     }  
                     -->
<!-- //                     else{
//                         $('#user-found').show();
//                         $('#user-found').html(data); 
//                         $('#error').fadeOut();
//                         $('#submit-final').removeAttr('disabled');
//                     }
                      -->
                
//             }
            
            
            
//         });
        
//     });
    
<!-- </script>

<script>        
    $('#apply-form').submit(function(e){
        
        e.preventDefault();
        
        $.ajax({                
            type:'POST',
            url: 'control.php',
            dataType: 'text',
            data: new FormData(this),
            processData: false,
            contentType: false,    
            
            beforeSend:function(){
                
                $('#submit-loader').fadeIn();
                
            },
           
            success: function(data){                    
                
                    $('#submit-loader').fadeOut();
                    $('#msg').html(data);
                    
                    if(data.indexOf('Applcation submitted for review. You will receive updates via email')>= 1){
                        $('#apply-form').trigger('reset'); 
                        $('#user-found').empty();                             
                        setTimeout(function () {
                            $('#msg').empty();
                        }, 10000);                            
                                                 
                                                   
                    } 
                
            }
            
            
            
        });
        
        
    }); -->
    
    
</script>
</body>

<?php
    include ("include/footer2.php");
?>