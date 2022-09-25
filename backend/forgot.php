<!DOCTYPE html>
<html lang="en">


<!-- auth-forgot-password.html  21 Nov 2019 04:05:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Space Exclusive Group | Best Brokeage and Investment Platform to Grow your Income</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
</head>

<body style="background:linear-gradient(rgba(61, 42, 105, 0.9),rgba(61, 42, 105, 0.9)),url('assets/img/9.gif');background-position:center; background-repeat: no-repeat; background-size: cover;">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary" style="margin-top:60px">
              <div class="card-header">
                <h4>Forgot your Space Exclusive Group Password?</h4>
              </div>
             
              <div class="card-body">
              <img alt="image" src="assets/img/forgo.svg" height="200px"  width="100%" class="header-logo" />
              <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


                   if(strpos($url, 'loginempty') == true){
                       echo "<p class='suc' style='color:red;font-size:20px;'>Please,fill out all inputs  </p>";
                   }

                   if(strpos($url, 'invaliduid') == true){
                       echo "<p class='suc' style='color:red;font-size:13px;'><i class='fas fa-user-alt-slash'></i> Sorry No Account Was Matched </p>";
                   }

                    if(strpos($url, 'invalidpwd') == true){
                       echo "<p class='suc' style='color:red;font-size:20px;'> Invalid Password</p>";
                   }



                   if(strpos($url, 'loginsuc') == true){
                       echo "<p class='suc' style='color:green;font-size:9px;'> Login successfull...Please wait..</p>";
                    }


                   if(strpos($url, 'mailforgottensentsuc') == true){
                       echo "<p class='suc' style='color:green;font-size:05px;'> We have Sent your password to your Email, Confirm and Login..</p>";
                    }


       ?>
                <p style="color:black">We will send your password to your email Account. If you no more have access to your email, please contact our support team</p>
                <form method="POST" action="actions/requestpwd.php">
                  <div class="form-group">
                    <label for="email">Enter account username</label>
                    <input id="email" type="text" class="form-control" name="uname" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="send" class="btn btn-secondary btn-lg btn-block" tabindex="4" style="color:black">
                   <i class="fas fa-share"></i> send my password
                    </button>
                  </div>
                </form>
              </div>
            </div>
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