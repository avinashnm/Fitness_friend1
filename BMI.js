function validateWeightHeightForm() {
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    if (weight === "" || height === "") {
        alert("Enter all the required fields *");
        return false;
    }
    return true;
}
