<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="sign_in1.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="entire-bg">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo1.png" alt="FitGen Logo" width="50" height="44">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link active" href="new_user.php">SIGN UP</a>
        </div>
      </div>
    </div>
  </nav>
    <div class="signin_fullsection">
    <div class="signin_section">
        <form method="Post" class="signin_form">
          <div class="hdn_section">
          <h1 class="signin_hdn">SIGN IN</h1>
        </div>
        <div class="un_section">
          <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom" id="floatingUsername" placeholder="Enter your Username">
            <label for="floatingUsername">Username</label>
        </div>
          </div>
          <div class="pw_section">
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPw" placeholder="Enter your Password">
              <label for="floatingPw">Password</label>
          </div>
          </div>
          <div class="btn_si">
          <div class="btn_section">
            <button name="signin_btn" class="signin_btn">Sign In</button><br><br>
            <div class="btn_section">
              <button name="forgotpw_btn" class="forgotpw_btn">Forgot Password</button><br><br>
          </div>
          <div class="su_section">
            <a href="new_user.php">New User? Sign-up.</a>
          </div>
        </div>
          </div>
        </form>
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
