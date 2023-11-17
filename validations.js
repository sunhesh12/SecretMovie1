function validateForm() {
    
    clearErrors();


    if (!validateRequiredField(document.getElementById("cusUName"))) return false;
    if (!validateRequiredField(document.getElementById("cusName"))) return false;
    if (!validateEmail(document.getElementById("cusEmail"))) return false;
    if (!validatePasswordStrength(document.getElementById("passwordField1"))) return false;
    if (!validatePasswordMatch(document.getElementById("passwordField1"), document.getElementById("passwordField2"))) return false;

    return true;
}

function clearErrors() {
    var errorElements = document.querySelectorAll(".error-message");
    for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = "";
    }
}

function validateRequiredField(inputField) {
    const errorMessage = "This field is required.";
    if (inputField.value.trim() === "") {
        document.getElementById("error-message").textContent = errorMessage;
        return false;
    }else {
        document.getElementById("error-message").textContent = "";
        return true;
    }
}

function validateEmail(inputField) {
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const errorMessage = "Invalid email address";
    
    if (!emailPattern.test(inputField.value)) {
        document.getElementById("error-message").textContent = errorMessage;
        return false;
    } else {
        document.getElementById("error-message").textContent = "";
        return true;
    }
}


function validatePasswordStrength(inputField) {

    const errorMessage = "Password should be at least 8 characters long.";
    if (inputField.value.length < 8) {
        document.getElementById("error-message").textContent = errorMessage;
        return false;
    }else {
        document.getElementById("error-message").textContent = "";
        return true;
    }
}


function validatePasswordMatch(passwordField1, passwordField2) {
    const errorMessage =  "Passwords do not match.";
    if (passwordField1.value !== passwordField2.value) {
        document.getElementById("error-message").textContent = errorMessage;
        return false;
    }else {
        document.getElementById("error-message").textContent = "";
        return true;
    }
}
function displayError(inputField, errorMessage) {
    var errorElement = document.createElement("span");
    errorElement.classList.add("error-message");
    errorElement.textContent = errorMessage;
    inputField.parentNode.appendChild(errorElement);
}

