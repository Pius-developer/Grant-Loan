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

<link rel="stylesheet" type="text/css" href="plat.css">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="stylesheet" type="text/css" href="font-awesome.css">
<script src="https://use.fontawesome.com/4b789087e7.js"></script>
<link href="https://use.fontawesome.com/4b789087e7.css" media="all" rel="stylesheet"> 
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
              <!-- <?php echo "<img height='100%' width='100%' src='kyc/".$img2." '>"; ?> -->
            <img alt="image" src="components/img/profile1.png"
                class="user-img-radious-style"> 
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
              <a href="trade.php" class="nav-link" style="color:orange"><i data-feather="bar-chart-2"></i><span>Trade/forcast</span></a>
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




      <div class="main-content grace">

        <section class="section">



        


          




    <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#08237e;color:white">
                  <h4 style="color:white"><i class="fab fa-btc"></i> Trade Now!!</h4>
                  
                </div>
                <div class="card-body">
<div class="block-charts" id="chart-holder">
    <!--<div class="block-charts ">-->
    <div class="one-chart">
        <div class="mini-chart-wrap">
            <div class="deal-finish-popup">
                <div class="deal-finish-popup-win">
                    <h2 class="dfp-head">Congratulations! You predicted the market and earned $19!</h2>
                    <p class="dfp-body">
                    </p>
                    <div class="dfp-foot">
                        <a class="deposit.php" target="_parent" href="">
                            <div class="left-foot"><i class="fa fa-arrow-left"></i></div>
                            <div class="right-foot">
                                <span>Open an account</span>,
                                and start trading now!
                            </div>
                        </a>
                        <a class="restart" id="restart"><i class="fa fa-refresh"></i><span>New forecast</span></a>
                    </div>
                </div>
                <div class="deal-finish-popup-lose">
                    <h2 class="dfp-head">Incorrect forecast</h2>
                    <p class="dfp-body">
                    </p>
                </div>
            </div>
            <div class="mini-chart-legend">
                <div class="mc-table lg-ogo">
                    <div class="mc-table-td mc-logo-empty"></div>
                    <div class="mc-table-td mc-table-td_price" data-style="width: 30%;">
                        <div class="mc-table-td-legend">Price</div>
                        <div class="mc-table-td-value text-green">$10</div>
                    </div>
                    <div class="mc-table-td mc-table-td_profit" data-style="width: 40%;">
                        <div class="mc-table-td-legend">Profit</div>
                        <div class="mc-table-td-value">$19</div>
                    </div>
                    <div class="mc-table-td mc-table-td_revenue" data-style="width: 30%;">
                        <div class="mc-table-td-legend">Revenue</div>
                        <div class="mc-table-td-value text-green">90%</div>
                    </div>
                </div>
            </div>
            <div class="mini-chart-btn-cont">
                <div class="mc-logo mc-logo_eurusd">
                    <form>
                        <div id="radio" class="ui-buttonset">
                            <input type="radio" id="radio1" name="radio" value="0" class="ui-helper-hidden-accessible"><label for="radio1" style="width: 180px;" class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left" role="button" id="Apple"><span class="ui-button-text">Apple</span></label>
                            <input type="radio" id="radio2" name="radio" value="1" class="ui-helper-hidden-accessible"><label for="radio2" style="width: 180px;" class="ui-button ui-widget ui-state-default ui-button-text-only" role="button" id="GAZPROM"><span class="ui-button-text">GAZPROM</span></label>
                            <input type="radio" id="radio3" name="radio" value="2" class="ui-helper-hidden-accessible"><label for="radio3" style="width: 180px;" class="ui-button ui-widget ui-state-default ui-button-text-only ui-corner-right" role="button" id="EURUSD"><span class="ui-button-text">EUR/USD</span></label>
                        </div>
                    </form>
                </div>
                <button class="mc-btn mc-btn_call" id="btn_call">
                    <img class="svg-ico-call" src="arrow-call.svg">
                    <span>Will go<b>up</b></span>
                </button>
                <button class="mc-btn mc-btn_put" id="btn_put">
                    <img class="svg-ico-put" src="arrow-put.svg">
                    <span>Will go<b>down</b></span>
                </button>
                <div class="wait-deal-end">
                    <div class="wde-legend">Wait for trade close:</div>
                    <div class="wde-timer-cont">
                        <div class="chart-timer"><i><img class="svg-ico-call" src="clock-spinner.svg"></i><span class="chart-time-self">00:08</span></div>
                    </div>
                </div>
            </div>
            <div class="mini-chart-cont">
                <div class="chart-padding">
                    <div id="chart1" class="chart">
                        <!--<img width="490" height="254"-->
                        <!--style="height: 254px; width: 490px;vertical-align: top;margin-bottom: -10px;"-->
                        <!--src="images/plat-template.png">-->
                        <div width="490" height="254" style="height: 254px; width: 490px;vertical-align: top;margin-bottom: -10px;" id="chart-m"><canvas class="ct-chart ct-chart-bg" width="490" height="254"></canvas><canvas class="ct-chart ct-chart-main" style="z-index: 100;" width="490" height="254"></canvas><canvas class="ct-chart ct-chart-front" width="490" height="254"></canvas><canvas class="ct-chart ct-chart-bg" width="490" height="254"></canvas><canvas class="ct-chart ct-chart-main" width="490" style="z-index: 100;" height="254"></canvas><canvas class="ct-chart ct-chart-front" width="490" height="254"></canvas></div>
                        <!--<canvas width="524" height="220" style="position: absolute; left: 0px; top: 0px; height: 220px; width: 524px;"></canvas>-->
                        <div class="chart-timer">
                          <i>
                            <img class="svg-ico-call" src="clock-spinner.svg">
                          </i>
                            <!--<span    class="chart-time-self">00:08</span>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="deal-finish-popup mini-chart-wrap deal-finished deal-finished_win">
        <div class="deal-finish-popup-win">
            <h2 class="dfp-head">
                Your trading result: <span id="win_amt"></span><br>Try again!</h2>
            <p class="dfp-body">
            </p>
            <div class="dfp-foot">
                <a class="" target="_parent" href="">
                    <div class="left-foot"><i class="fa fa-arrow-left"></i></div>
                    <div class="right-foot">
                        <span>Open an account</span>,
                        and start trading now!
                    </div>
                </a>
                <a class="restart" id="restart-chart"><i class="fa fa-refresh"></i><span>New forecast</span></a>
            </div>
        </div>
        <div class="deal-finish-popup-lose">
            <h2 class="dfp-head">Incorrect forecast</h2>
            <p class="dfp-body">

            </p>
        </div>
    </div>
