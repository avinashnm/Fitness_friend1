<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="new_user1.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
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
            <label for="user_name">USER NAME:</label>
            <input type="text" class="input" name="user_name" required title="Please enter your User Name"><br><br>
          </div>
            <div class="dob_gender">
                <div class="form-group dob-group">
                    <label for="dob">DATE OF BIRTH</label>
                    <input type="date" name="dob" class="input dob-input" required>
                </div>
                <div class="form-group gender-group">
                    <label for="gender">GENDER</label>
                    <input type="text" name="gender" class="input gender-input" required>
                </div>
            </div>
            <div class="mail_section">
            <label for="email_id">Email ID:</label>
            <input type="email" class="input" name="email_id"><br><br>
          </div>
          <div class="pw_section">
            <label for="password">Password:</label>
            <input type="password" class="input" name="password"><br><br>
          </div>
          <div class="cpw_section">
            <label for="cnfrm_pw">Confirm Password:</label>
            <input type="password" class="input" name="cnfrm_pw"><br><br>
          </div>
          <div class="btn_section">
            <button name="signup_btn" class="signup-btn">Sign Up</button><br><br>
          </div>
          <div class="si_section">
            <a href="sign_in.php">Already a user? Sign-in.</a>
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
