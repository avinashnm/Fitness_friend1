function validateWeightHeightForm() {
    var weight = parseFloat(document.getElementById("weight").value);
    var heightInCm = parseFloat(document.getElementById("height").value);

    if (isNaN(weight) || isNaN(heightInCm) || weight <= 0 || heightInCm <= 0) {
        alert("Please enter valid weight and height values.");
        return false;
    }

    // Convert height from cm to meters
    var heightInM = heightInCm / 100;

    // Calculate BMI
    var bmi = weight / (heightInM * heightInM);

    // Determine BMI category
    var bmiCategory = "";

    if (bmi < 18.5) {
        bmiCategory = "Underweight";
    } else if (bmi >= 18.5 && bmi < 24.9) {
        bmiCategory = "Normal Weight";
    } else if (bmi >= 25 && bmi < 29.9) {
        bmiCategory = "Overweight";
    } else {
        bmiCategory = "Obese";
    }

    // Display the BMI and category
    document.getElementById("bmiResult").textContent = "Your BMI is: " + bmi.toFixed(2) + " (" + bmiCategory + ")";

    return true;
}
