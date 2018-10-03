<?php
include ("header.php");
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 col-md-offset-4" id="form">

        <form action="" method="post"
        enctype="multipart/form-data">
        <?php 
        error_reporting(0);
        include("libs/config.php");
        if(isset($_POST["login_submit"]))            
        {
          $email=$_POST['email'];
          $pass=$_POST['password'];
          $check_now=$_POST['check_now'];


          if(empty($email)){
            $error1 = "Email-Id Cant Be Empty";
          }
          elseif (empty($pass)) {
            $error2 = "Password Cant Be Empty";
          }

          else{

            $verify_email = "SELECT * FROM `user` WHERE `email`='$email'";
            $run_verify_email =mysqli_query($conn,$verify_email);

            $verify_email_pass= "SELECT * FROM `user` WHERE `email`='$email' AND password='$pass'";

            $fetch_email_pass=mysqli_query($conn,$verify_email_pass);
            $row=mysqli_fetch_array($fetch_email_pass);

  // $check_now=$_POST['check_now'];


            $_SESSION['user-email']=$row['email'];
            
            // exit();


            if(mysqli_num_rows($run_verify_email)<1)
            {
              $not_exist= "email is not registered";
              
            }
            elseif (mysqli_num_rows($fetch_email_pass)<1) 
            {
              $pass_error1= "password is wrong";
              
            }
            else{
              $fetch="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$pass'";
              $run_fetch=mysqli_query($conn,$fetch); 
              if($run_fetch)
              {
                header('Location:index.php');
              }
            }
          }
        }
        ?>
        <center><img src="assets/imgs/f1.png" alt="" align="center"></center>
        <br>                                       
        <input type="email" id="email" name="email" value="<?php if(isset($email)) { echo $email;}?>" placeholder="Email" class="form-control regtr"
        autofocus tabindex="1"> 
        <p style="color:red;" class="text-center"><?php echo $error1; echo $not_exist;?> </p>                                   
        <input type="password"
        name="password" placeholder="Password" class="form-control regtr" tabindex="2">
        <p style="color:red;" class="text-center"><?php echo $error2; echo $pass_error1; ?> </p>
        <input type="checkbox" value="remember-me"> Remember me <a href="" style="float:
        right;">Forget Password</a>

        <button type="submit" name="login_submit" class="btn btn-primary btn-lg btn-block login-button" id="rbtn">Login</button>
        <center><p>Dont have an account</p></center>
        <center><a href="register.php">Register Now</a></center>

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
