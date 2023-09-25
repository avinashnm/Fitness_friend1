function validateForm() {
    var fullName = document.getElementById("fullname").value;
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").value;
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var activityLevel = document.getElementById("activitylevel").value;
    var fitnessGoal = document.getElementById("fitnessgoal").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("mail").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmpassword").value;

    // Check if any of the fields are empty
    if (
      fullName === "" ||
      dob === "" ||
      gender === "Select your Gender" ||
      weight === "" ||
      height === "" ||
      activityLevel === "Select your Activity Level" ||
      fitnessGoal === "Choose your Fitness Goal" ||
      username === "" ||
      email === "" ||
      password === "" ||
      confirmPassword === ""
    ) {
      alert("All fields are required");
      return false;
    }

    // Check if password and confirm password match
    if (password !== confirmPassword) {
      alert("Password and Confirm Password do not match");
      return false;
    }

    // If all checks pass, the form will submit
    return true;
  }
