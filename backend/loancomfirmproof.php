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
  <title>Space Exclusive Group - Your investment management platform</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="components/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
 
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
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> 
              <i data-feather="align-justify"></i></a>
            </li>
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
                  data-feather="credit-card"></i><span>Activate Grant Info</span></a> 
            </li>

            <li class="dropdown">
              <a href="" class="menu-toggle nav-link has-dropdown"  style="color:black"><i data-feather="list"></i><span>Loan Informations</span></a>


                  <ul class="dropdown-menu">
                <li><a class="nav-link" href="adminupdateloan.php" style="color:#fff;">Loan Applicants</a></li>
                <li><a class="nav-link" href="loancomfirmproof.php" style="color:#fff;">Loan Payment Proof</a></li>
                
              </ul>
            </li>

            <li class="dropdown">
              <a href="adminproof.php" class="nav-link" style="color:black"><i data-feather="video"></i><span>Check proof of payment</span></a>
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
                    <h4 class="col-white">Proof Of Loan Payments (Stater)</h4>
                  </div>
                  <div class="card-body">
                   <div class="row">
              
                <?php
								 $sql = 'SELECT * FROM loanproof';
                                 $result = mysqli_query($conn,$sql);
                                 $result_check = mysqli_num_rows($result);
                                 if($result_check > 0){
                                 	while($data = mysqli_fetch_assoc($result)){
                                 		$dd= $data['dateup'];

										$img= $data['imageup'];
                    $email= $data['email'];

                    $plan= $data['plan'];


                    $status = $data['status'];

                    $proofid= $data['proofid'];


                    if ($plan == 'Starter') {
               
										
                  echo "<div class='col-12 col-md-6 col-lg-3'>";
                  echo "<div class='card card-primary'>";
                  echo "<div class='card-header'>";
                  echo  "<p style='color:black'>Proof of payment for $email</p>";
                  
                  echo "</div>";
                  echo "<div class='card-body'>";

                  if ($status == 'pending') {
                    
                  echo  "<p class = 'btn bg-red col-white'>Status: $status</p>";

                  }elseif ($status == 'Approved') {
                    
                  echo  "<p class = 'btn bg-green col-white'>Status: $status</p>";
                  }

                  echo "<img height='100%' width='100%' src='uploads/".$img." '>";
                  echo"<br><br>";

                  echo"<form method='POST' action='actions/approveloanpayment.php'>


                         <input type='hidden' name='invid' value='$proofid'> 
                         <input type='hidden' name='email' value='$email'>
                          <input type='hidden' name='status' value='$status'> 

                          <button type='submit' name='approve' class='btn btn-success'><i class='fas fa-trash-alt'></i>Approve</button>

                        </form>";

                   echo "</div>";
                  
                   echo "</div>";
                
                   echo "</div>";
      
                    }


                      }

                      }
                  

                  ?>



                  </div>
                </div>
            
              </div>



    <div class="card">
                  <div class="card-header bg-blue">
                    <h4 class="col-white">Proof Of Loan Payments (Advance)</h4>
                  </div>
                  <div class="card-body">
                   <div class="row">
              
                <?php
                 $sql = 'SELECT * FROM loanproof';
                                 $result = mysqli_query($conn,$sql);
                                 $result_check = mysqli_num_rows($result);
                                 if($result_check > 0){
                                  while($data = mysqli_fetch_assoc($result)){
                                    $dd= $data['dateup'];

                    $img= $data['imageup'];
                    $email= $data['email'];

                    $plan= $data['plan'];

                    $status = $data['status'];

                    $proofid= $data['proofid'];

                    if ($plan == 'Advance') {

                  echo "<div class='col-12 col-md-6 col-lg-3'>";
                  echo "<div class='card card-primary'>";
                  echo "<div class='card-header'>";
                  echo  "<p style='color:black'>Proof of payment for $email</p>";
                  echo "</div>";

                  echo "<div class='card-body'>";

                  if ($status == 'pending') {
                    
                  echo  "<p class = 'btn bg-red col-white'>Status: $status</p>";

                  }elseif ($status == 'Approved') {
                    
                  echo  "<p class = 'btn bg-green col-white'>Status: $status</p>";
                  }


                  echo "<img height='100%' width='100%' src='uploads/".$img." '>";
                  echo"<br><br>";

                  echo"<form method='POST' action='actions/approveloanpayment.php'>


                         <input type='hidden' name='invid' value='$proofid'> 
                         <input type='hidden' name='email' value='$email'> 
                         <input type='hidden' name='status' value='$status'>

                          <button type='submit' name='approve' class='btn btn-success'><i class='fas fa-trash-alt'></i>Approve</button>

                        </form>";

                   echo "</div>";
                  
                   echo "</div>";
                
                   echo "</div>";

                        }

                      }

                      }
                  

                  ?>



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