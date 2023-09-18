<html
<head>
<link rel="stylesheet" type="text/css" href="new_user.css">
</head>
<body>
<form method="Post">
<label for="user_name">User Name:</label>
<input type="text" name="user_name" required title="Please enter your User Name"></br></br>
<label for="email_id">Email ID:</label>
<input type="email" name="email_id"/></br></br>
<label for="password">Password:</label>
<input type="password" name="password"/></br></br>
<label for="cnfrm_pw">Confirm Password:</label>
<input type="password" name="cnfrm_pw"/></br></br>
<button name="signup_btn">Sign Up</button></br></br>
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
