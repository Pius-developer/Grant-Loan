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
                
                 <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card ">
                  <div class="boxs mail_listing">
                    <div class="inbox-center table-responsive">
                      <table class="table table-hover">
                        <thead class="bg-blue">
                          <tr>
                            <th colspan="1">
                              <div class="inbox-header" style="color:white">
                               Compose New Message
                              </div>
                            </th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <form class="composeForm" method="POST" action="actions/adminmailaction.php">
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" id="email_address" name="email" class="form-control" placeholder="TO">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                          </div>
                          <textarea name="Message" class="form-control" rows="5" placeholder="Type Message here"></textarea>
                          
                        
                      </div>
                      <div class="col-lg-12">
                        <div class="m-l-25 m-b-20">
                          <button name="send" type="submit" class="btn bg-green btn-border-radius waves-effect"><i class='far fa-envelope'></i> Send</button>
                          <button type="reset" class="btn btn-danger btn-border-radius waves-effect"><i class='fas fa-redo-alt'></i> Undo</button>
                        </div>
                        </form>
                    </div>
                    </div>
                  </div>
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