<?php
	
	session_start();
	include 'actions/db.php';
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Space Exclusive Group- Your investment management platform</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="components/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
 
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
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
            
           
          </ul>
        </div>
        
      </nav>
      <div class="main-sidebar sidebar-style-2 bg-blue" >
        <aside id="sidebar-wrapper ">
          <div class="sidebar-brand">
            <a href="#"> <img alt="image" src="components/img/profile1.png" height="170px" class="header-logo" /> <span class="logo-name">Admin</span>
            </a>
          </div>
          <ul class="sidebar-menu ">
        
            <li class="dropdown">
              <a href="admindashboard.php" class="nav-link" style="color:black"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="admindepositrequest.php" class="nav-link" style="color:black"><i
                  data-feather="credit-card"></i><span>Deposit request</span></a>
              
            </li>

            <li class="dropdown">
              <a href="adminupdatecustomer.php" class="nav-link" style="color:black"><i
                  data-feather="activity"></i><span>updatecustomerwallet</span></a>
            </li>
            <li class="dropdown">
              <a href="adminupdateloan.php" class="nav-link" style="color:black"><i
                  data-feather="activity"></i><span>Update loan Info</span></a>
            </li>

            <li class="dropdown">
              <a href="adminwithdrawlrequest.php" class="nav-link" style="color:black"><i data-feather="refresh-cw"></i><span>withdrawl request</span></a>
            </li>
            <li class="dropdown">
              <a href="adminproof.php" class="nav-link" style="color:black"><i data-feather="video"></i><span>Check proof of payment</span></a>
            </li>

            <li class="dropdown">
              <a href="admincheckyc.php" class="nav-link" style="color:black"><i data-feather="video"></i><span>Check Kyc</span></a>
            </li>

            <li class="dropdown">
              <a href="adminmail.php" class="nav-link" style="color:black"><i data-feather="mail"></i><span>Send mail</span></a>
            </li> 
            
            <li class="nav-link">
              <form action="actions/adminloggout.php" method="POST"><button type="submit" class="btn btn-danger" name="adminlogout"><i data-feather="power"></i> Admin Logout</button></form>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
                 <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                  <div class="card-header bg-blue">
                    <h4 class="col-white">Withdrawl Request</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead >
                          <tr>
                            <th style="color:black">Username</th>
                            <th style="color:black">Amount</th>
                            <th style="color:black">date of Withdrawl</th>
                            <th style="color:black">Withdrawl status</th>
                            <th style="color:black">Earning</th>
                            <th style="color:black">Btc Address</th>
                            <th style="color:black">Payment Type</th>
                            <th style="color:black">Action</th>
                             <th style="color:black">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

$sql = "SELECT * FROM  withdawalrequest ORDER BY id DESC";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);
if($result_checker > 0){
    while($data = mysqli_fetch_assoc($result)){

      $uname= $data['username'];
            $amount= $data['amount'];
            $dd= $data['dateofwith'];
            $status= $data['statusofwith'];
            $totalbal= $data['earning'];
            $btc= $data['btcaddr'];
            $depid= $data['withid'];
            $paytype= $data['paytype'];


                            echo "<tr> ";
                                            
                                            
                                            echo '<td>'.$uname. '</td>'; 
                                            echo '<td>'.$amount. '</td>'; 
                                            echo '<td>'.$dd. '</td>';
                                            echo '<td>'.$status. '</td>';
                                            echo '<td>'.$totalbal. '</td>';
                                            echo '<td>'.$btc. '</td>';
                                            echo '<td>'.$paytype. '</td>';
                                            //echo '<td>'.$current. '</td>';
                    echo "<td> <form method='POST' action='actions/pay.php'><input type='hidden' name='depid' value='$depid'> <button type='submit' name='pay' class='btn bg-green'><i class='fas fa-coins'></i> pay</button></form></td>"; 
                    
                        echo "<td> <form method='POST' action='actions/deletewithad.php'><input type='hidden' name='withid' value='$depid'> <button type='submit' name='delete' class='btn' style='background-color:red;color:white'><i class='fas fa-trash-alt'></i> Delete</button> </form></td>";  
                                        
                            echo '</tr>';
    }

}
?>


                        </tbody>
                      </table>
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
  <script src="components/bundles/datatables/datatables.min.js"></script>
  <script src="components/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="components/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/datatables.js"></script>
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>