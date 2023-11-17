function validateForm() {
    var x = document.forms["myForm"]["cusUName"].value;
    var y = document.forms["myForm"]["cusName"].value;
    var z = document.forms["myForm"]["cusEmail"].value;
    var a = document.forms["myForm"]["password"].value;
    var b = document.forms["myForm"]["ConPassword"].value;
    if (x == "" || x == null) {
        alert("User Name must be filled out");
        return false;
    }
    if (y == "" || y == null) {
        alert("Your Name must be filled out");
        return false;
    }
    if (z == "" ||z == null) {
        alert("Your Email must be filled out");
        return false;
    }
    if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(z)) {
        alert("Invalid email address");
        return false;
    }

    if (a == "" || a == null) {
        alert("Your Password must be filled out");
        return false;
    }
    if (a.length < 8) {
        alert("Password should be at least 8 characters long.");
        return false;
    }
    if (b == "" || b == null) {
        alert("User Conform Password must be filled out");
        return false;
    }
    if (a !== b) {
        alert("Passwords do not match.");
        return false;
    }

}

const passwordField1 = document.getElementById("passwordField1");
const togglePassword1 = document.getElementById("togglePassword1");

function togglePasswordVisibility1() {
    if (passwordField1.type === "password") {
        passwordField1.type = "text";
        togglePassword1.src = "images/eye.png"; // Replace with your "hide password" image
    } else {
        passwordField1.type = "password";
        togglePassword1.src = "images/cloesEye.png"; // Replace with your "show password" image
    }
}

const passwordField2 = document.getElementById("passwordField2");
const togglePassword2 = document.getElementById("togglePassword2");

function togglePasswordVisibility2() {
    if (passwordField2.type === "password") {
        passwordField2.type = "text";
        togglePassword2.src = "images/eye.png"; // Replace with your "hide password" image
    } else {
        passwordField2.type = "password";
        togglePassword2.src = "images/cloesEye.png"; // Replace with your "show password" image
    }
}