<?php
if(isset($_POST['submit_btn']))
{
    $ServerName="localhost";
    $db_UserName="root";
    $db_Password="";
    $Dbname="fitness_friend";

    $conn=mysqli_connect($ServerName,$db_UserName,$db_Password,$Dbname);
    if(mysqli_connect_errno())
    {
        echo "Connection Failed :(";
        exit();
    }
    echo "Connected successfully :)";
}
?>
