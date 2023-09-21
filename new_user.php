<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="new_user1.css">
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
    <div class="signup_fullsection">
    <div class="signup_section">
        <form method="Post" class="signup_form">
          <div class="hdn_section">
          <h1 class="signup_hdn">SIGN UP</h1>
        </div>
        <div class="un_section">
          <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom" id="floatingUsername" placeholder="Enter your Username">
            <label for="floatingUsername">Username</label>
        </div>
          </div>
            <div class="dob_gender">
                <div class="form-group dob-group">
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingDOB" placeholder="Enter your DOB">
                    <label for="floatingDOB">Date Of Birth</label>
                </div>
                </div>
                <div class="form-group gender-group">
                  <div class="form-floating">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Select your Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                      <label for="floatingSelect">Gender</label>
                      </div>
                </div>
            </div>
            <div class="mail_section">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingMail" placeholder="example@gmail.com">
                <label for="floatingMail">Email address </label>
            </div>
          </div>
          <div class="pw_section">
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPw" placeholder="Enter your Password">
              <label for="floatingPw">Password</label>
          </div>
          </div>
          <div class="cpw_section">
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingCPw" placeholder="Re-enter your Password">
              <label for="floatingCPw">Confirm Password</label>
          </div>
          </div>
          <div class="btn_si">
          <div class="btn_section">
            <button name="signup_btn" class="signup-btn">Sign Up</button><br><br>
          </div>
          <div class="si_section">
            <a href="sign_in.php">Already a user? Sign-in.</a>
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
