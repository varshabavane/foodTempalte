<?php
   include("libs/libs/config.php");
   session_start();
   error_reporting(0);
   if (isset($_SESSION['user-email'] ) ) {
    $session_id=$_SESSION['user-email'];
    // echo $session_id;

    $fetch_data="SELECT * from `register` WHERE `email`='$session_id'";

    $run_query=mysqli_query($conn,$fetch_data);
                          // echo $run_query;
    $row=mysqli_fetch_array($run_query);
  
$name = $row['email']; 
echo $name;


  } 
  else {
  }
  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" type="text/css" href="assets/navbar.css">
  <!--  <link href="assets/contactUs.htm"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <!-- navbar  -->
  <nav class="navbar navbar-inverse" id="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img id="logo" src="assets/imgs/f1.png" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Online Delivery </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#">Showcase</a>
          </li>
          <li>
            <a href="D:\PHP\FoodTemplate/contactUs.htm">Contact us</a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $session_id; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="">My Profile</a></li>
                  <li><a href="logout.php">Log out</a></li>
                </ul>
              </li>
      
          
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>