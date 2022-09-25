<?php
	
	session_start();
	include 'actions/db.php';

	if(isset($_POST['id'])){
	    if($update('users',$_POST,"id=".(int)$_POST['id'])){
	        echo "Updated";exit;
	    }else{
	        echo "Not Updated";exit;
	    }
	}
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
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
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
              <a href="adminupdateloan.php" class="nav-link" style="color:black"><i
                  data-feather="activity"></i><span>Update loan Info</span></a>
            </li>
            
            <li class="dropdown">
              <a href="adminupdatecustomer.php" class="nav-link" style="color:black"><i
                  data-feather="activity"></i><span>Update Customers</span></a>
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
      <div class="main-content">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                    <h4 class="col-white">Update Customer Info</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                            <thead >
                          <tr>
                            <th style="color:black">Fullame</th>
                            <th style="color:black">Username</th>
                            <th style="color:black">Email</th>
                            <th style="color:black">Total Balance</th>
                            <th style="color:black">Total Withdrawl</th>
                            <th style="color:black">Earnings</th>
                            <th style="color:black">Current Investment</th>
                          </tr>
                        </thead>
                         <tbody>
                             <?php
                             $result = $select("users");
                             if(!empty($result) && $result != false){
                                 while($data = mysqli_fetch_assoc($result)){
                                      $uname= $data['username'];
            $fname= $data['fullname'];
            $email= $data['email'];
            $totalbal= $data['totalbal'];
            $totalwith= $data['totalwith'];
            $earn= $data['earn'];
            $current= $data['current'];
            ?>
            <tr><td><?=($uname)?></td> 
                                            <td><?=($fname)?></td>
                                            <td><?=($email)?></td>
                                            <td><input type="hidden" name="id" id="<?=($data['id'])?>" value="<?=($data['id'])?>">
                                            <input type="number" id="totalbal<?=($data['id'])?>" name="totalbal" class="form-control" value=<?=($totalbal)?> /><button class="btn btn-primary" onclick="update(this,<?=($data['id'])?>)">Update</button></td>
                                            <td><input type="number" id="totalwith<?=($data['id'])?>" name="totalwith" class="form-control" value=<?=($totalwith)?> /><button class="btn btn-primary" onclick="update(this,<?=($data['id'])?>)">Update</button></td>
                                            <td><input type="number" id="earn<?=($data['id'])?>" name="earn" class="form-control" value=<?=($earn)?> /><button class="btn btn-primary" onclick="update(this,<?=($data['id'])?>)">Update</button></td>
                                            <td><input type="number" id="current<?=($data['id'])?>" name="current" class="form-control" value=<?=($current)?> /><button class="btn btn-primary" onclick="update(this,<?=($data['id'])?>)">Update</button></td>
                                            </tr>
            <?php
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
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
 
 <script>
    function update(t,i){
        $(t).html("Updating field");
        var inp = $("#"+i+", input[id="+$(t).prev().attr("name")+i+"]");
        //return false;
          $.ajax({
     type: "POST",
     url: "",
     processData: false,
     cache:false,
     data:inp.serialize(),
     success: function(d) {
    
        alert(d);
      $(t).html("Update");
      window.location ="";
    },
     error: function(r) {
    alert(r.statusText);
     }
     });
    }
 </script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
