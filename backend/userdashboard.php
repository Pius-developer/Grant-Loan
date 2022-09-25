<?php
    session_start();

    include 'actions/db.php';


     $uname = $_SESSION['uid'];

      $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "SELECT * FROM users WHERE username='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);

    if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

            $uname = $data['username'];
            $fname= $data['fullname'];
            $email= $data['email'];
            $pwd= $data['pwd'];

            $country= $data['country'];
            $btc= $data['btcaddr'];
            $totalbal= $data['totalbal'];
            $totalwith= $data['totalwith'];
            $lastdep= $data['lastdeposit'];             
            $earning= $data['earn'];
            $lastwith= $data['lastwith'];

            $date= $data['registerdate'];
            $invest= $data['refpaid'];
            $current= $data['current'];
             $totalinvestment = $data['totalinvestment'];
           

            
                



        }

    }
?>



                <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'loginsuc') == true){


 echo '<script>
    setTimeout(function() {
        swal({
            title: "Attention!",
            text: "Welcome to Space Exclusive Group dashboard. Please note that all payment should be made to the company officially generated wallet address for immediate comfirmation and swift transaction. Thank you!!",
            type: "warning"
        }, function() {
            window.location = "userdashboard.php";
        });
    }, 1000);
</script>';
    }


  


?>



