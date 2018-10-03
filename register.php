<?php
include ("header.php");
?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 col-md-offset-4" id="form">

        <form action="" method="post" enctype="multipart/form-data">
          <?php 
          include("libs/libs/config.php");
          error_reporting(0);
          if (isset($_POST['regtr_btn'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-y');
            $time = date('h:i:s');

            $status = "0";

            if (empty($username)) {
              $error_1 = " *username cnt be empty";
            }
            elseif (empty($email)) {
              $error_2 = " *email cnt be empty";
            }
            elseif (empty($password)) {
              $error_3 = " *Password cnt be empty";
            }
            elseif (empty($cpassword)) {
              $error_4 = " *please confirm password";
            }
            elseif ($password != $cpassword) {
              $error_5 = " *password doesnt match";
            }
            else{
                           $db = "insert into `user` (`username`,`email`,`password`,`cpassword`,`date`,`time`,`status`) values ('$username','$email','$password','$cpassword','$date','$time','$status')";
                           $dbsup = mysqli_query($conn,$db);
                           if ($dbsup) {
                            
                            header('Location:login.php');
                           }
                           else {
                            echo "sorry unable to register your data";
                           }

            }
          }

          ?>
          <center><img src="assets/imgs/f1.png" alt="" align="center"></center><br>
          <input type="text" name="username" placeholder="Username" class="form-control regtr" autofocus="" tabindex="1" value="<?php if(isset($username)) { echo $username;}?>">
          <p style="color:red;" class="text-center"><?php echo $error_1;?> </p>
          <input type="email" name="email" placeholder="Email" class="form-control regtr" tabindex="2" value="<?php if(isset($email)){ echo $email;}?>">
          <p style="color:red;" class="text-center"><?php echo $error_2;?> </p>
          <input type="password" name="password" placeholder="Password" class="form-control regtr" tabindex="3">
          <p style="color:red;" class="text-center"><?php echo $error_3;?> </p>
          <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control regtr" tabindex="4">
          <p style="color:red;" class="text-center"><?php echo $error_4;?> </p>
          <p style="color:red;" class="text-center"><?php echo $error_5;?> </p>
          <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="regtr_btn" id="rbtn">Register</button>
          <center><p>Already have an Account</p><a href="login.php">Login</a></center>

        </form>
      </div>
    </div>

  </div>

</section>
<br><br>
<!-- End of form -->
<?php
include ("footer.php");
?>
