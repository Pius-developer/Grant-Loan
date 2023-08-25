<?php
    $page_title = "Contact | Company's Name";
    include ("include/header1.php");
?>
<header class="header__contact">
    <div class="contact__banner">
        <div class="header__banner--content">
            <h1 class="header--primary contact__header--primary">we're here to help.</h1>
            <a href="index.php" class="contact__header--link">home</a> 
            
            <span class="contact__header--span">contact us</span>

        </div>
    </div>
</header>
<main>
    <section class="contact__section">
        <div class="contact__container">
            <div class="contact__box">
                <div class="contact__email">
                    <h2 class="contact__header">
                        Get in touch with us.
                    </h2>
                    <p class="paragraph">
                        Want to get in touch? We'd love to hear from you. Here's how you can reach us...
                    </p>

                    <div class="contact__content">
                        <div class="contact__left">
                            <p class="contact__text">
                                <i class="fa-solid fa-envelope contact__text--icon"></i> Email us:
                            </p>
                            <span class="contact__text--span">enquiry@salvageafrica.org</span>
                        </div>

                        <div class="">
                            <p class="contact__text">
                                <i class="fa-solid fa-envelope contact__text--icon"></i> Email us:
                            </p>
                            <span class="contact__text--span">info@salvageafrica.org</span>
                        </div>
                    </div>
                </div>

                <div class="contact__form">
                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="full-name" class="application__form--label">Full Name <span class="application__form--label-sup">*</span></label>
                            <input type="text" class="application__form--input" name="fullname" id="full-name" placeholder="What's your name?" required autocomplete="off" >
                        </div>

                        <div class="application__form--right">
                            <label for="email" class="application__form--label">Email <span class="application__form--label-sup">*</span></label>
                                <input type="text" class="application__form--input" name="email" id="email" placeholder="yourmail@mail.com" autocomplete="off" maxlength='50' required>
                        </div>
                    </div>
                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="subject" class="application__form--label">Subject <span class="application__form--label-sup">*</span></label>
                            <input type="text" class="application__form--input" name="subject" id="subject" placeholder="Your subject" required autocomplete="off" >
                        </div>

                    </div>

                    <div class="application__form--group">
                        <div class="application__form--left">
                            <label for="text-area" class="application__form--label">Messages <span class="application__form--label-sup">*</span></label>
                            <textarea cols="30" rows="5" class="application__form--textarea" name="text-area" id="text-area" placeholder="Your message......" required></textarea>
                        </div>

                    </div>

                    <div class="application__form--group">
                        <button type="submit" class=" btn-contact">send message</button>

                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
    include ("include/footer2.php");
?>
