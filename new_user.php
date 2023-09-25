<?php
if (isset($_POST['submit-btn'])) {
    $ServerName = "localhost";
    $db_Username = "root";
    $db_Password = "";
    $Dbname = "fitness_friend";

    // Create a database connection
    $conn = mysqli_connect($ServerName, $db_Username, $db_Password, $Dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST["full_name"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $activity_level = $_POST["activity_level"];
        $fitness_goal = $_POST["fitness_goal"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Check if passwords match
        if ($password != $confirm_password) {
            echo "Password and Confirm Password do not match.";
        } else {
            // Check if username or email already exists in the database
            $check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $result = mysqli_query($conn, $check_query);

            if (mysqli_num_rows($result) > 0) {
                echo "Username or email already exists. Please choose a different username or email.";
            } else {
                // Hash the password for security
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Insert user data into the database
                $sql = "INSERT INTO users (full_name, dob, gender, weight, height, activity_level, fitness_goal, username, email, password)
                        VALUES ('$full_name', '$dob', '$gender', '$weight', '$height', '$activity_level', '$fitness_goal', '$username', '$email', '$hashed_password')";

                if (mysqli_query($conn, $sql)) {
                    echo "Registration successful!";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