<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Space Exclusive Group- userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <link rel="stylesheet" href="components/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="components/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
 
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>

 <!-- <style type="text/css">
    .grace{
      background-image: url(assets/img/9.gif );
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style> -->

<body>

  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
                <!-- <img alt="image" src="assets/img/bo.png" height="60px"  width="20%" class="header-logo" />-->
           <h6 style="color:#08237e"><?php date_default_timezone_set('Africa/lagos');
           $date= date('Y-m-d h:i:s');
           echo $date;
           
           ?><br>My Account</h6>

          </ul>
        </div>





        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                1 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <!-- <a href="#">Mark All As Read</a> -->
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="welcome.php" class="dropdown-item"> <span class="dropdown-item-avatar
                      text-white"> <img alt="image" src="assets/img/p4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user"><?php echo $fname?></span>
                    <span class="time messege-text">Space Exclusive Group guidelines !!</span>
                    <span class="time">on registration</span>
                  </span>
                </a> 

              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>




              
                              <?php
                                   $sql = 'SELECT * FROM adminmail';
                                 $result = mysqli_query($conn,$sql);
                                 $result_check = mysqli_num_rows($result);
                                 if($result_check > 0){
                                  while($data = mysqli_fetch_assoc($result)){
                                    $msg= $data['message'];
                                    $sub= $data['subject'];


                                  }
                                }
                                  ?>




          <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
                        fa-code"></i>
                  </span> <span class="dropdown-item-desc"> You Will be notified when something new appears.<span class="time">
                      </span>
                  </span>
                </a> 

              </div>
            
            </div>
          </li> -->



          
            <?php
                 $sql = 'SELECT * FROM kyc';
                     $result = mysqli_query($conn,$sql);
                     $result_check = mysqli_num_rows($result);
                     if($result_check > 0){
                          while($data = mysqli_fetch_assoc($result)){
                                    $dd= $data['dateup'];
                                    $img1= $data['idcard'];
                                    $img2= $data['Selfie'];
                                    $img3= $data['ssn'];
                                    $img4 = $data['license'];
                                    $uname= $data['username'];
                                    $proofid= $data['kid'];

                                  }
                                }

              ?>


          <li class="dropdown">
               


            <a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
              <!-- <?php echo "<img  src='kyc/".$img2." '>"; ?> -->
            <img alt="image" src="components/img/profile1.png" class="user-img-radious-style"> 
            <span class="d-sm-none d-lg-inline-block"></span></a>


            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php echo $uname?> </div>



              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
              </a> 

               <!-- <a href="#" class="dropdown-item has-icon"> <i data-feather="send"></i>
                Telegram Group
              </a> -->

              <a href="dephistory.php" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> 

              <a href="kyc.php" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Verify
              </a>

              <div class="dropdown-divider"></div>

              <a href="#" class="dropdown-item has-icon text-danger"> 
               
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:red" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
              </a>
            </div>
          </li>
        </ul>



        
      </nav>

      <div class="main-sidebar sidebar-style-2 " style="background-color:#08237e">
        <aside id="sidebar-wrapper ">
          <div class="sidebar-brand">
            <a href="#0"><img src="assets/img/bo.png" style="height: 50px;width: 100px;"></a><br>
            <a href="#"> <span class="logo-name" style="color:white;font-size:14px"><?php echo $uname;?></span>
            </a>
          </div>
          <ul class="sidebar-menu ">
        
            <li class="dropdown">
              <a href="userdashboard.php" class="nav-link" style="color:orange"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="deposit.php" class="nav-link" style="color:orange"><i
                  data-feather="credit-card"></i><span>Deposit</span></a>
              
            </li>

            <li class="dropdown">
              <a href="invest.php" class="nav-link" style="color:orange"><i data-feather="bar-chart"></i><span>Investment</span></a>
            </li>
           
            <li class="dropdown">
              <a href="trade.php" class="nav-link" style="color:orange"><i data-feather="bar-chart-2"></i><span>Trade/forcast</span></a>
            </li>
            
            <li class="dropdown">
              <a href="loanrequest.php" class="nav-link" style="color:orange"><i data-feather="activity"></i><span>Loan Request</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown" style="color:orange"><i data-feather="command"></i><span>Transaction history</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dephistory.php" style="color:white">Deposit History</a></li>
                <li><a class="nav-link" href="withdrawlhist.php" style="color:white">Withdrawal History</a></li>
                <li><a class="nav-link" href="investhistory.php" style="color:white">Investment History</a></li>
              </ul>
            </li>

          
            <li class="dropdown">
              <a href="withcomfirm.php" class="nav-link" style="color:orange"><i
                  data-feather="layers"></i><span>Request Withdrawal</span></a>
            </li>
           
              <a href="profile.php" class="nav-link" style="color:orange"><i data-feather="user"></i><span>My Profile</span></a>
             
            </li>
            <li>
              <a href="kyc.php" class="nav-link" style="color:orange"><i data-feather="upload-cloud"></i><span>Kyc Verification</span></a>
             
            </li>
            <li>
              <a href="proof.php" class="nav-link" style="color:orange"><i data-feather="send"></i><span>Confirm deposit</span></a>
             
            </li>
            <li>
              <a href="refer.php" class="nav-link" style="color:orange"><i data-feather="share-2"></i><span>Refer and earn</span></a>
             
            </li>
            <li class="nav-link">
             
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:#fff; background-color: red; border-radius: 5px; padding: 8px;" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
            </li>
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->


      <div class="main-content grace">

        <section class="section">
          <!-- <marquee>Join our telegram group for updates</marquee> -->

              <div class="card-body" style="height: 100px;">
                    <div class="media">
                      <img class="mr-3" src="assets/img/image-64.png" alt="Generic placeholder image">
                      <div class="media-body">
           

                           <div class="header-contacts-item hidden-sm hidden-xs">
                                     <div id="google_translate_element" style="font-size: 25px; color: #000;"></div>


                                 <script type="text/javascript">
                                 function googleTranslateElementInit() {
                                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                                }
                               </script>

                              <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            </div>
                      </div>
                    </div>
                  </div>
     


          <div class="row" >
              <div class="col-12 col-md-6 col-lg-6" style="width: 100%;">
                <div class="card">
                  <div class="card-header" style="background-color:#08237e;color:white">
                    <h4 style="color:#fff;">Welcome, <?php echo $fname;?></h4>
                  </div> 
                  <div class="card-body"> 
                  
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/img/a/4.gif" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Space Exclusive Group Investment</h5>
                            
                          </div>
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/img/a/3.gif" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Invest now</h5>
                      <!--       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.</p> -->
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>

              </div>



            </div>

           <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#08237e;color:white">
                  <h4 style="color:white"><i class="fab fa-btc"> Wallet Details</i></h4>
                  
                </div>
                <div class="card-body">
                  <!-- 
                        <iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=10&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="649px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe> -->

                       <div class="tradingview-widget-container" style="width: 100%; height: 46px;">
  <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22forextradzone.online%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D" style="box-sizing: border-box; height: 46px; width: 100%;"></iframe>
  <div class="tradingview-widget-copyriUSt"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
  
<style>
  .tradingview-widget-copyright {
    font-size: 13px !important;
    line-height: 32px !important;
    text-align: center !important;
    vertical-align: middle !important;
    font-family: 'Trebuchet MS', Arial, sans-serif !important;
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright .blue-text {
    color: #2962FF !important;
  }

  .tradingview-widget-copyright a {
    text-decoration: none !important;
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright a:visited {
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright a:hover .blue-text {
    color: #1E53E5 !important;
  }

  .tradingview-widget-copyright a:active .blue-text {
    color: #1848CC !important;
  }

  .tradingview-widget-copyright a:visited .blue-text {
    color: #2962FF !important;
  }
  </style></div>
<!-- TradingView Widget END --> 
                  


                  
                    </div>
                   
                    </div>
                  </div>
           </div>

          <!-- <a href="" style="font-size: 30px; font-weight: 700px">T</a> -->
         <div class="row ">
             <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-purple">
                    <i class="fas fa-wallet"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#08237e">
                          <i class="ti-arrow-up text-success"></i> 
                          $<?php echo $totalbal;?>
                        </h3>
                        <span class="col-purple" >Account Balance</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-red">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#08237e">
                          <i class="ti-arrow-up text-success"></i>
                          $<?php echo $current;?>
                        </h3>
                        <span class="" style="color:orange">Last Investment</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-green">
                    <i class="fas fa-braille"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#08237e">
                          <i class="ti-arrow-up text-success"></i>
                          $<?php echo $totalinvestment;?>
                        </h3>
                        <span class="" style="color:orange">Total active investment</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon l-bg-cyan">
                    <i class="fas fa-money-bill"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#08237e">
                          <i class="ti-arrow-up text-success"></i>
                          $<?php echo $totalwith;?>
                        </h3>
                        <span class="col-blue">Total withdrawal</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon l-bg-green">
                    <i class="fas fa-hand-holding-usd"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#08237e">
                          <i class="ti-arrow-up text-success"></i>
                          $<?php echo $earning;?>
                        </h3>
                        <span class="col-green">Total profit</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-green">
                    <i class="fas fa-braille"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#08237e">
                          <i class="ti-arrow-up text-success"></i>
                          $<?php echo $invest;?>
                        </h3>
                        <span class="" style="color:orange">Total Referral Bonus</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-cyan">
                    <i class="fas fa-cubes"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#08237e">
                          <i class="ti-arrow-up text-success"></i>
                          $<?php echo $lastdep;?>
                        </h3>
                        <span class="" style="color:orange">last Deposit</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>





          </div>
          





        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#08237e;color:white">
                  <h4 style="color:#fff"><i class="fab fa-btc"></i> We have a global coverage: our online trading community.</h4>
                  
                </div>
                <div class="card-body">
                  
                  <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/forex-heat-map/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22light%22%2C%22utm_source%22%3A%22binaryfunds.org%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-heat-map%22%7D" style="box-sizing: border-box; height: 400px; width: 100%;"></iframe>
                  
                    </div>

                    <div class="card-body">
                    <p class="text" style="font-size: 20px; color:#08237e ;">Start Trading</p>
                    <div class="buttons">
                     <a href="invest.php" class="btn btn-success">Buy</a> 
                     <a href="withcomfirm.php" class="btn btn-danger">sell</a>
                      
                      
                    </div>
                  </div>
                   
                    </div>
                  </div>
           </div>


          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                  <div class="card-header" style="background-color:#08237e; ">
                    <h4 style="color:#fff;">Your Downlines <i data-feather="user-plus"></i></h4>
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="email"><marque><i class="fas fa-users"></i> Invite & Earn Using Your referral link </marque></label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <button type="button" id="clickcopy" onClick="mycopy()" class="input-group-text btn" style="background-color:#08237e;color:white"><i data-feather="copy"></i>copy</button>
                        <script type="text/javascript">
                            
                            function mycopy(){
                                var copyTxt = document.getElementById("copybtc");
                                copyTxt.select();
                                document.execCommand("copy");
                            }


                            </script>

                      </div>
    <input type="text" class="form-control-plaintext" value="https://www.spacexclusivegroup.com/register.php?<?php echo $uname;?>" id="copybtc" readonly="">
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th style="color:black">Username</th>
                            <th style="color:black">email</th>
                            <th style="color:black">Fullname</th>
                            <th style="color:black">Amount paid</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

$sql = "SELECT * FROM reftable WHERE linkrefid ='$uname'";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
    while($data = mysqli_fetch_assoc($result)){

            $username = $data['username'];
            $email= $data['email'];
            $fullname= $data['fullname'];
            $linkrefid= $data['linkrefid'];
            $amountpaid= $data['amountpaid'];



                            echo "<tr> ";
                                           
                                            echo '<td>'.$username. '</td>'; 
                                            echo '<td>'.$email. '</td>'; 
                                            echo '<td>'.$fullname. '</td>'; 
                                            echo '<td>'.$amountpaid. '</td>';

                                                                                       
                                        
                            echo '</tr>';
    }

}else{
    echo 'No Referrals yet';
}
?>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            
           
            
              </div>
            </div>







<!-- AAGGFHDHHDHFDHFDJHFDHFDJHJDFJHFJD -->








          </div>
        </section>









        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>


        
    <footer class="main-footer">
        <div class="footer-left">
          <a href="#0">Space Exclusive Group. All rights reserved</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
      
    </div>
  </div>



  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>
  <script src="components/bundles/datatables/datatables.min.js"></script>
  <script src="components/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="components/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/datatables.js"></script>
</body>




</html>