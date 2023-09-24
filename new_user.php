<?php
session_start();

// Determine the current step
$step = isset($_GET['step']) ? intval($_GET['step']) : (isset($_POST['step']) ? intval($_POST['step']) : 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submit_btn'])) {
        // Check which step the form is currently in
        if ($step == 1) {
            $full_name = $_POST['full_name'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $activity_level = $_POST['activity_level'];
            $fitness_goal = $_POST['fitness_goal'];

            // Check if any of the fields are empty
            if (
                empty($full_name) ||
                empty($dob) ||
                empty($gender) ||
                empty($weight) ||
                empty($height) ||
                empty($activity_level) ||
                empty($fitness_goal)
            ) {
                echo "Please fill out all the required fields in the first step.";
            } else {
                // Store the data in session variables for the second step
                $_SESSION['full_name'] = $full_name;
                $_SESSION['dob'] = $dob;
                $_SESSION['gender'] = $gender;
                $_SESSION['weight'] = $weight;
                $_SESSION['height'] = $height;
                $_SESSION['activity_level'] = $activity_level;
                $_SESSION['fitness_goal'] = $fitness_goal;

                // Redirect to the second step or show the second step form
                // You can use JavaScript to redirect to the next step or load the second step form
                // Example using JavaScript to redirect:
                echo '<script>window.location.href = "new_user.php?step=2";</script>';
            }
        } elseif ($step == 2) {
            // Handle the second step data
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            // Check if password and confirm password match
            if ($password !== $confirm_password) {
                echo "Password and Confirm Password do not match. Please try again.";
            } else {
                // Database connection settings
                $db_Username = "your_db_username";
                $db_Password = "your_db_password";
                $ServerName = "your_server_name";
                $Dbname = "fitness_friend";

                // Create a database connection
                $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);

                // Check for database connection errors
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get data from session variables
                $full_name = $_SESSION['full_name'];
                $dob = $_SESSION['dob'];
                $gender = $_SESSION['gender'];
                $weight = $_SESSION['weight'];
                $height = $_SESSION['height'];
                $activity_level = $_SESSION['activity_level'];
                $fitness_goal = $_SESSION['fitness_goal'];

                // Hash the password for security (you should use a more secure hashing method)
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // SQL query to insert data into the "users" table using prepared statement
                $sql = "INSERT INTO users (full_name, dob, gender, weight, height, activity_level, fitness_goal, username, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                // Prepare the SQL statement
                $stmt = $conn->prepare($sql);

                // Bind parameters to the statement
                $stmt->bind_param("ssssssssss", $full_name, $dob, $gender, $weight, $height, $activity_level, $fitness_goal, $username, $email, $hashed_password);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "Registration successful!";
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the statement and database connection
                $stmt->close();
                $conn->close();

                // Clear session variables after successful registration
                session_unset();
                session_destroy();
            }
        }
    }
}
?>
