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

      



                  <div class="card-body">
                    <div class="media">
                      <img class="mr-3" src="assets/img/image-64.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0">Space Exclusive Group referrals</h5>
                        <p class="mb-0">Refer users to Space Exclusive Group community and earn 5% of the total amont invested by the person you referred. We are also offering our customers loans depending on how many referral they have and other qualifications. For support, contact our live support or write us a mail at <a href="#0"> support@spaceexclusivegroup.com</a></p>
                      </div>
                    </div>
                  </div>
     


     


          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                  <div class="card-header" style="background-color:#08237e; ">
                    <h4 style="color:orange;">Your Downlines <i data-feather="user-plus"></i></h4>
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


  <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>

</html>