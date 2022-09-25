<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> Space Exclusive Group Admin Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <link rel="stylesheet" href="components/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">



  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />

</head>

<body style="background:linear-gradient(rgba(61, 42, 105, 0.9),rgba(61, 42, 105, 0.9)),url('assets/img/header-bg.jpg');background-position:center;">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary" style="margin-top:60px">
              <div class="card-header bg-info" style="color:black">
                <h6>Admin Account</h6>
              
              </div>
              <div class="card-body">
              <img alt="image" src="assets/img/profile1.png" height="50%"  width="100%" class="header-logo" />
         
                <form method="POST" action="actions/adminlogin.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Admin Username</label>
                    <input id="Username" type="text" class="form-control" name="uid" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Admin Password</label>
                      
                    </div>
                    <input id="password" type="password" class="form-control" name="pwd" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-info btn-lg btn-block" tabindex="4" style="color:black">
                    <i class="fas fa-sign-in-alt"></i>  Login
                    </button>
                  </div>
                </form>
               
            
          
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>
</body>

</html>