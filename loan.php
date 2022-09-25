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
    <section class="loan__boxes">
        <div class="u-text-center">
            <h2 class="header--secondary">our loan offer</h2>
        </div>

        <div class="loan_container">
            <div class="loans">
                <h4>starters</h4>

                <h2 style=" color: green;">
                    <span class="span-a">min</span>  &nbsp; <span><small class="small-a">#</small> 10,000</span>
                </h2>

                <h2 style=" color: green;">
                    <span class="span-a">max</span> &nbsp; <span><small>#</small> 50,000</span> 
                </h2>
                <h4 class="footer-h4">Duration - <span>Monthly</span></h4>

                <h6 class="footer-h6">
                    5<sup>%</sup><span style="padding-left: 1rem; font-size: 2rem; font-weight: 600;"> interest</span>
                </h6>

                <a href="starter.php" class="btn--loan u-margin-top-mid" name="starter_btn">
                    get loan &rarr;
                </a>

            </div>

            <div class="loans">
                <h4>Intermediate</h4>

                <h2 style=" color: #4070F4;">
                    <span class="span-a">min</span>  &nbsp; <span><small class="small-a">#</small> 50,000</span>
                </h2>

                <h2 style=" color: #4070F4;">
                    <span class="span-a">max</span> &nbsp; <span><small>#</small> 250,000</span> 
                </h2>
                <h4 class="footer-h4">Duration - <span>Monthly</span></h4>
                <h6 class="footer-h6">
                    15<sup>%</sup><span style="padding-left: 1rem; font-size: 2rem; font-weight: 600;"> interest</span>
                </h6>

                <a href="intermediate.php" class="btn--loan u-margin-top-mid" name="inter_btn">
                    get loan &rarr;     
                </a>
            </div>

            <div class="loans">
                <h4>Advance</h4>

                <h2 style=" color: gold;">
                    <span class="span-a">min</span>  &nbsp; <span><small class="small-a">#</small> 250,000</span>
                </h2>

                
                <h2 style=" color: gold;">
                    <span class="span-a">max</span> &nbsp; <span><small>#</small> 1 million</span> 
                </h2>
                <h4 class="footer-h4">Duration - <span>Monthly</span></h4>
                <h6 class="footer-h6">
                    20<sup>%</sup><span style="padding-left: 1rem; font-size: 2rem; font-weight: 600;"> interest</span>
                </h6>

                <a href="advance.php" class="btn--loan u-margin-top-mid" name="advance_btn">
                    get loan &rarr;
                </a>

            </div>
        </div>
    </section>
</main>



<?php
    include ("include/footer2.php");
?>