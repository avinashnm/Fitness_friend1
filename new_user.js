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

    // Perform AJAX request to submit the form data to PHP for validation
    $.ajax({
        type: "POST",
        url: "new_user.php", // Replace with the actual URL of your PHP script
        data: {
            full_name: full_name,
            dob: dob,
            gender: gender,
            weight: weight,
            height: height,
            activity_level: activity_level,
            fitness_goal: fitness_goal,
            username: username,
            email: email,
            password: password,
            confirm_password: confirm_password
        },
        success: function (response) {
            // Parse the JSON response
            var responseData = JSON.parse(response);

            if (responseData.status === "success") {
                // Registration was successful, you can redirect or display a success message
                alert(responseData.message);
                // Redirect to a success page or perform other actions
                window.location.href = "success_page.php";
            } else {
                // Display the error message
                alert(responseData.message);
            }
        }
    });

    return false; //
