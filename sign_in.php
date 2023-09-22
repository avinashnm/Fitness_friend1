<html>
<head>
    <link rel="stylesheet" type="text/css" href="sign_in1.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="body">
<form method="Post">
<label for="user_name">User Name:</label>
<input type="text" name="user_name"/></br></br>
<label for="password">Password:</label>
<input type="password" name="password"/></br></br>
<button name="signup_btn">Sign Up</button></br></br>
<a href="/php_project/new_user.php">New User? Sign-up.</a>
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
