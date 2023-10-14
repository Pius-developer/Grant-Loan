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
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <h6 class="col-black">Welcome to your dashboard Boss</h6>
           
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

            <!-- <li class="dropdown">
              <a href="adminupdatecustomer.php" class="nav-link" style="color:black"><i
                  data-feather="activity"></i><span>updatecustomerwallet</span></a>
            </li> -->

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
                <h4 class="col-white">All Registered Investors</h4>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                    <thead >
                      <tr>
                        <th style="color:black">First Name</th>
                        <th style="color:black">Username</th>
                        <th style="color:black">Othername</th>
                        <th style="color:black">Email</th>
                        <th style="color:black">Phone</th>
                        <th style="color:black">Gender</th>
                        <th style="color:black">DOB</th>
                        <th style="color:black">Business State</th>
                        <th style="color:black">Business Residence</th>
                        <th style="color:black">Received Grant</th>
                        <th style="color:black">Business Name</th>
                        <th style="color:black">Delete Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $sql = "SELECT * FROM  users";
                        $result= mysqli_query($conn,$sql);
                        $result_checker= mysqli_num_rows($result);

                        if($result_checker > 0){

                          while($data = mysqli_fetch_assoc($result)){

                            $fname  =  $data['fname'];
                            $lname  =  $data['lname'];
                            $oname  =  $data['oname'];
                            $email  =  $data['email'];
                            $phone  =  $data['phone'];
                            $gender  =  $data['gender'];
                            $pwd  =  $data['pwd'];
                            $cpwd =  $data['cpwd'];
                            $dob  =  $data['dob'];
                            $biz_state  =  $data['biz_state'];
                            $st_of_residence =  $data['st_of_residence'];
                            $qualification  =  $data['qualification'];
                            $have_you_rec  =  $data['have_you_rec'];
                            $hear_abt_us  =  $data['hear_abt_us'];
                            $disability  =  $data['disability'];

                            // form section 2
                            $biz_name =  $data['biz_name'];
                            $biz_location  =  $data['biz_location'];
                            $biz_age  =  $data['biz_age'];
                            $iz_biz_reg  =  $data['iz_biz_reg'];
                            $gen_revenue  =  $data['gen_revenue'];
                            $have_partner  =  $data['have_partner'];
                            $partner_cont  =  $data['partner_cont'];
                            $biz_sector  =  $data['biz_sector'];
                            $biz_descrp =  $data['biz_descrp'];
                            $biz_impact  =  $data['biz_impact'];
                            $challenge =  $data['challenge'];
                            $reason_for_ent  =  $data['reason_for_ent'];
                            $grantuse  =  $data['grantuse'];
                            $agree_mentorship  =  $data['agree_mentorship'];
                            $sgd_goals  =  $data['sgd_goals'];

                            // $uname= $data['username'];
                            // $fname= $data['fullname'];
                            // $country= $data['country'];
                            // $email= $data['email'];
                            // $phone= $data['phone'];
                            // $totalbal= $data['totalbal'];
                            // $totalwith= $data['totalwith'];
                            // $earn= $data['earn'];
                            // $current= $data['current'];


                            echo "<tr> ";
                                          
                                          
                              echo '<td>'.$fname. '</td>'; 
                              echo '<td>'.$lname. '</td>'; 
                              echo '<td>'.$oname. '</td>'; 
                              echo '<td>'.$email. '</td>';
                              echo '<td>'.$phone. '</td>';
                              echo '<td>'.$gender. '</td>';
                              echo '<td>'.$dob. '</td>';
                              echo '<td>'.$biz_state. '</td>';
                              echo '<td>'.$st_of_residence. '</td>';
                              echo '<td>'.$have_you_rec. '</td>';
                              echo '<td>'.$biz_name. '</td>';
                                          
                              echo "<td> <form method='POST' action='actions/deleteinvestors.php'><input type='hidden' name='email' value='$email'> <button type='submit' name='delete' class='btn' style='background-color:red;color:white'><i class='fas fa-trash-alt'></i> Delete</button> </form></td>";
                                                                                      
                                      
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
