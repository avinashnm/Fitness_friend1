function validateForm() {
    var username = document.getElementById("floatingUsername").value;
    var password = document.getElementById("floatingPw").value;
    if (username === "" || password === "") {
        alert("Both username and password are required.");
        return false;
    }
    return true;
}
