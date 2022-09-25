<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if(isset($page_title)) {
                echo " $page_title ";
            }   
        ?> - Logo Name
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css"/>

    <script src="https://kit.fontawesome.com/ed9692bd0e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/verify.css">   
    <link rel="stylesheet" href="css/responsive.css"> 

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="css/fontawesome-free-6.1.2-web/css/all.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- swiper css -->
    <link rel="stylesheet" href="dist/css/swiper-bundle.min.css">

   <!-- Link Swiper's CSS -->
   <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/slick.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/slick-theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-editable-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/jquery.fancybox.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/nouislider.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/default.css" media="all" />
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css" media="all" /> -->
    <link rel="stylesheet" type="text/css" href="assets/responsive.css" media="all" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Preloader --> 
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="image/logo/logo2.png" alt="">
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>


    <nav class="navigation" >
        <a href="index.php" class="nav__logo">
            <img src="" alt="logo" class="nav__img">
        </a>

        <div class="nav__menu">
            <ul class="nav__item">
                <i id="menu-close" class="fas fa-times"></i>
                <li class="nav__list"><a class="nav__link" href="index.php">Home</a></li>
                <li class="nav__list"><a class="nav__link" href="project.php">Project</a></li>
                <li class="nav__list"><a class="nav__link" href="contact.php">Contact</a></li>
                <li class="nav__list"><a class="nav__link" href="loan.php">Loan</a></li>
                <li class="nav__list"><a class="nav__link" href="status.php">Applicant Status</a></li>
            </ul>

            <img src="image/menu.png" alt="menu" id="menu-btn">
        </div>
        
    </nav>


