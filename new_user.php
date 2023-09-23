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
  <div class="signup_carousel">
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
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="signup_carousel_img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carousal-title">Track Your Caloric Intake</h5>
        <p class="carousel-caption-text">Effortlessly log your daily meals and monitor your calorie consumption to stay on top of your nutritional goals.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="signup_carousel_img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carousal-title">Personalized Meal Planning</h5>
        <p class="carousel-caption-text">Create tailored meal plans that fit your calorie targets and dietary preferences for a healthier lifestyle.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="signup_carousel_img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carousal-title">Achieve Your Weight Goals</h5>
        <p class="carousel-caption-text">Reach your desired weight and maintain it with our calorie tracking tools and expert nutritional guidance.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
