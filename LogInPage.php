<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECRET MOVIE</title>
    <link rel="icon" href="images\3841825_cinema_film_movie_multimedia_player_icon.ico" type="image/x-icon"/>
    <?php include "styleSheet\styleConnectio.php"; ?>
</head>
<body>
    <div class="container">
        <div class="transparent-box" style="top: 15px; height: 70px; width: 96%; left: 2%;">
            <div style="margin-top: 10px; width: 200px;">
                <img class="img1" src="images/1.png" style="width: 200px; height: 50px;">
            </div>
        </div>
        <div class="transparent-box" id="element" style="height: 500px; width: 500px;">
            <div>
                <h1 style="text-align: center; color: white; font-weight: bold;" >LOG IN </h1>
            </div>
        
            <form method="post" action="LogIndb.php">

                <div style="height: 50px; width: 450px; margin-top: 30px;margin-left: 25px; display: flex; justify-content: center; align-items: center;">
                    <input type="text" class="usernm" id="username" name="username" placeholder="Enter your username" required>
                </div>

                <div style="height: 50px; width: 450px; margin-top: 30px;margin-left: 25px; display: flex; justify-content: center; align-items: center;">
                    <input type="password" name="password" class="pass" placeholder="Enter your password" required id="passwordField">
                    <div style="text-align: center; width: 40px; height: 40px; position: absolute; left: 78%;">
                        <img style="margin-top: 30%;" src="images/cloesEye.png" alt="Show Password" class="toggle-password" id="togglePassword" onclick="togglePasswordVisibility()">
                    </div>            
                </div>

                <div style="height: 50px; width: 450px; margin-top: 30px;margin-left: 25px; display: flex; justify-content: center; align-items: center;">
                    <button class="logIn" >LOG IN</button>  
                </div>
                
            </form>
            <div class="singUpDiv" style="margin-top:-30px;">
                <form action="SingUpPage.php">
                    <h4 style="color:#ffffff">Create new account</h4>
                    <button class="singUp" type="submit" style="margin-top:-20px;">Sign Up</button>
                    <!-- <hr width="99%" color="black" align="center"> -->
                </form>
            </div>
        </div>   
        <?php include 'neonLogo.php'; ?>
    <script src="validations.js"></script>
    <script>

        const passwordField = document.getElementById("passwordField");
        const togglePassword = document.getElementById("togglePassword");

        function togglePasswordVisibility() {
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
        // This is just to auto-update the data-text if you're editing it directly on the page and is not required for the actual effect
        $('[data-text]').on('keyup', function(){
        $(this).attr('data-text', $(this).text());
        });
    </script>
</body>
</html>