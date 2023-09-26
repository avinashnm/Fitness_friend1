<!DOCTYPE html>
<html>
<head>
    <title>Calorie Tracker</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="stylesheet" type="text/css" href="Calorie_tracker.css">
      <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
      <script src="Bootstrap/JS/bootstrap.min.js"></script>
</head>
<body class="entire-bg">
  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="btn canvas-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <img class="hb-icon" src = "Hamburger_icon1.png"/>
      </button>
      <img class="fitgen-logo" src="fitgen_logo.png">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <!---<ul class="nav nav-underline">

  <li class="nav-item">
    <a class="nav-link"  href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="new_user.html">Sign up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sign_in.html">Sign in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-disabled="true">About</a>
  </li>
</ul>  use this in the future if you want any navigations--->
<a class="navbar-brand" href="#">
  <img src="logo1.png" alt="FitGen Logo" width="50" height="44">
</a>
        </div>
      </div>
    </div>
  </nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title greet" id="offcanvasExampleLabel">Hi, User </h5>
    <img src=""/>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <ul class="nav flex-column">
      <li class="nav-item link">
        <a class="nav-link active BMI" aria-current="page" href="BMI.html">BMI Calculator</a>
      </li>
      <hr>
      <li class="nav-item link">
        <a class="nav-link Calorie_tracker" href="Calorie_tracker.html">Calorie Tracker</a>
      </li>
      <hr>
      <!---<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <hr>
      <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </li>  can use this to add more navitems--->
    </ul>
    </div>
  </div>
</div>
<div class="Ct-section">
  <div class="hdn_form">
  <div class="hdn-section">
    <h1 class="hdn">Calorie Tracker</h1>
  </div>
  <div class="ct-form">
    <form method="post" class="ct-form-section">
      <div class="dd-section">
        <label for="food">Select a Food:</label>
        <select name="food" id="food">
            <option value="">Select a Food</option>
            <!-- PHP code to populate the dropdown from your database -->
            <?php
                $ServerName = "localhost";
                $db_Username = "root";
                $db_Password = "";
                $Dbname = "fitness_friend";

                // Create a database connection
                $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch food names from the database
                $sql = "SELECT food_name FROM IndianFoods";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['food_name'] . "'>" . $row['food_name'] . "</option>";
                    }
                }

                // Close the database connection
                $conn->close();
            ?>
        </select>
      </div>
      <div class="btn-section">
        <input type="submit" name="track" value="Track" class="track-btn">
      </div>
    </form>
  </div>
</div>
<div class="result-section">
    <?php
    if (isset($_POST['track'])) {
        $selectedFood = $_POST['food'];

        // PHP code to fetch and display the calorie and macronutrient information from the database based on the selected food
        $ServerName = "localhost";
        $db_Username = "root";
        $db_Password = "";
        $Dbname = "fitness_friend";

        // Create a database connection
        $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch nutritional information for the selected food
        $sql = "SELECT * FROM IndianFoods WHERE food_name = '$selectedFood'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h4>Nutritional Information for $selectedFood:</h4>";
            echo "<p>Calories: " . $row['calories'] . " kcal</p>";
            echo "<p>Carbohydrates: " . $row['carbohydrates'] . " g</p>";
            echo "<p>Protein: " . $row['protein'] . " g</p>";
            echo "<p>Fat: " . $row['fat'] . " g</p>";
        } else {
            echo "<p>Food not found in the database.</p>";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
  </div>
  </div>
</body>
</html>
