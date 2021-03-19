<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body style="background:linear-gradient(to bottom ,black,    #191970,        #000080,#00008B ,#4169E1,blue);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">
  <?php
    include 'navbar.php';

  ?>  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : yellow;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h2><b>WELCOME TO WESTERN BANK</b></h2>
		  <h5>A room of possibilities</h5>
                  <br>
                  <h6>This Basic Banking System helps to transfer money between users.<br> It's a simple process , you just need to click on transfer money and it will automatically jump to next page where you need to select the user(sender) from whom you want to transfer money by clicking on transact button.<br>Now,select the user(receiver) to transfer money and the respective amount and click on transfer button.<br>
	<div class="four"> YEEEE!!!! YOUR  TRANSACTION  IS  SUCCESSFUL:)</div></h6>
		</div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://cdn.pixabay.com/photo/2017/09/07/08/54/money-2724241__340.jpg">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
		  <div class="col-md act">
                  <br>
                 
                    <img src="https://image.freepik.com/free-vector/transfer-money-online-mobile-payment-illustration-phone-transaction-business-internet-pay-digital-banking-hand_121223-1194.jpg"> 
                    <br>
                    <a href="transfermoney.php"><br><button style="background-color : green;">Transfer Money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://cdn0.iconfinder.com/data/icons/online-money-service-orchid-volume-2/256/Transaction_History-512.png">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : green;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
      <p>&copy 2021. Made by <b>Himanshi Kabra</b> <br> Intern @ Sparks Foundation</p>
       Contact me:
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <a href="https://www.linkedin.com/in/himanshi-kabra-9655a5192/" class="linkedin">   
    <i class="fa fa-linkedin"></i>   
    </a> 
    <a href="https://github.com/himanshi-kabra" class="github">   
    <i class="fa fa-github"></i>   
    </a> 
        
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
