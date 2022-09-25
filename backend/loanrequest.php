
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
            
             $current= $data['current'];

            
                



        }

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

  <!--begining of new css-->
  <link rel="stylesheet" href="asset/css/app.min.css">
  <link rel="stylesheet" href="asset/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="asset/bundles/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="asset/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="asset/bundles/summernote/summernote-bs4.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="asset/css/custom.css">

  <!--end of new css-->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/bundles/prism/prism.css">
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">




  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />

 
  <link href="vendorz/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript">
                        

                        function checkamountbal_with(){
                               
                               // var getamountbalance = document.getElementById("get_amoutbal").innerHTML;
           
                                var walletbals = document.forms['withdrawal']['walletbal'].value;
           
                                 var amounwith = document.forms['withdrawal']['amount'].value;
           
                                 var amountinvestnumber = parseInt(amounwith,10);
           
                               // alert(getamountdeposit);
           
                               if(amountinvestnumber > walletbals){
           
                                   alert("insufficient fund");
           
                                   // getamountdeposit.focus();
           
                                   return false;
           
                               }
           
                               return true;
                       }
           
           
           
           
           
                           </script>
           

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
            <a href="#"> <img alt="image" src="components/img/profile1.png" class="header-logo" /> <span class="logo-name" style="color:white;font-size:14px"><?php echo $uname;?></span>
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
      
      <?php

//$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//  if(strpos($url, '') == true){
   // echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Starter Plan Investment Was Successful... </p>";
 // }

 // if(strpos($url, '') == true){

  //  echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your basic Plan Investment Was Successful....</p>";
 // }


?>
                 <div class="row">
                
            
              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:white">
                  <div class="card-bg" style="background-color:#08237e">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Empowerment Loan</h5>
                      <h2 class="mb-3 font-18">15% upfront payments</h2>
                      <h2 class="mb-3 font-18" style="color: orange;">$5000<sub style="color: green;">Minimum</sub></h2>
                      <h2 class="mb-3 font-18" style="color: orange;">$30000<sub style="color: green;">maximum</sub></h2>
                      
                      <h2 class="mb-3 font-18">Duration - 6 Months</h2>
                      <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal1">request</a>

                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-blue font-30 p-r-30"></i>
                      
                    </div>
                    <canvas id="cardChart3" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:white">
                  <div class="card-bg" style="background-color:#08237e">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Ultimate Loan</h5>
                      <h2 class="mb-3 font-18">10% upfront payment</h2>
                       <h2 class="mb-3 font-18" style="color: orange;">$30000<sub style="color: green;">Minimum</sub></h2>
                      <h2 class="mb-3 font-18" style="color: orange;">$100000<sub style="color: green;">maximum</sub></h2>
                      <h2 class="mb-3 font-18">Duration - 1 Year</h2>
                      <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">request</a>
                     
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-teal font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart4" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>




</div>
              <div class="row">
            


              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" style="background-color:#08237e">
                  <div class="card-icon l-bg-purple">
                    <i class="fas fa-wallet"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0 col-white">
                          <i class="ti-arrow-up text-success"></i> 
                          $<?php echo $totalbal;?>
                        </h3>
                        <span class="" style="color:white">Total Balance</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             
                     </div>
        </section>

<!-- silver plan modal -->


         <!-- Diamond plan modal -->
       <div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content " style="color:black">
              <div class="modal-header" style="background: ;">
                <h5 class="modal-title" id="formModal" style="color:#08237e">Complete Loan Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_diamond(){
              var walletbals = document.forms['investd']['loanbal'].value;
                      var amounwith = document.forms['investd']['amountd'].value;
                      var amountinv = parseInt(amounwith,10);
                 
                    if( amountinv > walletbals){
                      
                        swal('Error', 'you are currently ineligble for this loan plan!', 'error');
                      
                        return false;
                  
                    }return true;
            }
                </script>

             
                <form name="investd" method="POST" action="loanconfirm.php" onsubmit="return checkamountbal_diamond()" class="needs-validation" novalidate="">
                 
                    <!-- <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="Empowerment" name="plan" readonly="">
              <?php     
                      $sql = "SELECT * FROM investment WHERE username='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);

    if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

            $loanbal = $data['loanbal'];
    }}

            ?>
                  <div class="form-group">
                    <label style="color:black">Loan Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                   
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="loanbal" value="<?php echo $loanbal;?>">
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amountd" tabindex="7" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name="proceed" class="btn m-t-15 waves-effect" tabindex="8" style="background:#08237e;color:white "><i class="far fa-paper-plane"></i> proceed</button>                </form>
              </form>
                </div>
            </div>
          </div>
        </div>







       <!-- platinum plan modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
              <h5 class="modal-title" id="formModal" style="color:#08237e">Request Failed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_platinum(){
                     var walletbal = document.forms['investp']['totalbal'].value;
                      var amound = document.forms['investp']['amountp'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                        alert("you have insufficient wallet funds");
                        return false;
                    }if(amountchk < 15000){
                      alert("Amount you entered is below the minimum loan amount for this plan");
                        return false;
                   
                    }return true;
               }
                </script>

              <h6>Oops! Loan Plan Unavailable for now, check later</h6>
             
             <!-- <form name="investp" method="POST" action="loanconfirm1.php" onsubmit="return checkamountbal_platinum()" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label style="color:black">Loan Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="ultimate" name="plan" readonly="">
                   
                <!-- <div class="form-group">
                    <label style="color:black">Loan amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
              
          <input type="number" class="form-control" placeholder="enter amount here..." name="amountp" tabindex="9" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
              
                  <button type="submit" name="proceed" class="btn  m-t-15 waves-effect" tabindex="7" style="background: linear-gradient(45deg, #121045, #98258d);color:orange "><i class="far fa-paper-plane"></i>proceed</button>
                </form>
              </div>
            </div>
          </div>
        </div>-->




    </div>
  </div>


  
  <div class="mgm" style="display: none;">
<div class="txt" style="color:black;">Someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    top: 90px;
    right: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 900;
    display: block;
    color:#1f16ba;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#1f16ba;
}
</style>
<script data-cfasync="false" src="cdn-cgi%5Cscripts%5C5c5dd728%5Ccloudflare-static%5Cemail-decode.min.js"></script><script type="text/javascript">
var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa', 'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa', 'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
    var listPlans = ['$500','$1500','$1000','$10,000','$2000','$3000','$4000', '$600', '$700', '$2500'];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'Someone from <b>' + country + '</b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="components/bundles/prism/prism.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>

  <script src="asset/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/sweetalert.js"></script>
  <script src="asset/js/page/sweetalert.js"></script>
  
  <!-- JS Libraies -->
  <script src="asset/bundles/chartjs/chart.min.js"></script>
  <script src="asset/bundles/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="asset/bundles/summernote/summernote-bs4.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/widget-data.js"></script>
  <!-- Template JS File -->
  
  <!-- Custom JS File -->

  <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
 
</body>




</html>