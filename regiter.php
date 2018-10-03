<?php include("header.php") ?>
<!-- form start -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" id="form">
        <form action="" method="post">
          <center><img src="assets/imgs/f1.png"></center>
          <input type="text" placeholder="username" class="form-control form1">

          <input type="email" placeholder="EmailId" class="form-control form1">
          <input type="Password" placeholder="Password" class="form-control form1">

          <input type="Password" placeholder="confirm Password" class="form-control form1">

          <select name="gender" placeholder="gender">
            <option value="volvo">Male</option>
            <option value="saab">Female</option>
          </select><br>

          <br>
          <button class="btn-md default-btn btn-centered form-control"><a href="login.htm">Register</button>
            <p>allready have an account</p>
            <button class="btn-md default-btn btn-centered form-control"><a href="login.htm">Login</a></button>

            </form>
          </div>

        </section>
        <br>
        <br>

        <!-- end of form page -->

<?php include("footer.php") ?>