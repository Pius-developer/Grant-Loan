<?php

if(isset($_POST['proceed'])){
          include 'actions/db.php';
           
             $trantype=$_POST['trantype'];
             $totalbal=$_POST['totalbal'];
            $uname=$_POST['uname'];
             $btc=$_POST['btc'];
             $email = $_POST['email'];
             $amount = $_POST['amount'];
              
              $date= date('Y-m-d h:i:s');
              $status="pending";
               $depositid=uniqid();

    $sql = "INSERT INTO depositrequests (username,amount,dateofdep,statusofdep,depositid,totalbal,usdemail,transtype) VALUES ('$uname','$amount','$date','$status','$depositid','$totalbal','$email','$trantype')";

	             mysqli_query($conn,$sql);

               $mailTo = "corcherry1978@gmail.com";

               $header = "support@spaceexclusivegroup.com";
              $sub = "You have recieved a deposit Request from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="Hello, you have a new deposit on your website login and check!";
              
              mail($mailTo,$sub,$txt,$header);
              
     }
 ?>



<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Space Excluxive Group- deposit userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/xi.png" />
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
  

  <style type="text/css">
    .back{
      background-image: url(assets/img/9.gif );
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>

</head>

<body class="back" >
  <div class="loader"></div>
 
  <div id="app">
    <section class="section">
        
                      <div class="card-body" style="height: 100px;">
                    <div class="media">
                      <img class="mr-3" src="assets/img/image-64.png" alt="Generic placeholder image">
                      <div class="media-body">
                       <!--  <h5 class="mt-0">Space Exclusive Group Profile verification</h5>
                        <p class="mb-0">Verifying your ID and proof of Residence will allow you to make withdrawals from your account.<br> You will need to provide us with Proof of residence document.<br> This will enable us to comfirm it is you before any withdrawal from your account and deposit reach over $30,1000</p> -->

                           <div class="header-contacts-item hidden-sm hidden-xs">
                                     <div id="google_translate_element" style="font-size: 25px; color: #000;"></div>


                                 <script type="text/javascript">
                                 function googleTranslateElementInit() {
                                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                                }
                               </script>

                              <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            </div>
                      </div>
                    </div>
                  </div>
     
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand" style="color:orange;">
             Space Exclusive Group Deposit Gateway
            </div>
            <div class="card ">
              
              <div class="card-body">
                
                 
              <div class="form-group text-center">
              <?php





                             
                             if($trantype == "btc"){


                              echo " 
                              <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                              to your Space Exclusive Group Wallet via Bitcoin ,Please copy or scan the wallet address below and make a payment of $". $amount." and send exactly the amount to the generated address.
                          
                           
                          <br><br>
                           <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                           <input type='text' class='form-control-plaintext' value='bc1qr2m0fryr539dd5f448at580f5lwf3k42dqtwaj' id='copybtc' readonly=''>
                           <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                           <a href='proof.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>comfirm payment</a>


                           <h4 style='color:orange;'>Payment Qr code generated</h4>
                           <img src='https://chart.googleapis.com/chart?chs=250x250&amp;cht=qr&amp;chl=$btc' style='height:230px; width:250px;'><br><br>



                          
                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy bitcoin from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Space Exclusive Group wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                          
                           </p>

                           ";





                                 echo "<br>";

                                
                             }else if($trantype == "perfect"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                 to your Space Exclusive Group Wallet via Perfect Money ,Please copy or scan the wallet address below and make a payment of $". $amount." and send exactly the amount to the generated address.
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='U36062325' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>




                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'> How do i pay?</p>
                          <p>Copy your unique wallet address and proceed to your Perfect money App or website to fund your Space Exclusive Group wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Perfect Money via: <a href='https://www.perfectmoney.com' target'blank'>perfectmoney.com</a> to make payment to the copied Perfect Money address, and comfirm payment from your dashboard.</p>
                            

                              ";

                            
                                }else if($trantype == "eth"){
                                  echo " 
                                  <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                  to your Space Exclusive Group Wallet via Ethereum ,Please copy or scan the wallet address below and make a payment of $". $amount."  and send exactly the amount to the generated address.
                              
                               
                              <br><br>
                               <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Ethereum address</label>
                               <input type='text' class='form-control-plaintext' value='0x5ceCA590388051786c3B64cE3151A07d4748BeB5' id='copybtc' readonly=''>
                               <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                               <a href='proof.php' class='btn' style='background-color:orange;color:black'><i data-feather='corner-up-left'></i>comfirm payment</a><br><br>
                            

                                <h4>Payment Qr code generated</h4>
                                <img src='https://chart.googleapis.com/chart?chs=250x250&amp;cht=qr&amp;chl=$eth' style='height:230px; width:250px;'><br><br>



                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Etherium from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Space Exclusive Group wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>


                               ";
 
                               
    
 
                            
                               
                                }else if($trantype == "usdt"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .",You are about to complete a deposit of $". $amount . "
                                 to your Space Exclusive Group Wallet via USDT ,Please copy or scan the wallet address below and make a payment of $". $amount.".  Make sure you're sending only ERC20_USDT token to the generated wallet address. If you send any other USDT token, you may not be able to retrieve these funds.
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='0x5ceCA590388051786c3B64cE3151A07d4748BeB5' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='proof.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>comfirm payment</a>
                         


                               <h4>Payment Qr code generated</h4>
                               <img src='https://chart.googleapis.com/chart?chs=250x250&amp;cht=qr&amp;chl=$usdt' style='height:230px; width:250px;'><br><br>



                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy USDT from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Space Exclusive Group wallet</p>

                          <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>



                              ";

                            
 
                               
                                }
                          
                          
                          
                          
                          
                          ?>
                        <script type="text/javascript">
                            
                            function mycopy(){
                                var copyTxt = document.getElementById("copybtc");
                                copyTxt.select();
                                document.execCommand("copy");
                            }


                            </script>

            <div class="simple-footer">
              Copyright &copy; Space Exclusive Group 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

 
 
 

 
 
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="components/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/sweetalert.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>

  <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>




</html>