<?php

    if (isset($_POST['signin-btn'])) {
      session_start();

        $ServerName = "localhost";
        $db_Username = "root";
        $db_Password = "";
        $Dbname = "fitness_friend";

    // Create a database connection
    $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query to fetch the hashed password for the provided username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Username exists, now check the password
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        if (password_verify($input_password, $hashed_password)) {
            // Password matches, user is authenticated
            $_SESSION["username"] = $input_username; // Store username in session
            header("Location: dashboard.php"); // Redirect to the dashboard or another authenticated page
        } else {
            // Password is incorrect
            echo "Incorrect password. Please try again.";
        }
    } else {
        // Username not found
        echo "Username not found. Please check your username or sign up.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}

?>
