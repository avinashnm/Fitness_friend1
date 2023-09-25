function validateForm() {
    var full_name = document.getElementById("floatingUsername").value;
    var dob = document.getElementById("floatingDOB").value;
    var gender = document.getElementById("floatingSelectGender").value;
    var weight = document.getElementById("floatingWeight").value;
    var height = document.getElementById("floatingHeight").value;
    var activity_level = document.getElementById("floatingSelectActivity").value;
    var fitness_goal = document.getElementById("floatingSelectGoal").value;
    var username = document.getElementById("floatingUsername2").value;
    var email = document.getElementById("floatingMail").value;
    var password = document.getElementById("floatingPw").value;
    var confirm_password = document.getElementById("floatingCPw").value;

    // Check if any of the fields are empty
    if (
        full_name === "" ||
        dob === "" ||
        gender === "Select your Gender" ||
        weight === "" ||
        height === "" ||
        activity_level === "Select your Activity Level" ||
        fitness_goal === "Choose your Fitness Goal" ||
        username === "" ||
        email === "" ||
        password === "" ||
        confirm_password === ""
    ) {
        alert("All fields are required.");
        return false;
    }

    // Check if passwords match
    if (password !== confirm_password) {
        alert("Password and Confirm Password do not match.");
        return false;
    }

    return true;
}
