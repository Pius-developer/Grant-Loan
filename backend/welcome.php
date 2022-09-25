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
  <title>Space Exclusive Group - userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="components/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
 
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">

  
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
                  </span> <span class="dropdown-item-desc"> <span class="message-user"><?php echo $fname?></span>
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




          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
              <?php echo "<img height='100%' width='100%' src='kyc/".$img2." '>"; ?>


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
     
      <div class="card">
                  




              <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card">
                  <div class="boxs mail_listing">
                    <div class="inbox-body no-pad">
                      <section class="mail-list">
                        <div class="mail-sender">
                          <div class="mail-heading">
                            <h4 class="vew-mail-header">
                              <b>Hello <?php echo $uname;?></b>
                            </h4>
                          </div>
                          <hr>
                          <div class="media">
                          <!--   <a href="#" class="table-img m-r-15">
                              <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                data-toggle="tooltip" title="Sachin Pandit">
                            </a> -->
                            <div class="media-body">
                              <span class="date pull-right"><?php echo $date;?></span>
                              <!-- <h5 class="text-primary">Admin</h5> -->
                              <small class="text-muted">Admin</small><br>
                              <small class="text-muted">From: support@Space Exclusive Group.com</small>
                            </div>
                          </div>
                        </div>
                        <div class="view-mail p-t-20">
                          <p>
                             <h4 style="color: #336699"> Space Exclusive Group Guide</h4>
                            Firstly, we are glad you choose to register and invest with us. We welcome you to <span style="color: orange;">Space Exclusive Group Investment Platform.</span> We want to make the system easy and stress free for you even as you enjoy your Returns on investments(ROI), that is why we are providing this guideline for you. </p>

                          <p>
                            <h4 style="color: #336699"> Deposit guide</h4>
                            <li>Navigate to your side bar and click on the <a href="deposit.php">deposit tab or click here.</a>.</li>
                            <li>Choose the means of deposit suitable for you, then click on proceed button</li>
                            <li>On submission, you will automatically generate a payment wallet depending on the gateway you choosed, also a QR code is generated</li>
                            <li>Proceed with the instructions provided.</li>
                            <li>After deposit, proceed to your dashboard side bar to comfirm your deposit by sending a screenshot of your payment</li>

                            <li>Easy, is not? For Support contact our live support chat</li>

                          </p>



             <section class="section">
          <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
           


                       <div class="row mt-4">
                      <div class="col-lg-8">
                        <div class="section-title" style="color: orange;"> Payment Method</div>
                        <p class="section-lead">These payment methods are unavailable for now. All customers will be notified via email and dashboard notification when to make use of the gateways. Stay connected and thanks for choosing Space Exclusive Group.</p>
                        <div class="images">
                          <img src="assets/img/cards/visa.png" alt="visa">
                          <img src="assets/img/cards/jcb.png" alt="jcb">
                          <img src="assets/img/cards/mastercard.png" alt="mastercard">
                          <img src="assets/img/cards/paypal.png" alt="paypal">
                        </div>
                      </div>
                 
                    </div>
</div></div></div></div></div></section>


                          <p>
                            <h4 style="color: #336699"> Investment guide</h4>
                            <li>After making and comfirming your deposit, navigate to investment in your side bar <a href="invest.php">investment tab or click here.</a>.</li>
                            <li>Choose a suitable investment plan that suits your wallet balance and make your investment</li>
                            <li>Your ROI depends on the investment plan you choose and the duration of the complete cycle</li>
                            <li>Invest high and enjoy high return</li>
                            <li>Easy, is not? For Support contact our live support chat</li>

                          </p>


                          <p>
                            <h4 style="color: #336699"> Withdrawal guide</h4>
                            <li>Navigate to your side bar and click on the <a href="deposit.php">Request Withdrawal tab or click here.</a>.</li>
                            <li>Comfirm your password for authenticity.</li>
                            <li>A withdrawal Otp will be sent to your email, use it and continue withdrawal</li>
                            <li>Choose the means of withrawal suitable for you, then click on proceed button</li>
                            <li>Your request will be processed immediately, for delay contact the live support</li>

                            <li>Easy, is not? For Support contact our live support chat</li>

                          </p>
                        </div>
                      
                      
                      </section>
                    </div>
                  </div>
                </div>
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