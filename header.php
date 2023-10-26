<?php
session_start();
?>
<html>
<head>
  <title>Saurabh food corner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script>
      $(document).ready(function(){
          $("#myBtn").click(function(){
              $("#myModal").modal();
          });
      });
  </script>
</head>
<body style="background: lightgray;">

  <nav  style="background: grey;"  class="navbar navbar-default">
      <div class="container-fluid">
          <div class="navbar-header">
             
          </div>
          <center><ul  class="nav navbar-nav">

              <li><a href="product.php" style="color:white;" ><h3>Home</h3></a></li>
              <li><a href="locations.php" style="color:white;"><h3>Locations</h3></a> </li>
              <li><a href="about_us.php" style="color:white;"><h3>About Us</h3></a> </li>
              <li><a href="contact_us.php" style="color:white;"><h3>Contact</h3></a></li>
              <li><a href="order_online.php" style="color:white;"><h3>Order Online</h3></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="order_checkout.php"><h2><span  class="glyphicon glyphicon-shopping-cart" style="color:white;" ></span></h2>
                      <?php
                      if(isset($_SESSION['total']))
                          echo $_SESSION['count']."ITEMS-Php".$_SESSION['total'];
                      else
                          echo "0ITEMS-Php0";
                      ?>
                  </a>
              </li>
          </ul>
      </div>
  </nav>
<body>
</html>
