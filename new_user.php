<html
<head>
<link rel="stylesheet" type="text/css" href="new_user.css">
</head>
<body>
<div>

</div>
<div class="signup_section">
<h1 class="signup_hdn">SIGN UP</h1>
<form method="Post">
<label for="user_name">USER NAME:</label>
<input type="text" class="input" name="user_name" required title="Please enter your User Name">
</br></br>
<div class="dob_gender">
<div class="dob_section">
<label for="dob">DATE OF BIRTH</label>
<input type="date" name="dob" class="input" required></br></br>
</div>
<div class="gender_section">
<label for="gender">GENDER</label>
<input type="text" name="gender" class="input" required>
</div>
</div>
<label for="email_id">Email ID:</label>
<input type="email" class="input" name="email_id"/></br></br>
<label for="password">Password:</label>
<input type="password" class="input" name="password"/></br></br>
<label for="cnfrm_pw">Confirm Password:</label>
<input type="password" class="input" name="cnfrm_pw"/></br></br>
<button name="signup_btn" class="signup_btn">Sign Up</button></br></br>
<a href="sign_in.php">Already a user? Sign-in.</a>
</div>
</form>
</body>
</html>
<?php
$Username="root";
$ServerName="localhost";
$Password="";
$Dbname = "Fitness_Friend";

$conn = mysqli_connect($ServerName, $Username, $Password, $Dbname);


?>
