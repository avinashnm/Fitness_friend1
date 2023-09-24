<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="sign_in2.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="entire-bg">
  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link"  href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="new_user1.php">Sign up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="sign_in.php">Sign in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-disabled="true">About</a>
  </li>
</ul>
        </div>
      </div>
    </div>
  </nav>
    <div class="signin_fullsection">
    <div class="signin_section">
      <div class="hdn_logo">
        <form method="Post" class="signin_form">
          <div class="logo_section">
          <img src="logo1.png" alt="FitGen Logo" width="80" height="74">
        </div>
          <div class="hdn_section">
          <h1 class="signin_hdn">Sign in to Fit Gen</h1>
        </div>
      </div>
        <div class="un_section">
          <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom col-12 input" id="floatingUsername" placeholder="Enter your Username" style="width: 100%;">
            <label for="floatingUsername label">Username</label>
        </div>
          </div>
          <div class="pw_section">
            <div class="form-floating mb-3">
              <input type="password" class="form-control input" id="floatingPw" placeholder="Enter your Password">
              <label for="floatingPw label">Password</label>
          </div>
          </div>
          <div class="btn_si">
          <div class="btn_section">
            <button name="signin_btn" class="signin_btn">Sign In</button><br><br>
            <div class="btn_section">
              <button name="forgotpw_btn" class="forgotpw_btn">Forgot password?</button><br><br>
          </div>
          <div class="su_section">
            <p> Don't have an account?  </p>
            <a class="signup_link"  href="new_user1.php"></t>Sign-up</a>
          </div>
        </div>
          </div>
        </form>
    </div>
  </div>
</body>
</html>
<?php
$Username="root";
$ServerName="localhost";
$Password="";
$Dbname = "Fitness_Friend";

$conn = mysqli_connect($ServerName, $Username, $Password, $Dbname);


?>
