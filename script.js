document.addEventListener("mousemove", function(e){
    let ele = document.getElementById('element');
    let distance = ele.offsetLeft + ele.offsetWidth - e.pageX;
    distance < 10 && distance > -10 ? ele.classList.add('more-width') : ele.classList.remove('more-width');
});



        // JavaScript code for managing the shopping cart goes here
    
        // Sample event listener for adding items to the cart
const addToCartButtons = document.querySelectorAll('.add-to-cart');
addToCartButtons.forEach(button => {
    button.addEventListener('click', function () {
        // Add the selected item to the cart
        // Update the cart display
    });
});

const passwordField = document.getElementById("passwordField");
const togglePassword = document.getElementById("togglePassword");

function togglePasswordVisibility() {
    if (passwordField.type === "password") {
        passwordField.type = "text";
        togglePassword.src = "images/eye.png"; // Replace with your "hide password" image
    } else {
        passwordField.type = "password";
        togglePassword.src = "images/cloesEye.png"; // Replace with your "show password" image
    }
}
