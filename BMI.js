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

    // Display the BMI
    document.getElementById("bmiResult").textContent = "Your BMI is: " + bmi.toFixed(2);

    return true;
}
