var step = 1;

function nextStep() {
    if (step === 1) {
        // Validate the fields in the first step here if needed
        // For example, you can check if they are not empty
        var fullName = document.querySelector('input[name="full_name"]').value;
        var dob = document.querySelector('input[name="dob"]').value;
        var gender = document.querySelector('select[name="gender"]').value;
        var weight = document.querySelector('input[name="weight"]').value;
        var height = document.querySelector('input[name="height"]').value;
        var activityLevel = document.querySelector('select[name="activity_level"]').value;
        var fitnessGoal = document.querySelector('select[name="fitness_goal"]').value;

        // Perform validation here, e.g., check if any fields are empty
        if (fullName === '' || dob === '' || gender === 'Select your Gender' || weight === '' || height === '' || activityLevel === 'Select your Activity Level' || fitnessGoal === 'Choose your Fitness Goal') {
            alert("Please fill out all the required fields in the first step.");
            return;
        }

        // Store the data in hidden fields in the second step
        document.querySelector('input[name="step"]').value = 2;
        document.querySelector('input[name="username"]').value = fullName;
        document.querySelector('input[name="email"]').value = dob;
        document.querySelector('input[name="password"]').value = gender;
        document.querySelector('input[name="confirm_password"]').value = weight;
    }

    // Submit the form to the next step
    document.getElementById('registrationForm').submit();
}

function prevStep() {
    // Hide the current step
    document.getElementById(`step-${step}`).style.display = "none";

    // Decrement the step variable
    step -= 1;

    // Show the previous step
    document.getElementById(`step-${step}`).style.display = "block";
}