</div>

<script src="jquery-1.js"></script>
<script src="moment.js"></script>
<script src="chart.js"></script>
<script src="main.js"></script>


                  
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
           </div>

<!-- AAGGFHDHHDHFDHFDJHFDHFDJHJDFJHFJD -->



<div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#08237e;color:white">
                  <h4 style="color:white">Our <i class="fab fa-btc"></i> Live Trading Chart. Analyse with our charts.</h4>
                  
                </div>
                <div class="card-body">
                  <!-- 
                        <iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=10&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="649px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe> -->

                        <iframe src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_5c503&amp;symbol=COINBASE%3ABTCUSD&amp;interval=1&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;hotlist=1&amp;studies=%5B%5D&amp;theme=Dark&amp;style=0&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=forextradzone.online&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=COINBASE%3ABTCUSD" style="height:400px;width:100%"></iframe>
                  



                    </div>
                   
                    </div>
                  </div>
           </div>









        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#08237e;color:white">
                  <h4 style="color:white"><i class="fab fa-btc"></i> Simple Video Overview</h4>
                  
                </div>
                <div class="card-body">
                  
                  <video width="100%" controls="" autoplay="">
                     <source src="trim1v.mp4" type="video/mp4">
 
                   </video>





                  
                  <div class="card-body">
                    <p class="text" style="font-size: 20px; color:#08237e ;">Start Trading</p>
                    <div class="buttons">
                     <a href="invest.php" class="btn btn-success">Buy</a> 
                     <a href="requestwith.php" class="btn btn-danger">sell</a>
                      
                      
                    </div>
                  </div>
                  
             
                  
                    </div>
                   
                    </div>
                  </div>
           </div>

           <!-- ggghghghggh -->




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