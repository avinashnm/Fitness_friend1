<html
<head>
<link rel="stylesheet" type="text/css" href="new_user.css">
</head>
<body>
<h1 class="signup_hdn">SIGN UP</h1>
<form method="Post">
<label for="user_name">User Name:</label>
<input type="text" class="input" name="user_name" required title="Please enter your User Name"></br></br>
<label for="email_id">Email ID:</label>
<input type="email" class="input" name="email_id"/></br></br>
<label for="password">Password:</label>
<input type="password" class="input" name="password"/></br></br>
<label for="cnfrm_pw">Confirm Password:</label>
<input type="password" class="input" name="cnfrm_pw"/></br></br>
<button name="signup_btn" class="signup_btn">Sign Up</button></br></br>
<a href="sign_in.php">Already a user? Sign-in.</a>
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
