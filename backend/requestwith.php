
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

            $name = $data['username'];
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
            
           

            
                



        }

    }
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Space Exclusive Group userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
  
</head>

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
                      text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> 

              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>









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






          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="components/img/profile1.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
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
            <!-- <a href="#"> <img alt="image" src="components/img/profile1.png" class="header-logo" />  -->
              <span class="logo-name" style="color:white;font-size:14px"><?php echo $uname;?></span>
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


      <div class="main-content">
          
                        <div class="card-body" style="height: 100px;">
                    <div class="media">
                      <img class="mr-3" src="assets/img/image-64.png" alt="Generic placeholder image">
                      <div class="media-body">
                       <!--  <h5 class="mt-0">Space Exclusive Group Profile verification</h5>
                        <p class="mb-0">Verifying your ID and proof of Residence will allow you to make withdrawals from your account.<br> You will need to provide us with Proof of residence document.<br> This will enable us to comfirm it is you before any withdrawal from your account and deposit reach over $30,1000</p> -->

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
     
                 <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
              <script type="text/javascript">
             function checkamountbal_platinum(){
                     var walletbal = document.forms['investp']['earnings'].value;
                      var amound = document.forms['investp']['amountwith'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                      swal('Insufficient Funds', 'Your withdrawl Request failed due to Insufficient Funds in your earning wallet!', 'error');
                      
                        return false;
                    }if(amountchk == walletbal ){
                      swal('Error', 'sorry you cant withdraw evrything from your account!', 'error');
                        
                      return false;
                   
                    }return true;
               }
                </script>
                </script>
                <div class="card-header" style="background:#08237e;color:white ">
                  
                  <span style="font-weight:bold">Request For a Withdrawal .</span>
    
            </div><br><br>

            <div>
              <form action="actions/otp.php" method="post">
                <p>Check your email for withdrawal Otp, request another one if you did not recieve a mail.</p>

                      <input type="hidden" class="form-control" value="<?php echo$email?>" name="email" id="inlineFormInputGroup" placeholder="enter password here.." required autofocus">

                        <input type="hidden" class="form-control" value="<?php echo$fname?>" name="name" id="inlineFormInputGroup" placeholder="enter password here.." required autofocus">

                     <button name="otp" type="submit" class="btn" style="background:#08237e;color:white " tabindex="4"><i class="far fa-credit-card"></i>Resend Otp</button>
                   </form>
              </div>

                <div class="card-body">
                <div class="col-lg-6">

                <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'withsuc') == true){
    echo "<p class='alert alert-primary text-center' style='color:white'><i class='fas fa-hourglass-end'></i> your withdrawl request has been sent... </p>";
  }


  if(strpos($url, 'success') == true){
    echo "<p  text-center' style='color:green; font-size:17px;'><i class='fas fa-hourglass-end'></i> A withdrawal otp was sent to your email, use it and complete withdrawal request!! </p>";
  }

    if(strpos($url, 'error') == true){
    echo "<p  text-center' style='color:green; font-size:17px;'><i class='fas fa-hourglass-end'></i> An error occured, please check your connection!! </p>";
  }

  


?>
</div>
    <form name="investp" method="POST" action="actions/withdrawlaction.php" onsubmit="return checkamountbal_platinum()" class="needs-validation" novalidate="">
                  <div class="row">
                  <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="card-body card-type-3">
                    <div class="row">
                      <div class="col">
                        <h6 class="col-black mb-0">Withdraw Balance</h6>
                        <span class="font-weight-bold mb-0">$<?php echo $earning;?></span>
                      </div>
                      <div class="col-auto">
                        <div class="card-circle l-bg-purple text-white">
                          <i class="fas fa-briefcase"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap">Earning balance</span>
                    </p>
                  </div>
                </div>
              </div>

     

                    <div class="col-lg-12">
                    <div class="card-body">
              
                     
                    <div class="form-group">
                    <form name="withdraw" method="POST" action="actions/withdrawaction.php" onsubmit="return checkamountbal_withdraw()" class="needs-validation" novalidate="">
                    
                    <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="btc" id="customRadio1" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio1" style="color:orange"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via Bitcoin</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="eth" id="customRadio4" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio4" style="color:orange"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via Ethereum</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="trantype" value="usdt" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio3" style="color:orange"><i class="fas fa-chevron-right" style="color:black"></i> Withdrawal Via Usdt</label>
                    </div>
                    <br>

                  <label>Withdrawal OTP</label>
                    <div class="input-group mb-2">
                        
                    <div class="input-group-prepend">
                          
                          <div class="input-group-text"><i class="fas fa-wallet"></i></div>
                        </div>

                        <input type="text" class="form-control" name="btc" id="inlineFormInputGroup" placeholder="enter otp here.." required autofocus">
                        <div class="invalid-feedback">
                      please enter otp sent to your email
                    </div>
                    </div>
                    <label>Enter Wallet Address</label>
                    <div class="input-group mb-2">
                        
                    <div class="input-group-prepend">
                          
                          <div class="input-group-text"><i class="fas fa-wallet"></i></div>
                        </div>

                        <input type="text" class="form-control" name="btc" id="inlineFormInputGroup" placeholder="enter wallet address here.." required autofocus">
                        <div class="invalid-feedback">
                      Please Enter your wallet address
                    </div>
                    </div>
                    </div>
                   
                    <div class="form-group">
                    <label>Amount to Withdraw</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="hidden" name="earnings" value="<?php echo $earning;?>">
      
                        <input type="hidden" name="uname" value="<?php echo $uname;?>">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="number" class="form-control" placeholder="enter amount here..." name="amountwith" tabindex="3" required autofocus">
                        <div class="invalid-feedback">
                      Please Enter an Amount
                    </div>
                      </div>
                    </div>
                  </div>
               
                </div>
                
                    </div>
                   <button name="proceed" type="submit" class="btn" style="background:#08237e;color:white " tabindex="4"><i class="far fa-credit-card"></i> Withdraw</button>
                   </form>
                  </div>
            </div>
          </div>
           
      
              </div>
            </div>
          </div>
        </section>
        
      
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
  <script src="asset/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/sweetalert.js"></script>
</body><!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->


</html>